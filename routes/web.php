<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

//homepage
Route::get('/', function () {
    return view('homepage');
});
//test chart
Route::get('/pie', function () {
    return view('dashboard.pie');
});


Route::get('/article', 'ArticleController@store')->name('article.store');

//ORDER GRAB ROUTE
Route::get('/order_grab', 'OrderGrabController@index')->name('Grab.index');
Route::get('/create', 'OrderGrabController@create')->name('Grab.create');
Route::get('/show/{order_grab}', 'OrderGrabController@show')->name('Grab.show');
// Route::get('/{customer}', 'CustomerController@show')->name('show');
Route::post('/order_grab', 'OrderGrabController@store')->name('Grab.store');
Route::get('/{order_grab}/edit', 'OrderGrabController@edit')->name('Grab.edit');
Route::delete('order_grabs/{order_grab}', 'OrderGrabController@destroy')->name('Grab.destroy');


// ROUTE PRODUCT
Route::group([
    'prefix' => 'product',
    'as' => 'product.'
], function () {
    Route::get('/', 'ProductController@index')->name('index');
    Route::get('/create', 'ProductController@create')->name('create');
    Route::post('/', 'ProductController@store')->name('store');
    Route::get('/{product}', 'ProductController@show')->name('show');
    Route::get('/{product}/edit', 'ProductController@edit')->name('edit');
    Route::patch('/{product}', 'ProductController@update')->name('update');
    Route::delete('/{product}', 'ProductController@destroy')->name('destroy');
});

//ROUTE product
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
Route::get('/createEmployee', 'EmployeeController@create')->name('employee.createEmployee');
Route::get('/employee/{employee}/show', 'EmployeeController@show')->name('employee.show');
Route::post('/employee', 'EmployeeController@store')->name('employee.store');
Route::get('/employee/{employee}/edit', 'EmployeeController@edit')->name('employee.edit');
Route::patch('/employee/{employee}', 'EmployeeController@update')->name('employee.update');
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
Route::group([
    'prefix' => 'purchaseOrder',
    'as' => 'purchaseOrder.'
], function () {
    Route::get('/', 'purchaseOrderController@index')->name('index');
    Route::get('/create', 'purchaseOrderController@create')->name('create');
    Route::post('/', 'purchaseOrderController@store')->name('store');
    Route::get('/{purchaseOrder}', 'purchaseOrderController@show')->name('show');
    Route::get('/{purchaseOrder}/edit', 'purchaseOrderController@edit')->name('edit');
    Route::patch('/{purchaseOrder}', 'purchaseOrderController@update')->name('update');
    Route::delete('/{purchaseOrder}', 'purchaseOrderController@destroy')->name('destroy');
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
Route::get('/neworder', 'OrderController@create');


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

//POST

Route::get('/post', 'PostController@store')->name('post.store');


