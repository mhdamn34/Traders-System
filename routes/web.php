<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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

Route::get('/home', function() {
    return view('homepage');
});


Route::resource('/products', 'ProductController');
Route::get('/products/{products}','ProductController@edit')->name('products.edit');

Route::resource('/categories', 'CategoriesController');

// Route::get('/products', 'ProductController@index')->name('products.index');

Route::get('/shippers', function() {
    return view('shippers.shippersHome');
});

Route::get('/NewShippers', function() {
    return view('shippers.newShipper');
});

Route::get('/InventoryHome', function() {
    return view('InventoryHome.viewInventory');
});

Route::get('/addproduct', function() {
    return view('InventoryHome.AddProduct');
});

Route::get('/purchasehistory', function() {
    return view('InventoryHome.orderandpurchasehistory');
});

Route::get('/orderlist', function() {
    return view('Orders.orderhome');
});

Route::get('/neworder', function() {
    return view('Orders.addNewOrder');
});
Route::get('/ListShippers', function() {
    return view('shippers.collectData');
});