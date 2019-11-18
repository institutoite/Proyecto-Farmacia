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

Route::get('/', 'InicioController@index')->name('inicio');
Route::get('seguridad/login','Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login','Seguridad\LoginController@login')->name('login_post');
Route::get('seguridad/logout', 'Seguridad\LoginController@logout')->name('logout');


Route::group(['middleware' => ['auth','superadmin']], function () {

    Route::get('Admin/usuario', 'Admin\UsuarioController@index')->name('usuario');
    Route::get('Admin/usuario/crear', 'Admin\UsuarioController@crear')->name('crear_usuario');
    Route::post('Admin/usuario', 'Admin\UsuarioController@guardar')->name('guardar_usuario');
    Route::get('Admin/usuario/{id}/editar', 'Admin\UsuarioController@editar')->name('editar_usuario');
    Route::put('Admin/usuario/{id}', 'Admin\UsuarioController@actualizar')->name('actualizar_usuario');
    Route::delete('Admin/usuario/{id}', 'Admin\UsuarioController@eliminar')->name('eliminar_usuario');

    Route::get('Admin/', 'Admin\AdminController@index');
    Route::get('Admin/permiso', 'Admin\PermisoController@index')->name('permiso');
    Route::get('Admin/permiso/crear', 'Admin\PermisoController@crear')->name('permiso_crear');

    // rutas de menu
    Route::get('Admin/menu/crear', 'Admin\MenuController@crear')->name('menu_crear');
    Route::post('Admin/menu', 'Admin\MenuController@guardar')->name('menu_guardar');
    Route::get('Admin/menu', 'Admin\MenuController@index')->name('menu_index');
    Route::post('Admin/menu/guardar-orden', 'Admin\MenuController@guardarOrden')->name('guardar_orden');

    // rutas de Rol
    Route::get('Admin/rol', 'RolController@index')->name('rol');
    Route::get('Admin/rol/crear', 'RolController@crear')->name('crear_rol');
    Route::post('Admin/rol', 'RolController@guardar')->name('guardar_rol');

    Route::get('Admin/{id}/editar', 'RolController@editar')->name('editar_rol');
    Route::put('Admin/rol/{id}', 'RolController@actualizar')->name('actualizar_rol');

    Route::delete('Admin/rol/{id}', 'RolController@eliminar')->name('eliminar_rol');


    /** RUTAS PARA MENU-ROL */
    Route::get('Admin/menu-rol', 'Admin\MenuRolController@index')->name('menu-rol');
    Route::post('Admin/menu-rol', 'Admin\MenuRolController@guardar')->name('guardar_menu-rol');
    
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('Clases/persona', 'Clases\PersonaController@index')->name('persona');
    Route::get('Clases/persona/crear', 'Clases\PersonaController@crear')->name('crear_persona');
    Route::post('Clases/persona', 'Clases\PersonaController@guardar')->name('guardar_persona');
    Route::get('Clases/persona/{id}/editar', 'Clases\PersonaController@editar')->name('editar_persona');
    Route::put('Clases/persona/{id}', 'Clases\PersonaController@actualizar')->name('actualizar_persona');
    Route::delete('Clases/persona/{id}', 'Clases\PersonaController@eliminar')->name('eliminar_persona');
});
