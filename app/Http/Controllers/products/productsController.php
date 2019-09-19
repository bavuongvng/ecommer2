<?php

namespace App\Http\Controllers\products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class productsController extends Controller
{
    //
    function getlist()
    {
        $products = Product::all();
        return view('products.list', compact('products'));
    }

    function addItem()
    {
        return view('products.item');
    }

    function store(Request $request)
    {
        $product = new Product();

        $product->title = $request->title;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->publish = $request->publish;
        $product->hot_product = $request->hot_product;
        $product->category_id = $request->category_id;
        $product->ordering = $request->ordering;
        $product->image_intro = $request->image_intro;

        $product->save();

        return redirect()->route('list-products');
    }

    function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('list-products');
    }

    function edit(Request $request)
    {
        $id = $request->id;
        $product = Product::find($id);
        echo "<pre>";
        echo $product;
        echo "</pre>";
        return view("products.edit", compact("product"));
    }

    function update(Request $request)
    {
        $id = $request->id;
        $product = Product::find($id);

        $product->title = $request->title;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->publish = $request->publish;
        $product->hot_product = $request->hot_product;
        $product->category_id = $request->category_id;
        $product->ordering = $request->ordering;
        $product->image_intro = $request->image_intro;

        $product->save();
        return redirect()->route('list-products');
    }
}