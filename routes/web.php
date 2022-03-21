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