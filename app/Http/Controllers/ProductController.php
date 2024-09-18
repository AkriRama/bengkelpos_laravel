<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('adminproduct', ['products' => $products]);
    }

    public function add()
    {
        $categories = Category::all();
        return view('addproduct', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code_product' => 'required|unique:products',
            'name' => 'required|max:255',
        ]);

        $newName = '';
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
        }

        $request['cover'] = $newName;
        $product = Product::create($request->all());
        $product->categories()->sync($request->categories);
        return redirect('adminproduct')->with('status','Product Added Successfully');
    }
    
    public function edit($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $categories = Category::all();
        return view('editproduct', ['product'=> $product], ['categories' => $categories]);
    }
    
    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'name' => 'required|unique:products|max:255',
        ]);

        $product = Product::where('slug', $slug)->first();
        $product->name=null;
        $product->slug=null;
        $product->update($request->all());
        return redirect('adminproduct')->with('status','Product Updated Successfully');
    }

    public function delete($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $product->delete();
        return redirect('adminproduct')->with('status', 'Product Deleted Successfully'); 
    }
}
