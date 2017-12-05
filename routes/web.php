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

Route::get('master', function () {
    return view('template.master');
});

Route::get('chitiet', function () {
    return view('template.detail');
});

Route::get('sub', function () {
    return view('template.sub');
});

Route::get('admin/master', function () {
    return view('cate.master');
});

Route::get('admin/getlistcate', function () {
    return view('cate.list');
});

Route::get('testkn', function () {
    return DB::table('theloai')->where('id',3)->get()->toArray();
});

//Goi controller

//cate

Route::get('admin/catelist',['as'=>'dscate','uses'=>'CateController@getList']);

Route::get('admin/themcate',['as'=>'themcate','uses'=>'CateController@getAdd']);

Route::post('admin/themcate',['as'=>'postcate','uses'=>'CateController@postAdd']);

Route::get('admin/catedelete/{id}',['as'=>'catedelete','uses'=>'CateController@delete']);

Route::get('admin/cateedit/{id}',['as'=>'cateedit','uses'=>'CateController@getEdit']);

Route::post('admin/cateedit/{id}',['as'=>'updatecate','uses'=>'CateController@update']);

//new 

Route::get('admin/newlist',['as'=>'dsnew','uses'=>'NewController@getList']);

Route::get('admin/newdelete/{id}',['as'=>'newdelete','uses'=>'NewController@delete']);

Route::get('admin/themnews',['as'=>'themnews','uses'=>'NewController@getAdd']);

Route::post('admin/themnews',['as'=>'postnews','uses'=>'NewController@postAdd']);

Route::get('admin/editnews/{id}',['as'=>'editnews','uses'=>'NewController@getEdit']);

Route::post('admin/editnews/{id}',['as'=>'updatenewspost','uses'=>'NewController@update']);




//user

Route::get('admin/userlist',['as'=>'dsuser','uses'=>'UserController@getList']);

Route::get('admin/themuser',['as'=>'themuser','uses'=>'UserController@themUser']);
 

//ajax

Route::get('ajax/{idtheloai}','NewController@ajax');