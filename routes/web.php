<?php

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
Route::get('/dashboard-productstatus', function () {
    return view('dashboard/products/product_status');
});
Route::get('/dashboard-purchasehistory', function () {
    return view('dashboard/user_utility/purchasehistory');
});
Route::get('/dashboard-cancellation', function () {
    return view('dashboard/user_utility/cancellation');
});

Route::get('/dashboard-sellinghistory', function () {
    return view('dashboard/transactions/sellinghistory');
});
Route::get('/dashboard-alltransactions', function () {
    return view('dashboard/transactions/transactions');
});
Route::get('/dashboard-contactissue', function () {
    return view('dashboard/user_utility/contact_issue');
});
Route::get('/dashboard-deliveredorders', function () {
    return view('dashboard/orders/deliverdorder');
});
Route::get('/dashboard-failedorders', function () {
    return view('dashboard/orders/failedorders');
});
Route::get('/dashboard-pendingorders', function () {
    return view('dashboard/orders/pendingorders');
});
Route::get('/dashboard-processingorders', function () {
    return view('dashboard/orders/processingorder');
});
Route::get('/dashboard-returnorders', function () {
    return view('dashboard/orders/returnedorders');
});
Route::get('/dashboard-productreview', function () {
    return view('dashboard/products/review');
});
Route::get('/dashboard-bulkimport', function () {
    return view('dashboard/products/bulkimport');
});
Route::get('/dashboard-allproducts', function () {
    return view('dashboard/products/allproducts');
});
Route::get('/dashboard-allorders', function () {
    return view('dashboard/orders/allOrders');
});
Route::get('/dashboard-ecommerce', function () {
    return view('dashboard/ecommerce');
});
Route::get('/dashboard-analytics', function () {
    return view('dashboard/analytics');
});

Route::get('/dashboard', function () {
    return view('dashboard/maindashboard');
});

Route::get('/', function () {
    return view('dashboard/maindashboard');
});
