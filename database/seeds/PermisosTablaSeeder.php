<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Permiso;

class PermisosTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // permisos para usuarios
        Permiso::create([
            'nombre'    => 'Navegar Usuarios',
            'slug'      => 'usuario.index',
        ]);
        Permiso::create([
            'nombre'    => 'Crear de usuarios',
            'slug'      => 'usuario.crear',
        ]);
        Permiso::create([
            'nombre'    => 'Edicion de usuarios',
            'slug'      => 'usuario.editar',
        ]);
        Permiso::create([
            'nombre'    => 'Actualizar de usuarios',
            'slug'      => 'usuario.actualizar',
        ]);
        Permiso::create([
            'nombre'    => 'Eliminar Usuarios',
            'slug'      => 'usuario.eliminar',
        ]);

        // permisos para Roles
        Permiso::create([
            'nombre'    => 'Navegar Roles',
            'slug'      => 'rol.index',
        ]);

        Permiso::create([
            'nombre'    => 'Crear Roles',
            'slug'      => 'rol.crear',
        ]);

        Permiso::create([
            'nombre'    => 'Edicion de Roles',
            'slug'      => 'rol.editar',
        ]);
        Permiso::create([
            'nombre'    => 'Eliminar Roles',
            'slug'      => 'rol.eliminar',
        ]);

        // permisos persona
        Permiso::create([
            'nombre'    => 'Navegar Personas',
            'slug'      => 'persona.index',
        ]);
        Permiso::create([
            'nombre'    => 'Crear Personas',
            'slug'      => 'persona.crear',
        ]);
        Permiso::create([
            'nombre'    => 'Guardar Personas',
            'slug'      => 'persona.guardar',
        ]);
        Permiso::create([
            'nombre'    => 'Editar Personas',
            'slug'      => 'persona.editar',
        ]);

        Permiso::create([
            'nombre'    => 'Actualizar Personas',
            'slug'      => 'persona.actualizar',
        ]);
        
        Permiso::create([
            'nombre'    => 'Eliminar Personas',
            'slug'      => 'persona.eliminar',
        ]);

         // permisos empleado
        
        Permiso::create([
            'nombre'    => 'Navegar Empleados',
            'slug'      => 'empleado.index',
        ]);
        Permiso::create([
            'nombre'    => 'Crear Empleados',
            'slug'      => 'empleado.crear',
        ]);
        Permiso::create([
            'nombre'    => 'Guardar Empleados',
            'slug'      => 'empleado.guardar',
        ]);
        Permiso::create([
            'nombre'    => 'Editar Empleados',
            'slug'      => 'empleado.editar',
        ]);

        Permiso::create([
            'nombre'    => 'Actualizar Empleados',
            'slug'      => 'empleado.actualizar',
        ]);
        
        Permiso::create([
            'nombre'    => 'Eliminar Empleados',
            'slug'      => 'empleado.eliminar',
        ]);

         // permisos cliente
        
        Permiso::create([
            'nombre'    => 'Navegar Clientes',
            'slug'      => 'cliente.index',
        ]);
        Permiso::create([
            'nombre'    => 'Crear Clientes',
            'slug'      => 'cliente.crear',
        ]);
        Permiso::create([
            'nombre'    => 'Guardar Clientes',
            'slug'      => 'cliente.guardar',
        ]);
        Permiso::create([
            'nombre'    => 'Editar Clientes',
            'slug'      => 'cliente.editar',
        ]);

        Permiso::create([
            'nombre'    => 'Actualizar Clientes',
            'slug'      => 'cliente.actualizar',
        ]);
        
        Permiso::create([
            'nombre'    => 'Eliminar Clientes',
            'slug'      => 'cliente.eliminar',
        ]);

        // permisos proveedor
        
        Permiso::create([
            'nombre'    => 'Navegar proveedores',
            'slug'      => 'proveedor.index',
        ]);
        Permiso::create([
            'nombre'    => 'Crear proveedores',
            'slug'      => 'proveedor.crear',
        ]);
        Permiso::create([
            'nombre'    => 'Guardar proveedores',
            'slug'      => 'proveedor.guardar',
        ]);
        Permiso::create([
            'nombre'    => 'Editar proveedores',
            'slug'      => 'proveedor.editar',
        ]);

        Permiso::create([
            'nombre'    => 'Actualizar proveedores',
            'slug'      => 'proveedor.actualizar',
        ]);
        
        Permiso::create([
            'nombre'    => 'Eliminar proveedores',
            'slug'      => 'proveedor.eliminar',
        ]);
          
        // permisos productos
        
        Permiso::create([
            'nombre'    => 'Navegar productos',
            'slug'      => 'producto.index',
        ]);
        Permiso::create([
            'nombre'    => 'Crear productos',
            'slug'      => 'producto.crear',
        ]);
        Permiso::create([
            'nombre'    => 'Guardar productos',
            'slug'      => 'producto.guardar',
        ]);
        Permiso::create([
            'nombre'    => 'Editar productos',
            'slug'      => 'producto.editar',
        ]);

        Permiso::create([
            'nombre'    => 'Actualizar productos',
            'slug'      => 'producto.actualizar',
        ]);
        
        Permiso::create([
            'nombre'    => 'Eliminar productos',
            'slug'      => 'producto.eliminar',
        ]);

         // permisos tipoproductos
        
        Permiso::create([
            'nombre'    => 'Navegar tipo productos',
            'slug'      => 'tipoproducto.index',
        ]);
        Permiso::create([
            'nombre'    => 'Crear tipo productos',
            'slug'      => 'tipoproducto.crear',
        ]);
        Permiso::create([
            'nombre'    => 'Guardar tipo productos',
            'slug'      => 'tipoproducto.guardar',
        ]);
        Permiso::create([
            'nombre'    => 'Editar tipo productos',
            'slug'      => 'tipoproducto.editar',
        ]);

        Permiso::create([
            'nombre'    => 'Actualizar tipo productos',
            'slug'      => 'tipoproducto.actualizar',
        ]);
        
        Permiso::create([
            'nombre'    => 'Eliminar tipo productos',
            'slug'      => 'tipoproducto.eliminar',
        ]);

        // permisos 
        
        Permiso::create([
            'nombre'    => 'Navegar tipo productos',
            'slug'      => 'tipoproducto.index',
        ]);
        Permiso::create([
            'nombre'    => 'Crear tipo productos',
            'slug'      => 'tipoproducto.crear',
        ]);
        Permiso::create([
            'nombre'    => 'Guardar tipo productos',
            'slug'      => 'tipoproducto.guardar',
        ]);
        Permiso::create([
            'nombre'    => 'Editar tipo productos',
            'slug'      => 'tipoproducto.editar',
        ]);

        Permiso::create([
            'nombre'    => 'Actualizar tipo productos',
            'slug'      => 'tipoproducto.actualizar',
        ]);
        
        Permiso::create([
            'nombre'    => 'Eliminar tipo productos',
            'slug'      => 'tipoproducto.eliminar',
        ]);
        
        
        // PERMISO PARA GESTIONAR PERMISOS PERMISOS
        Permiso::create([
            'nombre'    => 'Listar Permisos',
            'slug'      => 'permiso.index',
        ]);

        Permiso::create([
            'nombre'    => 'Crear Permisos',
            'slug'      => 'permiso.crear',
        ]);

        Permiso::create([
            'nombre'    => 'editar Permisos',
            'slug'      => 'permiso.editar',
        ]);

        Permiso::create([
            'nombre'    => 'actualizar Permisos',
            'slug'      => 'permiso.actualizar',
        ]);
        Permiso::create([
            'nombre'    => 'Eliminar Permisos',
            'slug'      => 'permiso.eliminar',
        ]);
    
        // permisos para gestionar MENU

         // rutas de menu
        Permiso::create([
            'nombre'    => 'Listar Menues',
            'slug'      => 'menu.index',
        ]);

        Permiso::create([
            'nombre'    => 'Crear Menues',
            'slug'      => 'menu.crear',
        ]);

        Permiso::create([
            'nombre'    => 'editar Menues',
            'slug'      => 'menu.editar',
        ]);

        Permiso::create([
            'nombre'    => 'actualizar Menues',
            'slug'      => 'menu.actualizar',
        ]);
        Permiso::create([
            'nombre'    => 'Eliminar Menues',
            'slug'      => 'menu.eliminar',
        ]);
        
        // permisos para administrar MENU - ROL
        Permiso::create([
            'nombre'    => 'Lista Menu-rol',
            'slug'      => 'menu-rol-.index',
        ]);

         // rutas de compra
        Permiso::create([
            'nombre'    => 'Listar Compras',
            'slug'      => 'compra.index',
        ]);

        Permiso::create([
            'nombre'    => 'Crear Compras',
            'slug'      => 'compra.crear',
        ]);


        Permiso::create([
            'nombre'    => 'editar Compras',
            'slug'      => 'compra.editar',
        ]);

        Permiso::create([
            'nombre'    => 'actualizar Compras',
            'slug'      => 'compra.actualizar',
        ]);
        Permiso::create([
            'nombre'    => 'Eliminar compra',
            'slug'      => 'compra.eliminar',
        ]);
        Permiso::create([
            'nombre'    => 'Generar reporte compra',
            'slug'      => 'compra.generarcompra',
        ]);
        Permiso::create([
            'nombre'    => 'Imprimir reporte compra',
            'slug'      => 'compra.imprimir',
        ]);

        Permiso::create([
            'nombre'    => 'Guardar compra',
            'slug'      => 'compra.Guardar',
        ]);

        Permiso::create([
            'nombre'    => 'Eliminar detalle compra',
            'slug'      => 'compra.eliminardetalle',
        ]);
         Permiso::create([
            'nombre'    => 'Agregar detalle compra',
            'slug'      => 'compra.agregardetalle',
        ]);

         // rutas de Venta
        Permiso::create([
            'nombre'    => 'Listar Ventas',
            'slug'      => 'venta.index',
        ]);

        Permiso::create([
            'nombre'    => 'Crear Ventas',
            'slug'      => 'venta.crear',
        ]);
    
        Permiso::create([
            'nombre'    => 'editar Ventas',
            'slug'      => 'venta.editar',
        ]);

        Permiso::create([
            'nombre'    => 'actualizar Ventas',
            'slug'      => 'venta.actualizar',
        ]);
        Permiso::create([
            'nombre'    => 'Eliminar Ventas',
            'slug'      => 'venta.eliminar',
        ]);
        Permiso::create([
            'nombre'    => 'Generar Detalle Ventas',
            'slug'      => 'venta.generarventa',
        ]);
        Permiso::create([
            'nombre'    => 'Imprimir reporte Venta',
            'slug'      => 'venta.imprimir',
        ]);
        Permiso::create([
            'nombre'    => 'Guardar Ventas',
            'slug'      => 'venta.guardar',
        ]);
         Permiso::create([
            'nombre'    => 'Eliminar detalle venta',
            'slug'      => 'venta.eliminardetalle',
        ]);

         

                
    }
}
