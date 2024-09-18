<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
// use DB;

use Illuminate\Database\Eloquent\Collection;

class PublicController extends Controller
{
    public function index(Request $request) : View
    {
        $categories = Category::all();

        if ($request->title) {
            $products = Product::where('name','like','%'.$request->title.'%')->paginate(8);
        }
        elseif($request->input('category')){
            $products = Product::whereHas('categories', function($q) use($request){
                $q->where('categories.id', $request->input('category'));
            })->paginate(8);
            
            $selectedCategory = request('category');
        }
        else{
            $products = Product::paginate(8);
        }
        return view('product', ['products' => $products,'categories' => $categories]);
    }

    public function detailproduct($slug)
    {
        $products = Product::where('slug', $slug)->first();
        return view('detailproduct', ['products' => $products]);
    }


    public function store(Request $request, $slug)
    {
        $quantity = $request->input('quantity');
        $products = Product::where('slug', $slug)->first();
        $total = $quantity*$products->price;
        
        return  view('confirmationpayment', ['quantity' => $quantity, 'products' => $products, 'total'=>$total]);
        // return redirect()->back()->with('status','Transaksi Berhasil');
        // $products = Product::where('slug', $slug)->first();
        // if($products->stock > 0)
        // {
            //     $products->stock -= 1;
            //     $products->save();
            //     return redirect()->back()->with('status','Updated');
            // }
            // else{
                //     return view('detailproduct');
                // }
    }
            
    public function confirmation(Request $request,$slug)
    {
        $quantity = $request->input('quantity');
        $products = Product::where('slug', $slug)->first();
        if($products->stock > 0)
        {
            $products->stock -= $quantity;
            $products->update();
            return view('transactionsuccess');
            // return redirect('transactionsuccess')->with('status','Pembayaran berhasil');
            // return redirect('/purchase')->with('status','Pembayaran berhasil');
        }
        else{
            return redirect('product')->with('status','Harap Bayar');
        }
    }

    public function success()
    {
        return view('transactionsuccess');
    }

    public function home(Request $request)
    {
        // $products = Product::all();
        $products = DB::table('products')->limit(5)->get();
        return view('home', ['products' => $products]);
    }

    public function print()
    {
        return view('printtransaction');
    }

    public function update()
    {
        return view('editprofile');
    }
}

        