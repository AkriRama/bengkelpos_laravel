<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $productCount = DB::table('products')->count();
        $userCount = User::count();
        return view('dashboard', ['product_count' => $productCount, 'user_count' => $userCount]);
    }
}
