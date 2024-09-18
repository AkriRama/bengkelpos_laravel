<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticating']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'registerProcess']);


Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth','only_admin');
Route::get('profile', [UserController::class, 'profile'])->middleware('auth', 'only_client');

Route::get('users', [UserController::class, 'index']);

Route::get('transaction', [TransactionController::class, 'index']);


// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/product', function () {
//     return view('product');
// });

// Route::get('/detailproduct', function () {
//     return view('detailproduct');
// });

Route::get('/detailtransaction', function () {
    return view('detailtransaction');
});

Route::get('/detailservice', function () {
    return view('detailservice');
});



Route::get('/register', function () {
    return view('register');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/adminproduct', function () {
    return view('adminproduct');
});

// Route::get('/addproduct', function () {
//     return view('addproduct');
// });

Route::get('admincategory', [CategoryController::class, 'index']);
Route::get('addcategory', [CategoryController::class,'add']);
Route::post('addcategory', [CategoryController::class,'store']);
Route::get('editcategory/{slug}', [CategoryController::class, 'edit']);
Route::post('editcategory/{slug}', [CategoryController::class, 'update']);
Route::get('deletecategory/{slug}', [CategoryController::class, 'delete']);
Route::get('destroycategory/{slug}', [CategoryController::class, 'destroy']);
Route::get('deletedcategory', [CategoryController::class, 'deletedCategory']);
Route::get('restorecategory/{slug}', [CategoryController::class, 'restore']);
Route::get('forcedeletecategory/{slug}', [CategoryController::class, 'forcedelete']);
Route::get('forcedestroycategory/{slug}', [CategoryController::class, 'forcedestroy']);

Route::get('adminproduct', [ProductController::class,'index']);
Route::get('addproduct', [ProductController::class,'add']);
Route::post('addproduct', [ProductController::class,'store']);
Route::get('editproduct/{slug}', [ProductController::class,'edit']);
Route::post('editproduct/{slug}', [ProductController::class, 'update']);
Route::get('deleteproduct/{slug}', [ProductController::class, 'delete']);


Route::get('adminservice', [ServiceController::class, 'index']);

Route::get('product', [PublicController::class, 'index'])->name('product.index');
Route::get('detailproduct/{slug}', [PublicController::class, 'detailproduct']);
Route::get('hitung/{slug}', [PublicController::class, 'kurang']);
Route::post('/purchase/{slug}', [PublicController::class, 'store']);
Route::post('/confirmationpayment/{slug}', [PublicController::class, 'confirmation']);
Route::get('transactionsuccess', [PublicController::class, 'success ']);
Route::get('/cetak', [PublicController::class, 'print']);

Route::get('editprofile', [ProfileController::class, 'index']);
Route::post('editprofile', [ProfileController::class, 'update']);

Route::get('home', [PublicController::class, 'home']);

// Route::get('/confirmationpayment', function()
// {
//     return view('confirmationpayment');
// });  

Route::get('profile', function()
{
    return view('profile');
});

Route::get('usertransaction', function()
{
    return view('usertransaction');
});

Route::get('aboutus', function()
{
    return view('aboutus');
});

// Route::get('/printtransaction', function()
// {
//     return view('printtransaction');
// });