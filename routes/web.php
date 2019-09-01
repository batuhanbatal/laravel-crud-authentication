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

/*
 * @author Batuhan Batal <batuhanbatal@gmail.com>
 */

Route::get('/', function () {
    echo "<a href='/login'>Click to Go to Login Page</a>";
});


// Admin Routes
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin', 'middleware' => 'auth'], function(){
    // Index   
    Route::get('/',                      'HomeController@index')->name('.index');
    // User Index
    Route::get('/users',                 'UsersController@index')->name('.users.index');
    // User Create 
    Route::get('/users/create',          'UsersController@create')->name('.users.create');
    Route::post('/users/store',          'UsersController@store')->name('.users.store');
    // User Edit
    Route::get('/users/edit/{id}',       'UsersController@edit')->name('.users.edit');
    Route::put('/users/update/{id}',     'UsersController@update')->name('.users.update');
    // User Delete
    Route::delete('/users/delete/{id}',  'UsersController@delete')->name('.users.delete');
});


// Auth Routes
Route::group(['namespace' => 'Auth', 'as' => 'auth'], function(){
    // Login Page 
    Route::get('/login',     'LoginController@showLoginForm')->name('.login');
    // Login Post
    Route::post('/login',    'LoginController@login')->name('.login');
    // Logout
    Route::get('/logout',    'LoginController@logout')->name('.logout');
});