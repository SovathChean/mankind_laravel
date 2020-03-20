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
     Route::get('blog', 'BlogsController@datatable')->name('get.blogs');
     Route::get('/admin/add_blog/delete/{id}', 'BlogsController@destroy');
     Route::post('/admin/add_blog/image_upload', 'BlogsController@upload')->name('upload');

  });
  Route::group(['middleware'=>['role:doctor|Admin']], function(){
     Route::resource('/admin/post_type', 'PostTypeController');
  });
  Route::group(['middleware' => ['role:Admin']], function(){
     Route::resource('/admin/create_role', 'CreateRoleController');
     Route::resource('/admin/health_topic', 'HealthTopicController');
     Route::resource('/admin/department', 'DepartmentController');
  });
   Route::resource('/admin/user', 'UsersController');
   Route::get('/admin/user/delete/{id}', 'UsersController@destroy');
   Route::resource('/admin/add_role', 'RoleController');
   Route::get('/admin/add_role/add/{id}', 'RoleController@addRole');
   Route::get('admin/calendar', function(){
     return view('calendar');
   });
   Route::get('user', 'UsersController@datatable')->name('get.users');
   Route::resource('/admin/profile', 'ProfileController');
   Route::get('/upload', 'PhotoController@ajaxstore');
   Route::resource('/admin/post', 'PostController');
   Route::get('/admin/post/delete/{id}', 'PostController@destroy');
   Route::get('post', 'PostController@datatable')->name('get.posts');
});
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
