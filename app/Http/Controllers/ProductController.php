<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index(){
        $products=Product::all();
    }


    public function create(){
        return view('product.create');
    }

    public function store(ProductRequest $request){
        $data=[
            'name'=>$request->name,
            'price'=>$request->price,
        ];
       Product::create($data);
    }

    public function edit($id){
        $product=Product::findorfail(2);
    }

    public function update($id,ProductRequest $request){
        $product=Product::where('id',$id)->first();
        $data=[
            'name'=>$request->name,
            'price'=>$request->price,
        ];
        $product->update($data);
    }

    public function delete($id){
        $product=Product::findorfail($id);
        $product->delete();
        return route('product.index')->with('message','product deleed succefully');
    }
    public function view($id){
        $product=Product::findorfail($id);
        return view('product.show',compact('product'));
    }
    
}
