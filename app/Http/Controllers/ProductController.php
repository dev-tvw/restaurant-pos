<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

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
            'name_ar' => 'required',
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
        //
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
            'name' => 'required',
            'name_ar' => 'required',
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

    public function pos()
    {
        $customers = Customer::orderby('created_at', 'asc')->get();
        $cart = Cart::where('status', '!=', 0)->where('customer_id', 1)->first();
        $products = Product::paginate(20);
        $categories = Category::all();
        return view('pos.index', compact('customers', 'cart', 'categories', 'products'));
    }

    public function kitchen()
    {
        $orders = Order::orderby('created_at', 'desc')->paginate(20);
        return view('kitchen.index', compact('orders'));
    }

    public function submitCart($cutomer_id, $product_id, $quantity, $type)
    {
        $product = Product::where('id', $product_id)->first();
        $cart = Cart::where('customer_id', $cutomer_id)->where('status', '!=', 0)->first();
        if (!$cart) {
            $cart = Cart::create([
                'customer_id' => $cutomer_id,
                'status' => 1
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
                'price' => $product->price
            ]);
        }
        return View::make('pos/cartAjax')->with('cart', $cart);
        // return response()->json([
        //     'success' => true,
        //     'status' => 200,
        //     'message' => 'Cart submitted successfully',
        // ]);
    }

    public function getCart($customer_id)
    {
        $cart = Cart::where('customer_id', $customer_id)->where('status', '!=', 0)->whereHas('cartItems')->first();
        if ($cart) {
            return View::make('pos/cartAjax')->with('cart', $cart);
        } else {
            return View::make('pos/cartAjax')->with('cart', []);
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
                return View::make('pos/cartAjax')->with('cart', []);
            } else {
                $cartItem->delete();
                $cart = Cart::where('id', $cart->id)->first();
                return View::make('pos/cartAjax')->with('cart', $cart);
            }
        } else {
            return View::make('pos/cartAjax')->with('cart', []);
        }
    }

    public function removeCart($cart_id)
    {
        $cart = Cart::where('id', $cart_id)->first();
        if ($cart) {
            CartItem::where('cart_id', $cart->id)->delete();
            $cart->delete();
        }
        return View::make('pos/cartAjax')->with('cart', []);
    }

    public function submitOrder($cart_id)
    {
        $cart = Cart::where('id', $cart_id)->where('status', '!=', 0)->first();
        if ($cart) {
            if (count($cart->cartItems)) {
                $order_code = $this->generateKey();
                $new_order = Order::create([
                    'cart_id' => $cart->id,
                    'order_code' => $order_code,
                    'customer_id' => $cart->customer_id,
                    'item_count' => count($cart->cartItems),
                    'grand_total' => 0,
                    'status' => 1
                ]);
                $cart->cartItems->each(function ($cartItem, $key) use ($new_order) {
                    $grand = 0;
                    $grand += $cartItem->product->price * $cartItem->quantity;
                    $new_order->grand_total = $grand;
                    $new_order->save();
                });
                $cart->status = 0;
                $cart->save();
                return View::make('pos/cartAjax')->with('cart', []);
            } else {
                return View::make('pos/cartAjax')->with('cart', []);
            }
        } else {
            return View::make('pos/cartAjax')->with('cart', []);
        }
    }

    public function changeStatus(Order $order, $status)
    {
        $order->status = $status;
        $order->save();
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
