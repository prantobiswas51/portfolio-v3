<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    
    public function index(){
        $products = Product::all();
        return view('admin.products.view', compact('products'));
    }

    public function create(){
        $categories =  Category::get();
        return view('admin.products.create', compact('categories'));
    }

    public function save(Request $request){

        $image = $request->productImage;  // your base64 encoded
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        $imageName = time().'.'.'png';
        Storage::disk('productimages')->put($imageName, base64_decode($image));

        $validated = $request->validate([
            'productTitle' => ['required', 'string', 'max:255'],
            'productDes' => 'required',
            'regPrice' => 'required',
            'productStatus' => 'required',
            'productImage' => 'required',
            'productShortDes' => 'required'
        ]);

       $product = Product::create([
            'productTitle'=>$request->productTitle,
            'productShortDes'=>$request->productShortDes,
            'productDes'=>$request->productDes,
            'salePrice'=> $request->salePrice,
            'regPrice'=>$request->regPrice,
            'productImg'=> $imageName,
            'user_id'=>auth()->user()->id,
            'productStatus'=> $request->productStatus,
            
        ]);

        $product->categories()->sync($request->categories);
        return back()->with('message','Success');
    }

    public function work(){
        return view('works');
    }

    public function viewSingleProduct($id){
        $products = Product::find($id);
        return view('productTemplate', compact('products'));
    }

}
