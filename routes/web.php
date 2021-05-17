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

Route::get('/bill', function () {
    return view('bill');
});

Route::post('/bill_final',function (Illuminate\Http\Request $request){
    $productDescription = $request->productDescription;
    $listPrice = $request->listPrice ;
    $discount = $request->discount ;
    $discount = $discount / 100;
    $amount = $discount *  $listPrice * 0.1;
    $discountPrice = $listPrice - $amount;
    return view ('bill_final',compact(['productDescription','listPrice','discount','amount','discountPrice']));
});
