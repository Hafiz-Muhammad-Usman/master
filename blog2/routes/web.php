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


Route::view('/admin/login','admin.login');

;
Route::post('/admin/Login_submit', 'Admin_auth@login');

Route::get('/admin/logout', function() {
    session()->forget('BLOG_USER_ID');
    return redirect('/admin/login');
});

    Route::group(['middleware'=>['admin_auth']], function(){
    Route::get('/admin/post/list','admin\post@listing');
    Route::POST('/admin/post/submit','admin\post@submit');


    Route::view('/admin/post/add' , 'admin.post.add');
    Route::get('post/delete/{id}' , 'admin\post@delete');
    Route::get('post/edit/{id}'   , 'admin\post@edit');
    Route::post('/admin/post/update/{id}','admin\post@update');
});