<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/Home', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); 

Route::get('hello/{name}',function($name){
    echo '<h1>Hello ' . $name . '</h1>';
});

Route::get('/users/{name}', [UserController::class, 'show'])->name('users.show');

Route::middleware(['auth', 'checkRole:Admin'])->group(function () {
    Route::get('/admindashboard', [AdminController::class, 'index'])->name('admindashboard');
});

// Rute untuk pengguna biasa
Route::middleware(['auth', 'checkRole:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/about/{name?}', function ($name = 'Guest') {
    return view('about', ['name' => $name]);
});

Route::get('/Pre-order', function () {
    return view('Pre-order');
});

Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');


// Route untuk menghapus item dari keranjang
Route::post('/remove-from-cart', 'CartController@removeFromCart')->name('cart.remove');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::get('/user', [UserController::class, 'index']);
?>