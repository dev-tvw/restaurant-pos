<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Language;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $categories = Category::all();
        return view('categories.index', compact('categories', 'assets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Language::all();
        $categories = Category::where('category_id', 0)->get();
        return view('categories.create', compact('categories', 'languages'));
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
            'image' => 'required'
        ]);
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/categories'), $filename);
            $data['image'] = $filename;
        }
        Category::create([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'image' => $filename,
            'category_id' => $request->parent_category ? $request->parent_category : 0
        ]);
        return redirect()->route('categories.index')->with('success', 'Category added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $languages = Language::all();
        $categories = Category::where('id', '!=', $category->id)->get();
        return view('categories.edit', compact('categories', 'category', 'languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'name_ar' => 'required',
        ]);
        $filename = $category->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/categories'), $filename);
            $data['image'] = $filename;
        }
        $category->update([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'image' => $filename,
            'category_id' => $request->parent_category ? $request->parent_category : 0
        ]);
        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->status = $category->status ? 0 : 1;
        $category->save();
        return redirect()->back()->with('success', 'Status changed successfully');
    }

    public function deleteCategory(Category $category)
    {
        return redirect()->back();
        $items = CartItem::whereHas('product', function ($qq) use ($category) {
            $qq->whereCategoryId($category->id);
        })->get();
        foreach ($items as $item) {
            if (count($item->extras))
                $item->extras()->detach();
            $item->delete();
        }
        Order::whereHas('cart.cartItems.product', function ($cq) use ($category) {
            $cq->whereCategoryId($category->id);
        })->delete();
        Cart::whereHas('cartItems.product', function ($cq) use ($category) {
            $cq->whereCategoryId($category->id);
        })->delete();
        Product::whereCategoryId($category->id)->delete();
        Category::whereId($category->id)->delete();
        return redirect()->back()->with('success', 'Category and all data related to this category is deleted');
    }
}
