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

Route::get('/', 'WelcomeController@index');
Route::get('/home', 'WelcomeController@index');
Route::get('/about', 'WelcomeController@about');
Route::get('/Services', 'WelcomeController@Services');
Route::get('/Menus', 'WelcomeController@Menus');
Route::get('/signIn', 'WelcomeController@SignIn');

Route::get('/checkout', 'CheckoutController@index');
Route::post('/checkout/sign-up', 'CheckoutController@customerRegistration');
Route::post('/customer/sign-in', 'CheckoutController@customerLogin');
Route::get('/checkout/shipping', 'CheckoutController@showShippingForm');
Route::post('/checkout/save-order', 'CheckoutController@saveOrderInfo');

Auth::routes();

Route::get('/dashboard', 'HomeController@index');

Route::group(['middleware'=>'AuthenticateMiddleware'], function(){
/* category info */


Route::get('/category/add', 'CategoryController@createCategory');
Route::post('/category/save', 'CategoryController@storeCategory');
Route::get('/category/manage', 'CategoryController@manageCategory');
Route::get('/category/edit/{id}', 'CategoryController@editCategory');
Route::post('/category/update', 'CategoryController@updateCategory');
Route::get('/category/delete/{id}', 'CategoryController@deleteCategory');


/* Product info */

Route::get('/product/add', 'ProductController@createProduct');
Route::post('/product/save', 'ProductController@storeProduct');
Route::get('/product/manage', 'ProductController@manageProduct');
Route::get('/product/view/{id}', 'ProductController@viewProduct');
Route::get('/product/edit/{id}', 'ProductController@ditProduct');
Route::post('/product/update', 'ProductController@updateProduct');
Route::get('/product/delete/{id}', 'ProductController@deleteProduct');

Route::get('/user/manage', 'UserController@manageUser');
});