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
Route::get('/admin', function()
{
  return view('home');
});
Route::get('admin/dashboard', function(){
  return view('admin.blogs.index');
});
Route::get('admin/calendar', function(){
  return view('calendar');
});
Route::resource('/admin/add_blog', 'BlogsController');
Route::post('/admin/add_blog/image_upload', 'BlogsController@upload')->name('upload');
