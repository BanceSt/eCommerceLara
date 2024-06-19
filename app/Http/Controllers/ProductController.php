<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show() {
        $products = Product::all();
        return view("home", [
            "products" => $products
        ]);
    }

    public function create(Request $request) {

        $product = new Product();

        $product->name = $request->input("name");
        $product->description = $request->input("description");
        $product->price = $request->input("price");

        $product->save();


        return view("new_product");
    }

    public function update(Request $request) {

        $product = Product::find($request->input("id"));

        $product->name = $request->input("name");
        $product->description = $request->input("description");
        $product->price = $request->input("price");

        $product->save();
        return view("");
    }

    public function delete(Request $request) {

        $product = Product::find($request->input("id"));

        $product->delete();
        return view("");
    }
}
