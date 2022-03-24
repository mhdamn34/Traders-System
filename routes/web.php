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

// Route::get('/home', function () {
//     return view('welcome');
// });

//HOMEPAGE
Route::get('/', function () {
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
Route::group([
    'prefix' => 'supplier',
    'as' => 'supplier.'
], function () {
    Route::get('/', 'SupplierController@index')->name('index');
    Route::get('/create', 'SupplierController@create')->name('create');
    Route::post('/', 'SupplierController@store')->name('store');
    Route::get('/{supplier}', 'SupplierController@show')->name('show');
    Route::get('/{supplier}/edit', 'SupplierController@edit')->name('edit');
    Route::patch('/{supplier}', 'SupplierController@update')->name('update');
    Route::delete('/{supplier}', 'SupplierController@destroy')->name('destroy');
});



//ROUTE EMPLOYEE
Route::get('/employee', 'EmployeeController@index')->name('employees.employeesHome');
// Route::get('/employee', function() {
//     return view('employees.employeesHome');
// });
// Route::get('employee/createEmployee', 'EmployeeController@create')->name('employees.create');
Route::get('/createEmployee', 'EmployeeController@create')->name('employees.createEmployee');
Route::get('/employee/show', 'EmployeeController@show')->name('employee.show');
Route::post('/employee', 'EmployeeController@store')->name('employee.store');
Route::get('/{employee}/edit', 'EmployeeController@edit')->name('employees.edit');
Route::patch('/employee/{employee}', 'EmployeeController@update')->name('employees.update');
Route::delete('/employee/{employee}', 'EmployeeController@destroy')->name('employee.destroy');

// Route::get('/createEmployee', function() {
//     return view('employees.createEmployee');
// });

// Route::group([
//     'prefix'=>'employee',
//     'as'=>'employee.'
// ], function() {
//     Route::get('/', 'EmployeeController@index')->name('index');
//     Route::get('/create', 'CustomerController@create')->name('create');
//     Route::post('/', 'CustomerController@store')->name('store');
//     Route::get('/{customer}', 'CustomerController@show')->name('show');
//     Route::get('/{customer}/edit', 'CustomerController@edit')->name('edit');
//     Route::patch('/{customer}', 'CustomerController@update')->name('update');
//     Route::delete('/{customer}', 'CustomerController@destroy')->name('destroy');
// });


//PURCHASE ORDERS
Route::get('/purchase', function () {
    return view('purchaseOrders.purchaseHome');
});
Route::get('/createPurchase', function () {
    return view('purchaseOrders.createPurchase');
});



//ROUTE CATEGORY
Route::resource('/categories', 'CategoriesController');



// Route Shipper
// Route::get('/shippers', function() {
//     return view('shippers.shippersHome');
// });
Route::get('/shippers', 'ShipperController@index');

Route::get('/NewShippers', function () {
    return view('shippers.newShipper');
});

Route::get('/ListShippers', function () {
    return view('shippers.collectData');
});


Route::group([
    'prefix'=>'shipper',
    'as'=>'shipper.'
], function() {
    Route::get('/', 'ShipperController@index')->name('index');
    Route::get('/create', 'ShipperController@create')->name('newShipper');
    Route::post('/', 'ShipperController@store')->name('store');
    Route::get('/{shipper}', 'ShipperController@show')->name('show');
    Route::get('/{shipper}/edit', 'ShipperController@edit')->name('edit');
    Route::patch('/{shipper}', 'ShipperController@update')->name('update');
    Route::delete('/{shipper}', 'ShipperController@destroy')->name('destroy');
});



//Route Sales
Route::get('/SalesReport', function () {
    return view('sales.salesreport');
});



//Route Inventory
Route::get('/InventoryHome', function () {
    return view('InventoryHome.viewInventory');
});

Route::get('/addproduct', function () {
    return view('InventoryHome.AddProduct');
});

Route::get('/purchasehistory', function () {
    return view('InventoryHome.orderandpurchasehistory');
});



//Route Order 
// Route::get('/orderlist', function() {
//     return view('Orders.orderhome');
// });

Route::get('/orders', 'OrderController@index');
// Route::get('/neworder', 'OrderController@index');

Route::get('/neworder', function () {
    return view('Orders.addNewOrder');
});

Route::get('/ListShippers', function () {
    return view('shippers.collectData');
});

Route::get('/createpurchase', function () {
    return view('purchaseOrders.createPurchase');
});

Route::group([
    'prefix'=>'customer',
    'as'=>'customer.'
], function() {
    Route::get('/', 'CustomerController@index')->name('index');
    Route::get('/create', 'CustomerController@create')->name('create');
    Route::post('/', 'CustomerController@store')->name('store');
    Route::get('/{customer}', 'CustomerController@show')->name('show');
    Route::get('/{customer}/edit', 'CustomerController@edit')->name('edit');
    Route::patch('/{customer}', 'CustomerController@update')->name('update');
    Route::delete('/{customer}', 'CustomerController@destroy')->name('destroy');
});