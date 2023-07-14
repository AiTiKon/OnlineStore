<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();

        return view('admin.product.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);
        $path = $request->file('image')->store('uploads/product', 'public');
        

        $new_product = new Product();
        $new_product->name = $request->name;
        $new_product->code = $request->code;
        $new_product->category_id = $request->category_id;
        $new_product->description = $request->description;
        $new_product->price = $request->price;


        $new_product->image = $path;
        $new_product->save();

        return redirect()->back()->withSuccess('Товар был добавлен');
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
    public function edit(Product $product, Category $category)
    {
        $categories = Category::get();
        return view('admin.product.edit', [
            'product' => $product,
            'categories'=>$categories,
        ]);
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
        $product->name = $request->name;
        $product->code = $request->code;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->save();

        return redirect()->back()->withSuccess('Товар был обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->withSuccess('Товар был удален');
    }
}
