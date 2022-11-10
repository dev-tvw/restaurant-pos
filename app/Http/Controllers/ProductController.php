<?php

namespace App\Http\Controllers;

use App\Events\NerOrderEvent;
use App\Events\OrderStatus as EventsOrderStatus;
use Illuminate\Support\Facades\View;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Notifications\NewOrder;
use App\Notifications\OrderStatus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $assets = ['data-table'];
        $limit = $request->has('limit') && $request->limit ? $request->limit : 10;
        $products = Product::paginate($limit);
        return view('products.index', compact('products', 'assets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'cost' => 'required',
            'name_ar' => 'required',
            'description' => 'nullable|string|max:250',
            'description_ar' => 'nullable|string|max:250',
            'category_id' => 'required',
            'image' => 'required'
        ]);
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/products'), $filename);
            $data['image'] = $filename;
        }
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'cost' => $request->cost,
            'name_ar' => $request->name_ar,
            'description' => $request->description,
            'description_ar' => $request->description_ar,
            'image' => $filename,
            'category_id' => $request->category_id
        ]);
        return redirect()->route('products.index')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function showOrder(Order $order)
    {
        return view('kitchen.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'price' => 'required',
            'cost' => 'required',
            'name' => 'required',
            'name_ar' => 'required',
            'description' => 'nullable|string|max:250',
            'description_ar' => 'nullable|string|max:250',
            'category_id' => 'required',
        ]);
        $filename = $product->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/products'), $filename);
            $data['image'] = $filename;
        }
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'cost' => $request->cost,
            'name_ar' => $request->name_ar,
            'description' => $request->description,
            'description_ar' => $request->description_ar,
            'image' => $filename,
            'category_id' => $request->category_id
        ]);
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function printInvoice(Order $order)
    {
        return view('kitchen.print', ['order' => $order]);
    }

    public function pos(Request $request)
    {
        $customers = Customer::where('id', '>', 1)->orderby('created_at', 'desc')->get();
        $walking_customer = Customer::where('id', 1)->first();
        $cart = Cart::where('status', '!=', 0)->where('customer_id', 1)->first();
        $products = Product::paginate(20);
        $categories = Category::all();
        return view('pos.index', compact('customers', 'cart', 'categories', 'products', 'walking_customer'));
    }

    public function kitchen(Request $request)
    {
        $orders = Order::whereDate('created_at', Carbon::today())->when(Auth::user()->user_type == 'cashier', function ($query) {
            $query->where('created_by', Auth::user()->id);
        })->orderby('created_at', 'desc')->paginate(20);
        Auth::user()->unreadNotifications->markAsRead();
        return view('kitchen.index', compact('orders'));
    }

    public function allOrders(Request $request)
    {
        $orders = Order::when(Auth::user()->user_type == 'cashier', function ($query) {
            $query->where('created_by', Auth::user()->id);
        })->orderby('created_at', 'desc')->paginate(20);
        Auth::user()->unreadNotifications->markAsRead();
        return view('kitchen.all', compact('orders'));
    }

    public function getCategoryProducts(Request $request, $category_id)
    {
        $products = Product::when($category_id, function ($q) use ($category_id) {
            $q->where('category_id', $category_id);
        })->when($request->search, function ($query) use ($request) {
            $query->where('name', 'like', '%' . $request->search . '%')->orWhere('price', $request->search);
        })->orderby('created_at', 'desc')->paginate(20);
        return View::make('pos.productsAjax')->with('products', $products);
    }

    public function submitCart($cutomer_id, $product_id, $quantity, $type)
    {
        $product = Product::where('id', $product_id)->first();
        $cart = Cart::where('customer_id', $cutomer_id)->where('status', '!=', 0)->first();
        if (!$cart) {
            $cart = Cart::create([
                'customer_id' => $cutomer_id,
                'status' => 1,
                'created_by' => Auth::user()->id
            ]);
        }
        $cartItem = CartItem::where('cart_id', $cart->id)->where('product_id', $product_id)->first();
        if ($cartItem) {
            if ($type == 'add')
                $cartItem->quantity += $quantity;
            else
                $cartItem->quantity = $quantity;
            $cartItem->save();
        } else {
            $cartItem = CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $product_id,
                'quantity' => $quantity,
                'price' => $product->price,
                'cost' => $product->cost
            ]);
        }
        return View::make('pos/cartAjax')->with('cart', $cart)->with('customer', $cart->customer->name);
        // return response()->json([
        //     'success' => true,
        //     'status' => 200,
        //     'message' => 'Cart submitted successfully',
        // ]);
    }

    public function getCart(Customer $customer_id)
    {
        $cart = Cart::where('customer_id', $customer_id->id)->where('status', '!=', 0)->whereHas('cartItems')->first();
        if ($cart) {
            return View::make('pos/cartAjax')->with('cart', $cart)->with('customer', $customer_id->name);
        } else {
            return View::make('pos/cartAjax')->with('cart', [])->with('customer', $customer_id->name);
        }
    }

    public function updateCartItem(Request $request)
    {
        $cartItem = CartItem::where('id', $request->cart_item_id)->first();
        if ($cartItem) {
            $cartItem->update([
                'quantity' => $request->quantity
            ]);
            return response()->json([
                'success' => true,
                'status' => 200,
                'message' => 'Cart updated successfully',
            ]);
        } else {
            return response()->json([
                'success' => true,
                'status' => 500,
                'message' => 'Cart Item not found',
            ]);
        }
    }

    public function removeCartItem($cart_item_id)
    {
        $cartItem = CartItem::where('id', $cart_item_id)->first();
        if ($cartItem) {
            $cart = $cartItem->cart;
            if (count($cart->cartItems) < 2) {
                $cart->delete();
                $cartItem->delete();
                return View::make('pos/cartAjax')->with('cart', [])->with('customer', $cart->customer->name);
            } else {
                $cartItem->delete();
                $cart = Cart::where('id', $cart->id)->first();
                return View::make('pos/cartAjax')->with('cart', $cart)->with('customer', $cart->customer->name);
            }
        } else {
            return View::make('pos/cartAjax')->with('cart', [])->with('customer', '');
        }
    }

    public function removeCart($cart_id)
    {
        $customer = '';
        $cart = Cart::where('id', $cart_id)->first();
        if ($cart) {
            $customer = $cart->customer->name;
            CartItem::where('cart_id', $cart->id)->delete();
            $cart->delete();
        }
        return View::make('pos/cartAjax')->with('cart', [])->with('customer', $customer);
    }

    public function submitOrder($cart_id)
    {
        $cart = Cart::where('id', $cart_id)->where('status', '!=', 0)->first();
        if ($cart) {
            if (count($cart->cartItems)) {
                $order_code = $this->generateKey();
                $path_qrcode = public_path('/uploads/qrcodes/orders');
                File::isDirectory($path_qrcode) or File::makeDirectory($path_qrcode, 0777, true, true);
                file_put_contents($path_qrcode . '/' . $order_code . '.png', base64_decode(\DNS2D::getBarcodePNG($order_code, 'QRCODE', 10, 10)));

                $new_order = Order::create([
                    'cart_id' => $cart->id,
                    'order_code' => $order_code,
                    'customer_id' => $cart->customer_id,
                    'item_count' => count($cart->cartItems),
                    'qr_code' => $order_code . '.png',
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                    'grand_total' => 0,
                    'status' => 1
                ]);
                $cart->cartItems->each(function ($cartItem, $key) use ($new_order) {
                    $grand = 0;
                    $profit = 0;
                    $grand += $cartItem->product->price * $cartItem->quantity;
                    $profit += $cartItem->product->cost * $cartItem->quantity;
                    $new_order->grand_total += $grand;
                    $new_order->profit += ($grand - $profit);
                    $new_order->save();
                });
                $cart->status = 0;
                $cart->save();
                $kitchen_user = User::where('user_type', 'kitchen')->first();
                $kitchen_user->notify(new NewOrder($new_order));
                $html = '<tr class="odd">

                <td class="name sorting_1"><a href="http://127.0.0.1:8000/order-detail/49">6KBXXL</a></td>
                <td class="qr_code"><img src="http://127.0.0.1:8000/uploads/qrcodes/orders/6KBXXL.png" width="70"></td>
                <td class="code">
                                                        Walking Customer
                                                        </td>
                <td class="created_by">2</td>
                <td class="updated_by">210000</td>
                <td class="created_at"><span class="badge rounded-pill bg-warning text-uppercase">Pending</span></td>
                <td class="updated_at"><span class="badge rounded-pill bg-success text-uppercase">10-11-2022</span></td>
                <td class="createdby">Cashier 2</td>
                <td>
                    <div class="d-flex gap-2"><div class="edit">
                            <a class="btn btn-sm btn-danger edit-item-btn change-status" data-url="http://127.0.0.1:8000/change-status/49/3" data-title="Are you sure to cancel this order?"><svg class="svg-inline--fa fa-xmark" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"></path></svg><!-- <i class="fa fa-times" aria-hidden="true"></i> Font Awesome fontawesome.com --> </a>
                        </div>
                                                                                                                                                                                                                        <div class="edit">
                            <a class="btn btn-sm btn-warning edit-item-btn change-status" data-url="http://127.0.0.1:8000/change-status/49/2" data-title="Are you sure to cook this order?"><svg class="svg-inline--fa fa-kitchen-set" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="kitchen-set" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M240 144c0-53-43-96-96-96s-96 43-96 96s43 96 96 96s96-43 96-96zm44.4 32C269.9 240.1 212.5 288 144 288C64.5 288 0 223.5 0 144S64.5 0 144 0c68.5 0 125.9 47.9 140.4 112h71.8c8.8-9.8 21.6-16 35.8-16H496c26.5 0 48 21.5 48 48s-21.5 48-48 48H392c-14.2 0-27-6.2-35.8-16H284.4zM144 208c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64zm256 32c13.3 0 24 10.7 24 24v8h96c13.3 0 24 10.7 24 24s-10.7 24-24 24H280c-13.3 0-24-10.7-24-24s10.7-24 24-24h96v-8c0-13.3 10.7-24 24-24zM288 464V352H512V464c0 26.5-21.5 48-48 48H336c-26.5 0-48-21.5-48-48zM48 320h80 16 32c26.5 0 48 21.5 48 48s-21.5 48-48 48H160c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V336c0-8.8 7.2-16 16-16zm128 64c8.8 0 16-7.2 16-16s-7.2-16-16-16H160v32h16zM24 464H200c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24z"></path></svg><!-- <i class=" fa fa-kitchen-set" aria-hidden="true"></i> Font Awesome fontawesome.com --> </a>
                        </div>
                                                                                                                                                                                                                    </div>
                </td>
                <td>
                                                                -
                                                            </td>
            </tr>';

                $data = ['message' => 'You have new Order', 'order' => $new_order];
                event(new NerOrderEvent(json_encode($data)));
                return View::make('pos/cartAjax')->with('cart', [])->with('customer', $cart->customer->name);
            } else {
                return View::make('pos/cartAjax')->with('cart', [])->with('customer', $cart->customer->name);
            }
        } else {
            return View::make('pos/cartAjax')->with('cart', [])->with('customer', '');
        }
    }

    public function changeStatus(Order $order, $status)
    {
        $order->status = $status;
        $order->updated_by = Auth::user()->id;
        $order->save();
        if ($status == 4 || $status == 3) {
            $end_point = $status == 3 ? 'cancelled' : 'ready';
            $user = User::where('id', $order->created_by)->first();
            $user->notify(new OrderStatus($order));
            $data = ['message' => 'Order Number ' . $order->order_code . ' is ' . $end_point, 'order' => $order];
            event(new EventsOrderStatus($data));
        }
        return redirect()->back()->with('success', 'Status has been updated successfully');
    }

    function generateKey()
    {
        $rand = strtoupper(substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6));
        // $rand = random_int(100000, 999999);
        if (!$this->validOrder($rand)) {
            $this->generateKey();
        } else {
            return $rand;
        }
    }

    function validOrder($key)
    {
        $rand = Order::where('order_code', $key)->first();
        if ($rand) {
            return false;
        } else {
            return true;
        }
    }
}
