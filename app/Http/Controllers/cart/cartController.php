<?php

namespace App\Http\Controllers\cart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;


class cartController extends Controller
{
    //
    function addProduct($product_id) {
        $id = $product_id;
        $product = Product::find($id);
        if (!$product){
            abort(404);
        }
        $cart = session()->get('cart');

        if (!$cart) {
            $cart = [
                $id => [
                    "name"=> $product->name,
                    "quantity"=> 1,
                    "price"=> $product->price,
                    "category_id"=> $product->category_id,
                    "product_id"=>$id,
                    "photo"=>$product->image_intro
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with("Success", "Product add to cart success");
        }

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with("Success", "Product added to cart successful");
        }

        $cart[$id] = [
            "name"=> $product->name,
            "quantity"=> 1,
            "price"=> $product->price,
            "category_id"=> $product->category_id,
            "product_id"=>$id,
            "photo"=>$product->image_intro
        ];

        session()->put('cart', $cart);
        return redirect()->back()->with("Success", "Product added to cart successfully!");
    }

    function getList() {
        return view("cart.list");
    }
}
