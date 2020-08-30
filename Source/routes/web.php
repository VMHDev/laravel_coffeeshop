<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something grea*/
/*------------------------------------------------------------*/
Route::get('/', function () {
    return view('index');
});
/*------------------------------------------------------------*/

/*------------------------------------------------------------*/
Route::get('/contact', function () {
    return view('contact');
});
/*------------------------------------------------------------*/

/*------------------------------------------------------------*/

//Gọi view trực tiếp không thông qua Controller:
/*
Route::get('category-list', function () {
    return view('category-list');
});
*/

//Gọi thông qua Controller:

/*------------------------------------------------------------
Route::get('category-list-{LoaiDoUong_idLoai}','types@ds_theo_loaiL');
Route::get('category-grid-{LoaiDoUong_idLoai}','types@ds_theo_loaiG');
/*------------------------------------------------------------*/
//Gọi view trực tiếp không thông qua Controller:
/*
Route::get('category-grid', function () {
    return view('category-grid');
});
*/
Route::get('/douong-{loai}', 'douongController@loai');

Route::get('/category-list-{loai}', 'douong@theoloaiL');
Route::get('/category-grid-{loai}', 'douong@theoloaiG');
Route::get('/promotion', function () {
    return view('promotion');
});
Route::get('/details-{loai}-{idDoUong}-{user}','douong@chitiet');
Route::get('/details_km-{idDoUong}-{idctkm}','douongkmController@chitiet');

//Gọi thông qua Controller:
/*------------------------------------------------------------
Route::get('category-grid', function () {
    return view('category-grid');
});
Route::get('category-list-{loai}', function () {
    return view('category-list');
});
/*------------------------------------------------------------*/
Route::get('/register', function () {
    return view('register');
});
Route::get('/gallery', function () {
    return view('gallery');
});
/*------------------------------------------------------------*/


/*------------------------------------------------------------*/
Route::get('/compare', function () {
    return view('compare');
});
/*------------------------------------------------------------*/

/*------------------------------------------------------------*/
Route::get('/promotion', function () {
    return view('promotion');
});

/*Route::get('promotion', function () {;
    return view('promotion');
});*/
/*------------------------------------------------------------*/

/*------------------------------------------------------------*/
Route::get('/details', function () {
    return view('details');
});
/*------------------------------------------------------------*/


/*------------------------------------------------------------*/
Route::get('/cart', function () {
    return view('cart');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/about', function () {
    return view('about');
});

//Route::get('search/{q}','SearchController@index');

//Route::get('search?q={q}','SearchController@index');

//Route::get('search','SearchController@index');
Route::get('/search', 'timkiemController@index');
//Route::get('/douong/{id}/delete', 'douongController@destroy');

//Route::post('/douong/{id}', 'douongController@update');
//Route::resource('/admin/douong', 'douongController');



//route to process the log in form
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'quyenadmin'], function () {
    Route::get('/admin', function ()    {
        return view('admin.index');
    });
	Route::get('/admin/nguoidung', 'Auth\thongtintaikhoan@nguoidung');
	Route::PUT('/admin/nguoidung-sua-{id}', 'Auth\thongtintaikhoan@nguoidungsua');
	Route::delete('/admin/nguoidung-xoa-{id}{admin}', 'Auth\thongtintaikhoan@nguoidungxoa');
	Route::POST('/admin/nguoidungthem', 'Auth\thongtintaikhoan@nguoidungthem');
    Route::resource('/admin/douong', 'douongController');
	Route::resource('/admin/loaidouong', 'loaidouongController');
});
Route::get('/dangky', function(){
  return view('auth/register');
});
Route::get('/dangnhap', function(){
  return view('auth/login');
});
Route::get('/viphamquyen', function () {
    return view('admin/viphamquyen');
});
Route::get('/bl-{id}', 'douongController@binhluan');
Route::get('/thongtintaikhoan', function () {
    return view('admin.thongtintaikhoan');
});
Route::PUT('/doiten-{id}', 'Auth\thongtintaikhoan@ten');

Route::PUT('/doimatkhau-{id}', 'Auth\thongtintaikhoan@matkhau');