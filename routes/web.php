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
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/',function(){
//     return view('trangchu');})->name('trang-chu');


Route::get('/lien-he',function(){
    return view('lienHe.lien-he');})->name('lien-he');

Route::post('/comment/{id}','commentController@store')->name('comment.store');


//tao group route
Route::group(['prefix' => '/'], function () {
    Route::get('/','PageController@getIndex')->name('trang-chu');
    // Route::get('/quan-cf-ngon','PageController@getQuanCfNgon')->name('quan-cf-ngon');
    // Route::get('/cf','PageController@getCf')->name('cf');
    // Route::get('/bai-viet','PageController@getBaiViet')->name('bai-viet');
    // Route::get('/lien-he','PageController@getLienHe')->name('lien-he');
  });

// Route::group(['prefix' => 'products'], function () {
//     Route::get('/classic','ProductController@getClassic')->name('products');

//   });

// Route::group(['prefix' => 'quan-cf-ngon'], function () {
//     Route::get('/','QuanCfNgonController@index')->name('quan-cf-ngon');

//   });
//tao group route quán cf ngon
Route::group(['prefix' => 'quan-cf-ngon'], function () {
    Route::get('/','QuanCfNgonController@index')->name('quan-cf-ngon');
    // Route::get('/chitiet','QuanCfNgonController@getChiTiet')->name('quan-cf-ngon.chitiet');
    Route::get('/{id}/show','QuanCfNgonController@show')->name('quan-cf-ngon.show');

    Route::get('/create','QuanCfNgonController@create')->name('QuanCfNgon.create')->middleware('auth');
    Route::post('/create','QuanCfNgonController@store')->name('QuanCfNgon.store')->middleware('auth');
    Route::get('/{id}/edit','QuanCfNgonController@edit')->name('QuanCfNgon.edit')->middleware('auth');
    Route::post('/{id}/edit','QuanCfNgonController@update')->name('QuanCfNgon.update')->middleware('auth');
    Route::get('/{id}/destroy','QuanCfNgonController@destroy')->name('QuanCfNgon.destroy')->middleware('auth');
  });


//tao group route Bai` viet'
Route::group(['prefix' => 'bai-viet'], function () {
    Route::get('/','baiVietController@index')->name('bai-viet');
    Route::get('/{id}/show','baiVietController@show')->name('bai-viet.show');
    Route::get('/create','baiVietController@create')->name('bai-viet.create')->middleware('admin');
    Route::post('/create','baiVietController@store')->name('bai-viet.store')->middleware('admin');
    Route::get('/{id}/edit','baiVietController@edit')->name('bai-viet.edit')->middleware('admin');
    Route::post('/{id}/edit','baiVietController@update')->name('bai-viet.update')->middleware('admin');
    Route::get('/{id}/destroy','baiVietController@destroy')->name('bai-viet.destroy')->middleware('admin');
  });

  Route::group(['prefix' => 'cf'], function () {
    Route::get('/','CfController@index')->name('cf');
    Route::get('/{id}/show','CfController@show')->name('cf.show');

    Route::get('/cf-type/{id}','PageController@cfType')->name('cf.cfType');

    Route::get('/create','CfController@create')->name('cf.create')->middleware('auth');
    Route::post('/create','CfController@store')->name('cf.store')->middleware('auth');
    Route::get('/{id}/edit','CfController@edit')->name('cf.edit')->middleware('auth');
    Route::post('/{id}/edit','CfController@update')->name('cf.update')->middleware('auth');
    // Route::get('/{id}/destroy','CfController@destroy')->name('cf.destroy')->middleware('auth');
    Route::get('/keyword', 'CfController@search')->name('keyword.search');
    Route::get('/{id}/show-cf-type', 'CfController@show')->name('cf.showtype');
  });


Auth::routes();
Route::group(['prefix' => 'home'], function () {
    Route::get('/','HomeController@index')->name('home');

  });

// Route::get('/home', 'HomeController@index')->name('home');


//test admin
// Route::get('/admin',function(){
//     return view('admin.home');
// })->name('home.admin');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/dasboard','AdminController@show_dashboard')->name('admin.show_dashboard');
    Route::get('/danh-muc-sp','AdminController@danhMucSp')->name('admin.danhMucSp');
    Route::get('/danh-muc-quan-cf','AdminController@danhMucQuanCf')->name('admin.danhMucQuanCf');
    Route::get('/danh-muc-bai-viet','AdminController@danhMucBaiviet')->name('admin.danhMucBaiviet');
    Route::get('/quan-ly-don-hang','AdminController@quanLyDonHang')->name('admin.quanLyDonHang');
    Route::get('/{id}/show-don-hang','AdminController@showDonHang')->name('admin.showDonHang');
    Route::get('/keyword', 'AdminController@search')->name('admin.search');
    // thanh toán
    Route::get('/{id}/paymen-bill', 'AdminController@paymenBill')->name('admin.paymenBill');
    Route::get('/{id}/debit_order', 'AdminController@debit_order')->name('admin.debit_order');

    // xoa don hang
    Route::get('/delete-bill/{id}', 'AdminController@deleteDonHang')->name('admin.deleteDonHang');
    Route::get('/deleted-bill', 'AdminController@deletedDonHang')->name('admin.deletedDonHang');
    Route::get('/restore-bill/{id}', 'AdminController@restoreDonHang')->name('admin.restoreDonHang');



    Route::get('/delete-product/{id}', 'AdminController@deleteProduct')->name('admin.delete');
    Route::get('/deleted-product', 'AdminController@deletedProduct')->name('admin.deleted');
    Route::get('/restore-product/{id}', 'AdminController@restoreProduct')->name('admin.restore');

    Route::get('/delete-post/{id}', 'AdminController@deleteBaiviet')->name('admin.deleteBaiviet');
    Route::get('/deleted-post','AdminController@deletedPost')->name('admin.deletedPost');
    Route::get('/restore-post/{id}', 'AdminController@restoreBaiviet')->name('admin.restoreBaiviet');


    Route::get('/delete-CoffeeShop/{id}', 'AdminController@deleteQuanCfNgon')->name('admin.deleteQuanCfNgon');
    Route::get('/deleted-CoffeeShop', 'AdminController@deletedQuanCfNgon')->name('admin.deletedQuanCfNgon');
    Route::get('/restore-CoffeeShop/{id}', 'AdminController@restoreQuanCfNgon')->name('admin.restoreQuanCfNgon');

    Route::get('/comment', 'commentController@index')->name('admin.quanLyComment');



  });

  Route::post('/save-cart','CartController@save_cart')->name('save_cart');
  Route::post('/update-cart-quantity','CartController@update_cart_quantity');

  Route::get('/show-cart','CartController@show_cart')->name('show-cart.cart');
  Route::get('/show-cart/destroy','CartController@destroy')->name('cart.destroy');
  Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart')->name('delete_to_cart.cart');

//   checkout
Route::get('/payment','CheckOutController@payment')->middleware('auth');
Route::post('/payment-create','CustomerController@store')->name('store-CheckOut')->middleware('auth');


//chat giữa người dùng và admin
Route::prefix('chat')->name('client.chat.')->group(function () {
    Route::get('', 'Client\ChatController@index')->name('index');
    Route::post('/submit', 'Client\ChatController@submit')->name('submit');

});



Route::middleware('auth')->prefix('admin/chat')->name('admin.chat.')->group(function () {
    Route::get('', 'Admin\ChatController@index')->name('index');
    Route::post('/submit', 'Admin\ChatController@submit')->name('submit');
});




