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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi', function () {
    return "Assalaamu'alaykum warohmatullaahi wabarookaatuh";
});

Route::get('/test', function (){
    return "Bismillaahirrohmaanirrohiim";
});

Route::get('/product', 'ProductController@index');
Route::get('/product/display', 'ProductController@showAll');
Route::post('/product/save', 'ProductController@saveNew');
Route::get("/product/{id}", "ProductController@show");

Route::get("/product/list", "ProductController@list")->name("products");
Route::post("/product/create", "ProductController@create");
Route::put("/product/{id}", "ProductController@update");
Route::match(["PUT", "PATCH"], "/product/{id}", "ProductController@update");
Route::any("/product/{id}", "ProductController@action");

Route::group(["prefix"=>"/products"], function(){
    Route::get("/all", "ProductController@all");
    Route::get("/bag", "ProductController@bag");
    Route::get("/latest", "ProductController@latest");
    Route::get("/discounts", "ProductController@discounts");
});

Route::group(["prefix"=>"admin", "middleware"=>"mustAdmin"], function(){
    Route::get("/dashboard", "DashboardController@index");
    Route::get("/orders", "DashboardController@orders");
});

Route::view("/path", "nama.view");
Route::get("show-all-items", "ItemController@showAllItems");

Route::resource("categories", "CategoryController");

Route::get("search", "ProductController@search");

Route::get("/pintu-masuk", function(){
    return "Selamat datang di pintu masuk!";
});

Route::get("/pintu-masuk-controller", "TestController@pintuMasuk");