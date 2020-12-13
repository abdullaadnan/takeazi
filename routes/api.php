<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//
//});
//---------------------product_table-----------------------------------------
//Route::get('/product/add-product','ProductController@index');
//Route::post('/product/add-product','ProductController@create');
//Route::post('/product/add-product/{product_id}','ProductController@update');
//Route::get('/product/add-product/{product_id}','ProductController@SelectById');
//Route::delete('/product/add-product/{product_id}','ProductController@delete');
////---------------------categories_table----------------------------------------------
//Route::get('/category/add-category','CategoryController@index');
//Route::post('/category/add-category','CategoryController@create');
//Route::post('/category/add-category/{category_id}','CategoryController@update');
//Route::get('/category/add-category/{category_id}','CategoryController@SelectById');
//Route::delete('/category/add-category/{category_id}','CategoryController@delete');
Route::group([
    'middleware'=>'api',
    'prefix'=>'product',
    ],function () {
    Route::get('get-all-products', 'ProductController@index');
    Route::get('get-product/{product_id}', 'ProductController@SelectById');
    Route::post('add-product', 'ProductController@create');
    Route::post('update-product/{product_id}', 'ProductController@update');
});
Route::group([
    'middleware'=>'api',
    'prefix'=>'category',
],function () {
    Route::get('get-all-category', 'CategoryController@index');
    Route::get('get-category/{category_id}', 'CategoryController@SelectById');
    Route::post('add-category', 'CategoryController@create');
    Route::post('update-category/{category_id}', 'CategoryController@update');
});



