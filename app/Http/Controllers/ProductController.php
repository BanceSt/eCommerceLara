<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view("home", [
            "products" => $products
        ]);
    }

    public function show(int $id) {
        $product = Product::find($id);

        return view("product", [
            "product" => $product
        ]);
    }

    public function create(Request $request) {

        $product = new Product();

        $product->name = $request->input("name");
        $product->description = $request->input("description");
        $product->price = number_format((float)$request->input("price"), 2, '.', '');

        $product->save();


        return redirect("/");
    }

    public function to_updt_view(int $id) {
        $product = Product::find($id);

        // return dd($product);

        return view("updt_product", [
            "product" => $product
        ]);
    }

    public function update(Request $request) {

        $product = Product::find($request->input("id"));

        $product->name = $request->input("name");
        $product->description = $request->input("description");
        $product->price = $request->input("price");

        $product->save();
        return redirect("/");
    }

    public function delete(Request $request) {

        $product = Product::find($request->input("id"));

        $product->delete();
        return  redirect("/");
    }
}
