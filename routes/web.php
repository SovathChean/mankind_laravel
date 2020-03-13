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




Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function() {
  Route::group(['middleware'=>['permission:write post']], function(){
     Route::resource('/admin/add_blog', 'BlogsController');
     Route::post('/admin/add_blog/image_upload', 'BlogsController@upload')->name('upload');
  });
  Route::group(['middleware' => ['role:Admin']], function(){
     Route::resource('/admin/create_role', 'CreateRoleController');
     Route::resource('/admin/health_topic', 'HealthTopicController');
  });
   Route::resource('/admin/user', 'UsersController');
   Route::resource('/admin/add_role', 'RoleController');
   Route::get('admin/calendar', function(){
     return view('calendar');
   });
});
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
