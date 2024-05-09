<?php
require_once 'vendor/autoload.php';
// $loadedClasses = get_declared_classes();
// echo '<pre>';
// print_r($loadedClasses);
// echo '</pre>';
require_once 'Config/config.php';
use App\Routing\Route;
// Define routes
Route::add('/', 'HomeController@index');
Route::add('/index', 'HomeController@index');

Route::add('/contact', 'HomeController@lienhe');

Route::add('/product', 'ProductController@shop');
Route::add('/product/idcatalog/(\d+)', 'ProductController@shop');
Route::add('/product/sreach/(\w+)', 'ProductController@shop');
Route::add('/product/detail/(\d+)', 'ProductController@productdetail');

Route::add('/register', 'UserController@register');
Route::add('/login', 'UserController@login');
Route::add('/user', 'UserController@accout');
Route::add('/user/update', 'UserController@updateaction');

Route::add('/cart', 'CartController@cart');
Route::add('/addcart', 'CartController@addcart');
Route::add('/update', 'CartController@update');
Route::add('/xoa/(\d+)', 'CartController@cart');
Route::add('/checkout', 'CartController@checkout');

Route::add('/admin', 'AdminController@index');
Route::add('/quanlydanhmuc', 'AdminController@quanlydanhmuc');
Route::add('/themdanhmuc', 'AdminController@themdanhmuc');
Route::add('/themtheloai', 'AdminController@themtheloai');
Route::add('/xoadm/(\d+)', 'AdminController@quanlydanhmuc');
Route::add('/xoatl/(\d+)', 'AdminController@quanlydanhmuc');
Route::add('/sua/(\d+)', 'AdminController@suadanhmuc');
Route::add('/suatl/(\d+)', 'AdminController@suatheloai');

// Route::add('/dangnhap', 'UserController@login');
Route::add('/logout', 'UserController@dangxuat');

// echo "<pre>".print_r(Route::showroutes())."</pre>";
$uri = isset($_GET['url']) ? "/" . rtrim($_GET['url'], '/') : '/index';

// echo $uri;
Route::dispatch($uri);
// statis kocan new van su dung duoc, toan cuc
