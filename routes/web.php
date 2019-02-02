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

Route::get("/test_id", function() {
	return date();
});

Route::get("password", function() {
	$password = "123456";
	var_dump(md5($password) . "<br>");
	var_dump(md5($password). "<br>");
	var_dump(sha1($password). "<br>");
	var_dump(sha1($password). "<br>");
	var_dump(bcrypt($password). "<br>");
	var_dump(bcrypt($password). "<br>");
});

Auth::routes();

// Auth Route
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');


Route::get('/home', 'HomeController@index')->name('home');

Route::resource("students", "StudentController")->middleware("auth");

Route::get("/products/{first_param?}/{second_param?}", "ProductController@index")->name("products.index");

Route::get("/posts/{first_param?}/{second_param?}", "PostController@index")->name("posts.index");









