<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::namespace('Admin\Auth')->prefix('admin/')->name('admin.')->group(function(){
// Authentication Routes...
Route::get('login', 'LoginController@showLoginForm')->name('login');
Route::post('login', 'LoginController@login');
Route::get('logout', 'LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm');
Route::post('password/reset', 'ResetPasswordController@reset');
});


Auth::routes();

Route::get('index',[FrontendController::class, 'index'])->name('user.index');
Route::get('shop',[FrontendController::class, 'shop'])->name('user.shop');
Route::get('about', [FrontendController::class, 'about'])->name('user.about');
Route::get('contact_us', [FrontendController::class, 'contact_us'])->name('user.contact_us');
Route::get('cart', [FrontendController::class, 'cart'])->name('user.cart');
Route::get('checkout', [FrontendController::class, 'checkout'])->name('user.checkout');
Route::get('privacy_policy', [FrontendController::class, 'privacy_policy'])->name('user.privacy_policy');
Route::get('terms_conditions', [FrontendController::class, 'terms_conditions'])->name('user.terms_conditions');
Route::get('return_policy', [FrontendController::class, 'return_policy'])->name('user.return_policy');
Route::get('detail', [FrontendController::class, 'detail'])->name('user.detail');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('admin.guest')->namespace('Admin')->prefix('admin/')->name('admin.')->group(function(){
    Route::get('dashboard', 'AdminController@index')->name('dashboard');
    Route::get('category', 'CategoryController@index')->name('category');
    });

//Category Controller

