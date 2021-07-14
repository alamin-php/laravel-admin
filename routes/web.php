<?php

use App\Http\Controllers\CommentController;
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

Auth::routes();
// Home Route Here
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');
// Users Route Here
Route::get('/user', 'UserController@index')->name('user');
Route::get('/user/create', 'UserController@create')->name('user.create');
Route::post('/user/add', 'CrudController@insertData')->name('user.add');
Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
Route::post('/user/update/{id}', 'CrudController@updateData')->name('user.update');
Route::get('/user/delete/{id}', 'UserController@delete')->name('user.delete');
Route::get('/user/profile', 'UserController@profile')->name('user.profile');
Route::get('/user/change-password', 'UserController@changePassword')->name('user.password');
Route::post('/user/update-password', 'UserController@updatePassword')->name('password.update');
// Settings Route Here
Route::get('/setting', 'SettingController@index')->name('setting');
Route::post('/setting/update', 'CrudController@updateData')->name('setting.update');
Route::get('/comment', 'CommentController@create')->name('comment.create');
Route::get('/view-comment', 'CommentController@view')->name('comment.view');

Route::view('computers', 'livewire.computer');