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
    return view('front.home.home-content');
});
Route::get('/blog', function () {
    return view('front.blog.blog-content');
});
Route::get('/about', function () {
    return view('front.about.about');
});
Route::get('/contact', function () {
    return view('front.contact.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/role-user', 'RoleController@user');

Route::resource('role','RoleController');

Route::get('/admin',[
    'as'=>'admin.index',
    'middleware'=>'role:admin|Moderator',
    'uses'=>function (){
        return view('admin.index');
    }
]);

Route::resource('blog','BlogController');

Route::resource('user','UserController');

