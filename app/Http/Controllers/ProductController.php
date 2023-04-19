<?php

namespace App\Http\Controllers;

use App\Events\NerOrderEvent;
use App\Events\OrderStatus as EventsOrderStatus;
use Illuminate\Support\Facades\View;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Customer;
use App\Models\ExtraType;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Notifications\NewOrder;
use App\Notifications\OrderStatus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;
use Illuminate\Support\Facades\Validator;

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
        // $products = Product::paginate($limit);
        $products = Product::withCount('cart_items')->orderby('created_at', 'desc')->get();
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
            'cooking_time' => 'required',
            'price' => 'required',
            'cost' => 'required',
            'name_ar' => 'required',
            'description' => 'nullable|string|max:250',
            'description_ar' => 'nullable|string|max:250',
            'category_id' => 'required',
            'image' => 'required'
        ], [
            'cooking_time.required' => 'Cooking Time field is required',
        ]);
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/products'), $filename);
            $data['image'] = $filename;
        }
        Product::create([
            'name' => $request->name,
            'cooking_time' => $request->cooking_time,
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
            'cooking_time' => 'required',
            'price' => 'required',
            'cost' => 'required',
            'name' => 'required',
            'name_ar' => 'required',
            'description' => 'nullable|string|max:250',
            'description_ar' => 'nullable|string|max:250',
            'category_id' => 'required',
        ], [
            'cooking_time.required' => 'Cooking Time field is required',
        ]);
        $filename = $product->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/products'), $filename);
            $data['image'] = $filename;
        }
        $product->update([
            'cooking_time' => $request->cooking_time,
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
        $product->active = $product->active ? 0 : 1;
        $product->save();
        return redirect()->back()->with('success', 'Status changed successfully');
    }

    public function printInvoice(Order $order)
    {
        return view('kitchen.print', ['order' => $order]);
    }

    public function pos(Request $request)
    {
        $customers = Customer::where('id', '>', 23)->orderby('created_at', 'desc')->get();
        $walking_customer = Customer::where('id', 23)->first();
        $cart = Cart::where('status', '!=', 0)->where('customer_id', 23)->first();
        $products = Product::orderby('created_at', 'desc')->where('active', 1)->paginate(20);
        $categories = Category::whereHas('products')->get();
        return view('pos.index', compact('customers', 'cart', 'categories', 'products', 'walking_customer'));
    }

    public function addExtra(Request $request)
    {
        // dd
        $total_price = 0;
        $extras_price = 0;
        $validator = Validator::make($request->all(), [
            'extras.*.quantity' => 'required_with:extras.*.extra',
            //'extras.*.extra' => 'required_with:extras.*.quantity',
        ], [
            'extras.*.quantity.required_with' => 'Quantity field is required',
            //'extras.*.extra.required_with' => 'Extra field should be selected',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first(), 'total_price' => $total_price]);
        }
        $cartItem = CartItem::where('id', $request->item_id)->first();

        if ($cartItem) {
            if (count($cartItem->extras)) {
                $cartItem->extras()->detach();
            }
            if (count($request->extras)) {
                foreach ($request->extras as $extra) {
                    if (isset($extra['extra'])) {
                        $cartItem->extras()->attach($extra['extra'], ['quantity' => $extra['quantity'] ?? 1]);
                    }
                }
            }
            $cartItem = CartItem::where('id', $request->item_id)->first();
            $cart = $cartItem->cart;
            foreach ($cart->cartItems as $item) {
                $cart = Cart::where('id', $request->cart_id)->first();
                $total_price = $total_price + ($item->quantity * $item->product->price);
                if (count($item->extras)) {
                    foreach ($item->extras as $extra) {
                        $extras_price += ($extra->price * $extra->pivot->quantity);
                        $total_price = $total_price + ($extra->price * $extra->pivot->quantity);
                    }
                }
            }
            return response()->json(['success' => true, 'message' => 'Updated Successfully', 'total_price' => $total_price, 'extras_price' => $extras_price]);
        } else {
            return response()->json(['success' => false, 'message' => 'Something went wrong, Please try again', 'total_price' => $total_price]);
        }
    }

    public function getExtraSectionAjax($item_id)
    {
        //dd
        $cartItem = CartItem::whereId($item_id)->first();
        $types = ExtraType::whereHas('extras')->where('status', true)->get();
        $extras_selected = [];
        $extra_array = [];
        if (count($cartItem->extras)) {
            foreach ($cartItem->extras as $extra) {
                $extra_array[$extra->id] = $extra->pivot->quantity;
                $extras_selected[] = $extra->id;
            }
        }
        return View::make('pos/addExtraAjax')->with('types', $types)->with('extras_selected', $extras_selected)->with('extra_array', $extra_array);
    }

    public function kitchen(Request $request)
    {
        $orders = Order::whereDate('created_at', Carbon::today())->when(Auth::user()->user_type == 'cashier', function ($query) {
            $query->where('created_by', Auth::user()->id);
        })->orderby('created_at', 'desc')->paginate(20);
        Auth::user()->unreadNotifications->markAsRead();
        $cashiers = User::query()->where('user_type', 'cashier')->get();
        return view('kitchen.index', compact('orders', 'cashiers'));
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
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('price', $request->search)
                ->orWhere('name_ar', 'like', '%' . $request->search . '%')
                ->orWhere('id', $request->search);
        })->where('active', 1)->orderby('created_at', 'desc')->paginate(20);
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
            if ($type == 'add') {
                $cartItem->quantity += $quantity;
            } else {
                $cartItem->quantity = $quantity;
            }
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
            $cartItem->extras()->detach();
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
            $cartItem = CartItem::where('cart_id', $cart->id)->first();
            $cartItem->extras()->detach();
            $cartItem->delete();
            $cart->delete();
        }
        return View::make('pos/cartAjax')->with('cart', [])->with('customer', $customer);
    }

    public function submitOrder($cart_id, $discount)
    {
        $cart = Cart::where('id', $cart_id)->where('status', '!=', 0)->first();

        if ($cart) {
            if (count($cart->cartItems)) {
                $products_ids = CartItem::query()->where('cart_id', $cart_id)->pluck('product_id');
                $cooking_time = Product::query()->whereIn('id', $products_ids)->sum('cooking_time');
                $order_code = $this->generateKey();
                $daily_code = $this->generateDailyCode();
                $path_qrcode = public_path('/uploads/qrcodes/orders');
                File::isDirectory($path_qrcode) or File::makeDirectory($path_qrcode, 0777, true, true);
                file_put_contents($path_qrcode . '/' . $order_code . '.png', base64_decode(\DNS2D::getBarcodePNG($order_code, 'QRCODE', 10, 10)));
                $new_order = Order::create([
                    'cart_id' => $cart->id,
                    'order_code' => $order_code,
                    'daily_code' => $daily_code,
                    'customer_id' => $cart->customer_id,
                    'item_count' => count($cart->cartItems),
                    'qr_code' => $order_code . '.png',
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                    'discount' => $discount,
                    'grand_total' => 0,
                    'status' => 1,
                    'cooking_time' => (int)$cooking_time
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
                $qr_code_image = asset("uploads/qrcodes/orders/" . $new_order->qr_code);
                $html = '<tr class="odd">';
                $html .= '<td class="name sorting_1"><a href="' . route("orders.show", ["order" => $new_order]) . '">' . $new_order->order_code . '</a></td>';
                $html .= '<td class="qr_code"><img src="' . $qr_code_image . '" width="70"></td>';
                $html .= '<td class="code">' . $new_order->customer->name . '</td>';
                $html .= '<td class="created_by">' . $new_order->item_count . '</td>';
                $html .= '<td class="updated_by">' . $new_order->grand_total . '</td>';
                $badge_text = $new_order->status == 1 ? 'bg-warning' : ($new_order->status == 2 ? 'bg-info' : ($new_order->status == 3 ? "bg-danger" : ($new_order->status == 4 ? "bg-secondary" : "bg-success")));
                $badge_value = $new_order->status == 1 ? 'Pending' : ($new_order->status == 2 ? 'Cooking' : ($new_order->status == 3 ? 'Cancelled' : ($new_order->status == 4 ? 'Delivered' : 'Ready')));
                $html .= '<td class="created_at"><span class="badge rounded-pill ' . $badge_text . ' text-uppercase">' . $badge_value . '</span></td>';
                $html .= '<td class="updated_at"><span class="badge rounded-pill bg-success text-uppercase">' . dateFormat($new_order->created_at) . '</span></td>';
                $html .= '<td class="createdby">' . $new_order->createdby->first_name . ' ' . $new_order->createdby->last_name . '</td>';
                $html .= '<td><div class="d-flex gap-2">';
                $html .= '<div class="edit">
                    <a class="btn btn-sm btn-warning edit-item-btn change-status" href="' . route("changeStatus", ["order" => $new_order, "status" => 2]) . '" data-title="Are you sure to cook this order?"><i class=" fa fa-kitchen-set" aria-hidden="true"></i> </a>
                </div>';
                $html .= '</div></td>';
                $html .= '<td>';
                $html .= '-';
                $html .= '</td>';
                $html .= '</tr>';
                // $orders = $new_order->id;
                $data = ['message' => 'You have new Order', 'order' => $new_order, 'html' => $html, 'notifiable_id' => $kitchen_user->id ];
                event(new NerOrderEvent(json_encode($data)));
                return response()->json(['order_id' => $new_order->id]);
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

    public function generateKey()
    {
        $rand = strtoupper(substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6));
        // $rand = random_int(100000, 999999);
        if (!$this->validOrder($rand)) {
            $this->generateKey();
        } else {
            return $rand;
        }
    }

    public function generateDailyCode()
    {
        $daily_code = 1;
        $last_order = Order::whereDate('created_at', Carbon::today())->latest()->first();
        if ($last_order) {
            $daily_code = $last_order->daily_code + 1;
        }
        return $daily_code;
    }

    public function validOrder($key)
    {
        $rand = Order::where('order_code', $key)->first();
        if ($rand) {
            return false;
        } else {
            return true;
        }
    }

    public function assembly(Request $request)
    {
        // $orders = Order::whereDate('created_at', Carbon::today())->when(Auth::user()->user_type == 'cashier', function ($query) {
        //     $query->where('created_by', Auth::user()->id);
        // })->orderby('created_at', 'desc')->paginate(20);

        $orders = Order::query()->where('status', '!=', 4)
                                ->orderby('created_at', 'ASC')
                                // ->paginate(12);
                                ->get();

        // if ($request->ajax()) {
        //     return view('kitchen.ajaxAssembly', compact('orders'));
        // }
        return view('kitchen.assembly', compact('orders'));
    }

    public function startOrder($id)
    {
        $order = Order::whereId($id)->update([
            'status' => 2,
            'start_at' => now()
        ]);
        return response()->json(['success' => true]);
    }

    public function endOrder($id)
    {
        $order = Order::whereId($id)->update([
            'status' => 4
        ]);
        return response()->json(['success' => true]);
    }

    /**
     * countInvoice
     *
     * @param  mixed $request
     * @return void
     */
    public function countInvoice(Request $request)
    {
        if(auth()->user()->user_type == 'admin') {
            $cashier_id = $request->input('cashier_name');
            // $orders = Order::whereDate('created_at', Carbon::today())->when(Auth::user()->user_type == 'cashier', function ($query) {})->orderby('created_at', 'desc')->get();
            $cashier = User::find($cashier_id);
            $orders = $cashier->orders()->whereDate('created_at', Carbon::today())->get();
            $count = count($orders);
            return view('kitchen.print_count_order', ['cashier' => $cashier,'orders' => $orders, 'count' => $count ]);
        } elseif(auth()->user()->user_type == 'cashier') {
            // $orders = Order::whereDate('created_at', Carbon::today())->when(Auth::user()->user_type == 'cashier', function ($query) {})->orderby('created_at', 'desc')->get();
            $cashier = User::find(auth()->user()->id);
            $orders = $cashier->orders()->whereDate('created_at', Carbon::today())->orderby('created_at', 'desc')->get();
            $count = count($orders);

            return view('kitchen.print_count_order', ['cashier' => $cashier,'orders' => $orders, 'count' => $count ]);
        } else {
            return;
        }
    }


    /**
     * get_all_orders_with_discount_zero
     *
     * @return void
     */
    public function get_all_orders_with_discount_zero()
    {
        $orders = Order::query()->where('discount', 0)->orderby('created_at', 'desc')->paginate(20);
        Auth::user()->unreadNotifications->markAsRead();
        return view('kitchen.all_orders_discount_zero', compact('orders'));
    }

    public function kitchen_discount_zero(Request $request)
    {
        $orders = Order::whereDate('created_at', Carbon::today())->orderby('created_at', 'desc')->paginate(20);
        Auth::user()->unreadNotifications->markAsRead();
        $cashiers = User::query()->where('user_type', 'cashier')->get();
        return view('kitchen.index_discount_zero', compact('orders', 'cashiers'));
    }
}
