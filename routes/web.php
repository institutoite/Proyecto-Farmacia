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
use App\Models\Clases\Compra;

Route::get('/', 'Seguridad\LoginController@index')->name('logon');
Route::get('/principal', 'InicioController@index')->name('inicio');
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
    Route::post('Admin/permiso', 'Admin\PermisoController@guardar')->name('guardar_permiso');

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

Route::group(['middleware' => ['auth']], function () {
    

    // RUTAS PARA TIPO PRODUCTOS
    Route::get('Clases/tipoproducto', 'Clases\TipoproductoController@index')->name('tipoproducto');
    Route::get('Clases/tipoproducto/crear', 'Clases\TipoproductoController@crear')->name('crear_tipoproducto');
    Route::post('Clases/tipoproducto', 'Clases\TipoproductoController@guardar')->name('guardar_tipoproducto');
    Route::get('Clases/tipoproducto/{id}/editar', 'Clases\TipoproductoController@editar')->name('editar_tipoproducto');
    Route::put('Clases/tipoproducto/{id}', 'Clases\TipoproductoController@actualizar')->name('actualizar_tipoproducto');
    Route::delete('Clases/tipoproducto/{id}', 'Clases\TipoproductoController@eliminar')->name('eliminar_tipoproducto');

    // RUTAS PARA PRODUCTO
    Route::get('Clases/producto', 'Clases\ProductoController@index')->name('producto');
    Route::get('Clases/producto/crear', 'Clases\ProductoController@crear')->name('crear_producto');
    Route::post('Clases/producto', 'Clases\ProductoController@guardar')->name('guardar_producto');
    Route::get('Clases/producto/{id}/editar', 'Clases\ProductoController@editar')->name('editar_producto');
    Route::put('Clases/producto/{id}', 'Clases\ProductoController@actualizar')->name('actualizar_producto');
    Route::delete('Clases/producto/{id}', 'Clases\ProductoController@eliminar')->name('eliminar_producto');

    // RUTAS PARA PERSONAS
    Route::get('Clases/persona', 'Clases\PersonaController@index')->name('persona');
    Route::get('Clases/persona/crear', 'Clases\PersonaController@crear')->name('crear_persona');
    Route::post('Clases/persona', 'Clases\PersonaController@guardar')->name('guardar_persona');
    Route::get('Clases/persona/{id}/editar', 'Clases\PersonaController@editar')->name('editar_persona');
    Route::put('Clases/persona/{id}', 'Clases\PersonaController@actualizar')->name('actualizar_persona');
    Route::delete('Clases/persona/{id}', 'Clases\PersonaController@eliminar')->name('eliminar_persona');

    // RUTAS PARA empleados
    Route::get('Clases/empleado', 'Clases\EmpleadoController@index')->name('empleado');
    Route::get('Clases/empleado/crear', 'Clases\EmpleadoController@crear')->name('crear_empleado');
    Route::post('Clases/empleado', 'Clases\EmpleadoController@guardar')->name('guardar_empleado');
    Route::get('Clases/empleado/{id}/editar', 'Clases\EmpleadoController@editar')->name('editar_empleado');
    Route::put('Clases/empleado/{id}', 'Clases\EmpleadoController@actualizar')->name('actualizar_empleado');
    Route::delete('Clases/empleado/{id}', 'Clases\EmpleadoController@eliminar')->name('eliminar_empleado');

    // RUTAS PARA CLIENTES
    Route::get('Clases/cliente', 'Clases\ClienteController@index')->name('cliente');
    Route::get('Clases/cliente/crear', 'Clases\ClienteController@crear')->name('crear_cliente');
    Route::post('Clases/cliente', 'Clases\ClienteController@guardar')->name('guardar_cliente');
    Route::get('Clases/cliente/{id}/editar', 'Clases\ClienteController@editar')->name('editar_cliente');
    Route::put('Clases/cliente/{id}', 'Clases\ClienteController@actualizar')->name('actualizar_cliente');
    Route::delete('Clases/cliente/{id}', 'Clases\ClienteController@eliminar')->name('eliminar_cliente');

    // RUTAS PARA PROVEEDORES
    Route::get('Clases/proveedor', 'Clases\ProveedorController@index')->name('proveedor');
    Route::get('Clases/proveedor/crear', 'Clases\ProveedorController@crear')->name('crear_proveedor');
    Route::post('Clases/proveedor', 'Clases\ProveedorController@guardar')->name('guardar_proveedor');
    Route::get('Clases/proveedor/{id}/editar', 'Clases\ProveedorController@editar')->name('editar_proveedor');
    Route::put('Clases/proveedor/{id}', 'Clases\ProveedorController@actualizar')->name('actualizar_proveedor');
    Route::delete('Clases/proveedor/{id}', 'Clases\ProveedorController@eliminar')->name('eliminar_proveedor');

    // RUTAS PARA PROVEEDORES
    Route::get('Clases/proveedor', 'Clases\ProveedorController@index')->name('proveedor');
    Route::get('Clases/proveedor/crear', 'Clases\ProveedorController@crear')->name('crear_proveedor');
    Route::post('Clases/proveedor', 'Clases\ProveedorController@guardar')->name('guardar_proveedor');
    Route::get('Clases/proveedor/{id}/editar', 'Clases\ProveedorController@editar')->name('editar_proveedor');
    Route::put('Clases/proveedor/{id}', 'Clases\ProveedorController@actualizar')->name('actualizar_proveedor');
    Route::delete('Clases/proveedor/{id}', 'Clases\ProveedorController@eliminar')->name('eliminar_proveedor');

    // rutas pra compra
    
    Route::get('Clases/compra', 'Clases\CompraController@index')->name('compra');
    Route::get('Clases/compra/crear', 'Clases\CompraController@crear')->name('crear_compra');
    Route::post('Clases/compra', 'Clases\CompraController@guardar')->name('guardar_compra');
    Route::get('Clases/compra/{id}/editar', 'Clases\CompraController@editar')->name('editar_compra');
    Route::put('Clases/compra/{id}', 'Clases\CompraController@actualizar')->name('actualizar_compra');
    Route::delete('Clases/compra/{id}', 'Clases\CompraController@eliminar')->name('eliminar_compra');
   // Route::get('Clases/compra/creardetalle/{id}','Clases\CompraController@cargardetalle')->name('detalle');
    Route::get('Clases/compra/productillos', 'Clases\ProductoController@getProductillos')->name('litar');

    Route::get('Clases/compra/{id}/generar', 'Clases\CompraController@generar')->name('generar_compra');
    Route::get('Clases/compra/guardardetalle', 'Clases\CompraController@guardardetalle')->name('agregar_detalle_compra');
    Route::delete('Clases/compra/eliminardetalle/{idcompra}/{idproducto}', 'Clases\CompraController@eliminardetalle')->name('eliminar_detalle_compra');
    Route::get('imprimir_compra/{idcompra}', 'Clases\CompraController@imprimircompra')->name('imprimir_compra');


    // rutas para las Ventas
    Route::get('Clases/venta', 'Clases\VentaController@index')->name('venta');
    Route::get('Clases/venta/crear', 'Clases\VentaController@crear')->name('crear_venta');
    Route::post('Clases/venta', 'Clases\VentaController@guardar')->name('guardar_venta');
    Route::get('Clases/venta/{id}/editar', 'Clases\VentaController@editar')->name('editar_venta');
    Route::put('Clases/venta/{id}', 'Clases\VentaController@actualizar')->name('actualizar_venta');
    Route::delete('Clases/venta/{id}', 'Clases\VentaController@eliminar')->name('eliminar_venta');
    Route::get('Clases/venta/{id}/generar', 'Clases\VentaController@generar')->name('generar_venta');

    Route::get('Clases/venta/guardardetalle', 'Clases\VentaController@guardardetalle')->name('agregar_detalle');
    Route::delete('Clases/venta/eliminardetalle/{idventa}/{idproducto}', 'Clases\VentaController@eliminardetalle')->name('eliminar_detalle_venta');
    Route::get('imprimir_venta/{idventa}','Clases\VentaController@imprimirventa')->name('imprimir_venta');

    //* RUTAS PARA INVENTARIO */

    Route::get('Clases/inventario','Clases\InventarioController@index')->name('inventario');



});