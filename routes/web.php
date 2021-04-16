<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
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
   //return view('welcome');
   //return view('home');
   return view('products');
   //return view('stripe');
	//return view('checkout');
});

Auth::routes();
//////////////////////Normal User//////////////////////////
Route::get('/home', 'Controller@index')->name('home');
Route::get('/', 'CartController@index');
Route::get('cart', 'CartController@cart');
Route::get('add-to-cart/{id}', 'CartController@addToCart');
Route::patch('update-cart', 'CartController@update');
Route::delete('remove-from-cart', 'CartController@remove');
////////////////////////Checkout////////////////////////////////////
Route::get('checkout', 'CartController@billing')->name('checkout');
Route::get('placed_order', 'CartController@checkout');
Route::post('checkout_bill', 'CartController@checkout')->name('checkout_bill');
Route::get('payment', 'CartController@payment')->name('payment');

////////////////////////////////////////////////////////////
////////////////////////Stripe Payment/////////////////////////////
Route::get('stripe', 'StripePaymentController@stripe');
Route::post('payment', 'StripePaymentController@payStripe');
//////////////////////////Admin///////////////////////////
Route::get('admin/home', 'AdminController@adminHome')->name('admin.home')->middleware('is_admin');
///////////////////////////Dashboard/////////////////////
//Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('admin/dashboard', 'AdminController@index2')->name('admin.dashboard')->middleware('is_admin');
    Route::get('admin/logout','Auth\LoginController@logout')->name('admin.logout');
//});
Route::get('admin/add-catagory', 'CategoryController@index')->name('admin.add-category'); 
Route::get('admin/all-category','CategoryController@all_category')->name('admin.all-category');
Route::post('admin/save-category', 'CategoryController@save_category')->name('admin.save-category');
Route::get('admin/unactive-category{id}','CategoryController@unactive_category')->name('admin.unactive-category');
Route::get('admin/active-category{id}','CategoryController@active_category')->name('admin.active-category');
Route::get('admin/edit-category{id}','CategoryController@edit_category')->name('admin.edit-category');
Route::post('admin/update-category{id}','CategoryController@update_category')->name('admin.update-category');
Route::get('admin/delete-category{id}','CategoryController@delete_category')->name('admin.delete-category');

Route::get('admin/add-product','ProductController@index')->name('admin.add-product');
Route::post('admin/save-product','ProductController@save_product')->name('admin.save-product');
Route::get('admin/all-product','ProductController@all_product')->name('admin.all-product');
Route::get('admin/unactive-product{id}','ProductController@unactive_product')->name('admin.unactive-product');
Route::get('admin/active-product{id}','ProductController@active_product')->name('admin.active-product');
Route::get('admin/edit-product{id}','ProductController@edit_product')->name('admin.edit-product');
Route::post('admin/update-product{id}','ProductController@update_product')->name('admin.update-product');
Route::get('admin/delete-product{id}','ProductController@delete_product')->name('admin.delete-product');

Route::get('admin/add-brand', 'BrandController@index')->name('admin.add-brand');
Route::get('admin/all-brand','BrandController@all_brand')->name('admin.all-brand');
Route::post('admin/save-brand', 'BrandController@save_brand')->name('admin.save-brand');
Route::get('admin/unactive-brand{id}','BrandController@unactive_brand')->name('admin.unactive-brand');
Route::get('admin/active-brand{id}','BrandController@active_brand')->name('admin.active-brand');
Route::get('admin/edit-brand{id}','BrandController@edit_brand')->name('admin.edit-brand');
Route::post('admin/update-brand{id}','BrandController@update_brand')->name('admin.update-brand');
Route::get('admin/delete-brand{id}','BrandController@delete_brand')->name('admin.delete-brand');