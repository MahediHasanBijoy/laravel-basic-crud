<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();

        return view('product.index', ['products'=>$products]);
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->qty = $request->qty;

        $product->save();

        return redirect('/products');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('product.edit', ['product'=>$product]);
    }

    public function update(Request $request, $id){
        $product = Product::find($id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->qty = $request->qty;
        $product->update();

        return redirect('/products');
    }

    public function destroy($id){
        $product = Product::find($id);

        $product->delete();

        return redirect('/products');
    }
}
