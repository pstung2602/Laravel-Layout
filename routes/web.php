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

Route::prefix('customer')->group(function () {
    Route::get('index', 'CustomerController@index');

    Route::get('create', 'CustomerController@create');

    Route::post('store', 'CustomerController@store');

    Route::get('{id}/show', 'CustomerController@show');

    Route::get('{id}/edit', 'CustomerController@edit');

    Route::patch('{id}/update', 'CustomerController@update');

    Route::delete('{id}', 'CustomerController@destroy');


});
Route::get('/ProductDiscount', function () {
    return view('ProductDiscount');
});
Route::post('/ProductDiscount', function (Illuminate\Http\Request $request) {
    $description = $request->Description;
    $price = $request->Price;
    $discountPercent = $request->DiscountPercent;
    $discountPrice = $price - $price * $discountPercent / 100;
    $discountAmount = $price - $discountPrice;
    if ($request->Description && $request->Price && $request->DiscountPercent) {
        return view('DisplayDiscount', compact('description', 'price', 'discountPercent', 'discountPrice', 'discountAmount'));
    }
    echo 'Moi Nhap Lai';
});

Route::get('/show','TaskController@index');