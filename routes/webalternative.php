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
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

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

Route::middleware('only_guest')->group(function(){
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'registerProcess']);
});

Route::middleware('auth')->group(function() {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('profile', [UserController::class, 'index'])->middleware('only_client');
    
    Route::get('hitung/{slug}', [PublicController::class, 'kurang'])->middleware('only_client');
    // Route::post('/purchase/{slug}', [OrderController::class, 'store'])->middleware('only_client');
    // Route::post('/confirmationpayment/{slug}', [PublicController::class, 'confirmation'])->middleware('only_client');
    Route::get('transactionsuccess', [PublicController::class, 'success'])->middleware('only_client');
    Route::get('/cetak', [PublicController::class, 'print'])->middleware('only_client');
    
    Route::post('detailtransaction/{slug}', [CartController::class, 'store'])->middleware('only_client');
    Route::post('detailtransactionService/{slug}', [CartController::class, 'storeService'])->middleware('only_client');
    Route::get('detailtransaction', [CartController::class, 'index']);
    // Route::get('cartdelete/{id}', [PublicController::class, 'deleteCart']);
    
    //Route to cashier
    Route::get('cashier', [ProductController::class, 'searchItem'])->middleware('only_client');
    Route::post('addCashier/{slug}', [OrderController::class, 'storeCashier'])->middleware('only_client');
    Route::get('newCashier', [OrderController::class, 'refreshCashier'])->middleware('only_client');
    
    Route::middleware('only_admin')->group(function(){
        Route::get('dashboard', [DashboardController::class, 'index']);

        //adminCategory
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

        //adminProduct
        Route::get('adminproduct', [ProductController::class,'index']);
        Route::get('addproduct', [ProductController::class,'add']);
        Route::post('addproduct', [ProductController::class,'store']);
        Route::get('editproduct/{slug}', [ProductController::class,'edit']);
        Route::post('editproduct/{slug}', [ProductController::class, 'update']);
        Route::get('deleteproduct/{slug}', [ProductController::class, 'delete']);
        Route::get('destroyproduct/{slug}', [ProductController::class, 'destroy']);
        Route::get('deletedproduct', [ProductController::class, 'deletedShow']);
        Route::get('restoreproduct/{slug}', [ProductController::class, 'restore']);
        Route::get('forcedeleteproduct/{slug}', [ProductController::class, 'forceDelete']);
        Route::get('forcedestroyproduct/{slug}', [ProductController::class, 'forceDestroy']);

        //adminService
        Route::get('adminservice', [ServiceController::class, 'index']);
        Route::get('addservice', [ServiceController::class, 'addService']);
        Route::post('addservice', [ServiceController::class, 'store']);
        Route::get('editservice/{slug}',[ServiceController::class, 'edit']);
        Route::post('editservice/{slug}', [ServiceController::class, 'update']);
        Route::get('deleteservice/{slug}', [ServiceController::class, 'delete']);
        Route::get('destroyservice/{slug}', [ServiceController::class, 'destroy']);
        Route::get('deletedservice', [ServiceController::class, 'deletedShow']);
        Route::get('restoreservice/{slug}', [ServiceController::class, 'restore']);
        Route::get('forcedeleteservice/{slug}', [ServiceController::class, 'forceDelete']);
        Route::get('forcedestroyservice/{slug}', [ServiceController::class, 'forceDestroy']);
    });
    
});
// Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');
// Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth','only_admin');
// Route::get('profile', [UserController::class, 'index'])->middleware('auth', 'only_client');

Route::get('users', [UserController::class, 'user']);

Route::get('admintransaction', [TransactionController::class, 'index']);


// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/product', function () {
//     return view('product');
// });

// Route::get('/detailproduct', function () {
//     return view('detailproduct');
// });

// Route::get('/detailtransaction', function () {
//     return view('detailtransaction');
// });

// Route::get('/detailservice', function () {
//     return view('detailservice');
// });



// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Route::get('/adminproduct', function () {
//     return view('adminproduct');
// });

// Route::get('/addproduct', function () {
//     return view('addproduct');
// });




Route::get('product', [ProductController::class, 'indexUser'])->name('product.index');
Route::get('detailproduct/{slug}', [ProductController::class, 'detailproduct']);
// Route::post('/confirmationpayment/{slug}', [PublicController::class, 'confirmation']);
// Route::get('transactionsuccess', [PublicController::class, 'success ']);
// Route::get('/cetak', [PublicController::class, 'print']);


// Route::post('detailtransaction/{slug}', [PublicController::class, 'cart']);
// Route::get('detailtransaction', [PublicController::class, 'cartShow']);
// Route::get('cartdelete/{id}', [PublicController::class, 'deleteCart']);


// Route::get('profile', [ProfileController::class, 'index']);
Route::get('editprofile/{slug}', [ProfileController::class, 'edit']);
Route::post('editprofile/{slug}', [ProfileController::class, 'update']);

Route::get('home', [PublicController::class, 'home']);

// Route::get('/confirmationpayment', function()
// {
    //     return view('confirmationpayment');
    // });

// Route::get('profile', function()
// {
    //     return view('profile');
    // });

// Route::get('usertransaction', function()
// {
    //     return view('usertransaction');
    // });
        
Route::get('aboutus', function()
{
    return view('aboutus');
});
        
// Route::get('/printtransaction', function()
// {
    //     return view('printtransaction');
    // });
    
    // Route::get('admincover', function()
    // {
//     return view('admincover');
// });

//adminSlider
Route::get('adminslider', [SliderController::class, 'index']);
Route::get('addslider', [SliderController::class, 'add']);
Route::post('addslider', [SliderController::class, 'store']);
Route::get('editslider/{slug}', [SliderController::class, 'edit']);
Route::post('editslider/{slug}', [SliderController::class, 'update']);

// Route::get('service', function()
// {
//     return view('service');
// });

// Route::get('service', [PublicController::class, 'indexService']);
// Route::get('addservice', [PublicController::class, 'addService']);
// Route::post('addservice', [PublicController::class, 'storeService']);
    
Route::get('printtransaction', [PublicController::class, 'print']);

Route::get('available/{slug}', [ServiceController::class, 'changeAvailable']);
Route::get('notavailable/{slug}', [ServiceController::class, 'changeNotAvailable']);

// Route::post('/checkout/{id}', [PublicController::class, 'checkout']);


Route::get('usertransaction', [TransactionController::class, 'indexUser']);
    
    
//userService
Route::get('service', [ServiceController::class, 'indexUser']);
Route::get('/detailservice/{slug}', [ServiceController::class, 'detailService']);
    


//adminUser
Route::get('changeactive/{slug}', [UserController::class, 'changeActive']);
Route::get('changeinactive/{slug}', [UserController::class, 'changeInActive']);

//alternative
Route::get('detailproductalternative/{slug}', [PublicController::class, 'detailproduct']);

// Route::get('detailuser', function()
// {
//         return view('detailuser');
// });

Route::get('detailuser/{slug}', [UserController::class, 'detailUser']);

//userOrder
// Route::post('/confirmationpayment/{slug}', [OrderController::class, 'index'])->middleware('only_client');
// Route::post('/purchase/{slug}', [OrderController::class, 'store'])->middleware('only_client');
Route::post('buy/{slug}', [OrderController::class, 'storeBuy']);
Route::get('confirmationpayment', [OrderController::class, 'index'])->middleware('only_client');
Route::post('paynow/{order_id}', [OrderController::class, 'purchase']);

//userTransaction
Route::get('historyorderservice', [TransactionController::class, 'indexOrderService']);
Route::get('detailorder/{order_id}', [TransactionController::class, 'detailOrder']);

//adminTransaction
Route::get('statusprocess/{order_id}', [TransactionController::class, 'changeStatusProcess']);
Route::get('statusnotprocess/{order_id}', [TransactionController::class, 'changeStatusNotProcess']);

//userCart
Route::get('cartdelete/{id}', [CartController::class, 'deleteCart']);
Route::get('cartdeleteService/{id}', [CartController::class, 'deleteCartService']);

Route::post('/checkout/{order_id}', [CartController::class, 'checkout']);


// Route::get('cashier', [ProductController::class, 'searchItem']);
// Route::post('addCashier/{slug}', [OrderController::class, 'storeCashier']);


// Route::get('report', function()
// {
//     return view('report');
// });

// Route::get('productcashier', function()
// {
//     return view('productcashier');
// });

Route::get('productcashier', [ProductController::class, 'indexCashier']);

Route::get('report', [TransactionController::class, 'reportData']);
Route::post('paidorder/{order_id}', [TransactionController::class, 'transactionSuccess']);