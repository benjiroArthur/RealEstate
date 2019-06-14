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

Route::get('/home', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/search', 'SearchController@searchform');
Route::get('/searchesult', 'SearchController@searchResult');
Route::post('/upload', 'PropertiesController@uploadImage')->name('uploadImage');
Route::resource('properties','PropertiesController');
Route::post('/storecontact', 'ContactController@store');


Route::resource('users','UsersController');
Route::resource('noyifyme','notifyMeController');

Route::match(['put','patch'],'/users/updatePwd/{id}', 'UsersController@updatePwd')->name('password_change');



Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/sidebar', 'DashboardController@sidebar');
Route::get('/users/logout', 'Auth\LoginController@userLogout');
Route::get('/view', 'DashboardController@viewAll');
Route::get('/update', 'DashboardController@update');
Route::get('/admin', 'DashboardController@index')->name('admin.dashboard');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLOginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLOginController@login')->name('admin.login.submit');
    //Route::get('/', 'DashboardController@index')->name('admin.dashboard');
    Route::get('/feedback', 'AdminController@feedback')->name('admin.feedback');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/add-user', 'AddUserController@index')->name('admin.add.user');

    //password reset route
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});

Route::resource('ad-properties', 'AdminPropertiesController');

//Route::get('/premium','PagesController@premiumAjax');
//Route::get('/recent','PagesController@recentAjax');
//Route::get('/all','PagesController@allAjax');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
