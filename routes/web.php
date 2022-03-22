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

//HOMEPAGE
Route::get('/home', function() {
    return view('homepage');
});


// Route::resource('/products', 'ProductController');
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products', 'ProductController@store')->name('products.store');
Route::get('/products/{product}', 'ProductController@show')->name('products.show');
Route::get('/products/{product}/edit', 'ProductController@edit')->name('products.edit');
Route::patch('/products/{product}', 'ProductController@update')->name('products.update');
Route::delete('/products/{product}', 'ProductController@destroy')->name('products.destroy');



//ROUTE SUPPLIER
Route::get('/suppliers', 'SupplierController@index')->name('suppliers.index');
Route::post('/suppliers', 'SupplierController@store')->name('suppliers.store');
// Route::get('/newSupplier','SupplierController@create');
Route::get('/newSupplier', function() {
    return view('suppliers.createSupplier');
});



//ROUTE EMPLOYEE
Route::get('/employee', 'EmployeeController@index')->name('employees.index');
// Route::get('/employee', function() {
//     return view('employees.employeesHome');
// });
// Route::get('/createEmployee', 'EmployeeController@create')->name('employees.create');
Route::get('/createEmployee', function() {
    return view('employees.createEmployee');
});


//PURCHASE ORDERS
Route::get('/purchase', function() {
    return view('purchaseOrders.purchaseHome');
});
Route::get('/createPurchase', function() {
    return view('purchaseOrders.createPurchase');
});



//ROUTE CATEGORY
Route::resource('/categories', 'CategoriesController');



// Route Shipper
// Route::get('/shippers', function() {
//     return view('shippers.shippersHome');
// });
Route::get('/shippers', 'ShipperController@index');

Route::get('/NewShippers', function() {
    return view('shippers.newShipper');
});

Route::get('/ListShippers', function() {
    return view('shippers.collectData');
});



//Route Sales
Route::get('/SalesReport', function() {
    return view('sales.salesreport');
});



//Route Inventory
Route::get('/InventoryHome', function() {
    return view('InventoryHome.viewInventory');
});

Route::get('/addproduct', function() {
    return view('InventoryHome.AddProduct');
});

Route::get('/purchasehistory', function() {
    return view('InventoryHome.orderandpurchasehistory');
});



//Route Order 
// Route::get('/orderlist', function() {
//     return view('Orders.orderhome');
// });

Route::get('/orders', 'OrderController@index');

Route::get('/neworder', function() {
    return view('Orders.addNewOrder');
});

Route::get('/ListShippers', function() {
    return view('shippers.collectData');
});

Route::get('/createpurchase', function() {
    return view('purchaseOrders.createPurchase');
});
