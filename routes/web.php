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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'],function()
{
    Route::group(['prefix'=>'sach'],function()
    {
        Route::get('list','SachController@getList');
        Route::get('add','SachController@getAdd');
        Route::post('add','SachController@postAdd');
        Route::get('edit/{id}','SachController@getEdit');
        Route::post('edit/{id}','SachController@postEdit');
        Route::get('delete/{id}','SachController@getDelete');
    });

    Route::group(['prefix'=>'loaisach'],function()
    {
        Route::get('list','LoaiSachController@getList');
        Route::get('add','LoaiSachController@getAdd');
        Route::post('add','LoaiSachController@postAdd');
        Route::get('delete/{id}','LoaiSachController@getDelete');
    });

    Route::group(['prefix'=>'bill'],function()
    {
        Route::get('list','BillController@getList');
        Route::get('edit/{id}','BillController@getEdit');
        Route::post('edit/{id}','BillController@postEdit');
        Route::get('detail/{id}','BillController@getDetail');
        Route::get('delete/{id}','BillController@getDelete');
    });
});
