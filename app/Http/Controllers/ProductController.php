<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index(){
        $products = Product::all();
        return view('admin.products.view', compact('products'));
    }

    public function create(){
        return view('admin.products.create');
    }

    public function save(Request $request){

        $validated = $request->validate([
            'productTitle' => ['required', 'string', 'max:255'],
            'productDes' => 'required',
        ]);

       $product = Product::create([
            'productTitle'=>$request->productTitle,
            'productDes'=>$request->productDes,
            'salePrice'=> $request->salePrice,
            'regPrice'=>$request->regPrice,
            'productImg'=> 'bla bla',
            'user_id'=>auth()->user()->id,
            'productStatus'=>'bllla',
        ]);

        return back()->with('message','success');
    }

    public function shop(){
        $products = Product::all();
        return view('shop', compact('products'));
    }

}
