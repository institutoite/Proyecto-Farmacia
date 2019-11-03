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
Route::get('/','InicioController@index');
Route::get('Admin/permiso','Admin\PermisoController@index')->name('permiso');
Route::get('Admin/permiso/crear', 'Admin\PermisoController@crear')->name('permiso_crear');

Route::get('Admin/menu/crear', 'Admin\MenuController@crear')->name('menu_crear');
Route::post('Admin/menu', 'Admin\MenuController@guardar')->name('menu_guardar');