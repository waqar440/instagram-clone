<?php



/*

|--------------------------------------------------------------------------

| Admin Routes

|--------------------------------------------------------------------------

|

| Here is where you can register admin routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which

| contains the "admin" middleware group. Now create something great!

|

*/

Route::namespace('Admin')->group(function(){
    Route::get('/', 'DashboardController@index')->middleware('auth:admin');
    Route::post('/logout','AdminController@logout')->middleware('auth:admin')->name('admin.logout');
    Route::get('/login', 'AdminController@showloginform')->middleware('guest:admin');
    Route::post('/login', 'AdminController@login')->name('login.admin');
});
