<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'frontController@index')->name('home');
Route::get('/category', 'productController@index')->name('category');
Route::get('/singleproduct', 'productController@productview')->name('singleproduct');
Route::get('/product_checkout', 'productController@productcheckout')->name('productcheckout');
Route::get('/shoppingcart', 'ShoppingcartController@index')->name('cart');
Route::get('/confirmation', 'InvoiceController@index')->name('faktor');
Route::get('/login', 'LoginController@index')->name('login');
Route::get('/register', 'RegisterController@index')->name('register');
Route::get('/order_tracking', 'OrdertrackingController@index')->name('tracking');
Route::get('/contact_with_us', 'frontcontroller@contact')->name('contact');





