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


// rutas de menu
Route::get('Admin/menu/crear', 'Admin\MenuController@crear')->name('menu_crear');
Route::post('Admin/menu', 'Admin\MenuController@guardar')->name('menu_guardar');
Route::get('Admin/menu', 'Admin\MenuController@index')->name('menu_index');
Route::post('Admin/menu/guardar-orden', 'Admin\MenuController@guardarOrden')->name('guardar_orden');

// rutas de Rol
Route::get('Admin/rol','RolController@index')->name('rol');
Route::get('Admin/rol/crear', 'RolController@crear')->name('crear_rol');
Route::post('Admin/rol', 'RolController@guardar')->name('guardar_rol');

Route::get('Admin/{id}/editar', 'RolController@editar')->name('editar_rol');
Route::put('Admin/rol/{id}', 'RolController@actualizar')->name('actualizar_rol');

Route::get('Admin/{id}/eliminar', 'RolController@eliminar')->name('eliminar_rol');
Route::get('Admin/{id}/eliminar', 'RolController@eliminar')->name('eliminar_rol');