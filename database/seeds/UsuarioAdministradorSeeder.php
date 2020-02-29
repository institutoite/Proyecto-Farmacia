<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    // CREACION DE USUARIOS    
        DB::table('usuario')->insert([
            'usuario'=>'admin',
            'nombre' => 'Administrador',
            'password'=>bcrypt('admin'),
            
        ]);
        DB::table('usuario')->insert([
            'usuario' => 'jason',
            'nombre' => 'jason',
            'password' => bcrypt('123'),

        ]);

    // PRODUCTOS 1

        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'PRODCUTO',
            'url' => '#1',
            'orden' => '1',
            'icono' => 'fa fa-list'
        ]);    

        DB::table('menu')->insert([
            'menu_id' =>'1',
            'nombre' =>'Crear Productos',
            'url' => 'Clases/producto/crear',
            'orden' => '2',
            'icono' => 'fa fa-check'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '1',
            'nombre' => 'Listar Productos',
            'url' => 'Clases/producto',
            'orden' => '3',
            'icono' => 'fa fa-check'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '1',
            'nombre' => 'Reporte',
            'url' => '#',
            'orden' => '4',
            'icono' => 'fa fa-check'
        ]);
        

     // CLIENTE 2
        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'CLIENTE',
            'url' => '#2',
            'orden' => '5',
            'icono' => 'fa fa-list'
        ]);

        DB::table('menu')->insert([
            'menu_id' => '5',
            'nombre' => 'Crear Cliente',
            'url' => 'Clases/cliente/crear',
            'orden' => '6',
            'icono' => 'fa fa-check'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '5',
            'nombre' => 'Listar Clientes',
            'url' => 'Clases/cliente',
            'orden' => '7',
            'icono' => 'fa fa-check'
        ]);
        
    // USUARIO 4    
        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'USUARIO',
            'url' => '#3',
            'orden' => '8',
            'icono' => 'fa fa-list'
        ]);

        DB::table('menu')->insert([
            'menu_id' => '8',
            'nombre' => 'Crear Usuario',
            'url' => 'Admin/usuario/crear',
            'orden' => '9',
            'icono' => 'fa fa-check'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '8',
            'nombre' => 'Listar Usuarios',
            'url' => 'Admin/usuario',
            'orden' => '10',
            'icono' => 'fa fa-check'
        ]);
        
            
 // PERSONA 5

        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Persona',
            'url' => '#4',
            'orden' => '11',
            'icono' => 'fa fa-list'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '11',
            'nombre' => 'Crear Persona',
            'url' => 'Clases/persona/crear',
            'orden' => '11',
            'icono' => 'fa fa-check'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '11',
            'nombre' => 'Listar Personas',
            'url' => 'Clases/persona',
            'orden' => '13',
            'icono' => 'fa fa-check'
        ]);

        // tipo producto 6
        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'TipoProducto',
            'url' => '#5',
            'orden' => '14',
            'icono' => 'fa fa-check'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '14',
            'nombre' => 'Crear TipoProducto',
            'url' => 'Clases/tipoproducto/crear',
            'orden' => '15',
            'icono' => 'fa fa-check'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '14',
            'nombre' => 'Listar TipoProducto',
            'url' => 'Clases/tipoproducto',
            'orden' => '16',
            'icono' => 'fa fa-check'
        ]);

        // proveedor 7
        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'PROVEEDOR',
            'url' => '#6',
            'orden' => '17',
            'icono' => 'fa fa-list'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '17',
            'nombre' => 'Crear Proveedor',
            'url' => 'Clases/proveedor/crear',
            'orden' => '18',
            'icono' => 'fa fa-check'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '17',
            'nombre' => 'Listar Proveedores',
            'url' => 'Clases/proveedor',
            'orden' => '19',
            'icono' => 'fa fa-check'
        ]);    

        //*ROL/  8  
        DB::table('menu')->insert([
            'menu_id'=> '0',
            'nombre' => 'ROLES',
            'url' => '#7',
            'orden' => '20',
            'icono' => 'fa fa-list'
        ]);

        DB::table('menu')->insert([
            'menu_id' => '20',
            'nombre' => 'Listar Rol',
            'url' => 'Admin/rol',
            'orden' => '21',
            'icono' => 'fa fa-check'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '20',
            'nombre' => 'Crear Rol',
            'url' => 'Admin/rol/crear',
            'orden' => '22',
            'icono' => 'fa fa-check'
        ]);    
        // MENU ROL    9
        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Menu-rol',
            'url' => '#8',
            'orden' => '23',
            'icono' => 'fa fa-list'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '23',
            'nombre' => 'Listar Menu-rol',
            'url' => 'Admin/menu-rol',
            'orden' => '24',
            'icono' => 'fa fa-check'
        ]);
    

        // MENU 10
        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Menu',
            'url' => '#9',
            'orden' => '25',
            'icono' => 'fa fa-list'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '25',
            'nombre' => 'Menu',
            'url' => 'Admin/menu',
            'orden' => '26',
            'icono' => 'fa fa-check'
        ]);


        // compra 11
        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'COMPRA',
            'url' => '#10',
            'orden' => '27',
            'icono' => 'fa fa-list'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '27',
            'nombre' => 'Nueva Compra',
            'url' => 'Clases/compra/crear',
            'orden' => '28',
            'icono' => 'fa fa-check'
        ]);

        DB::table('menu')->insert([
            'menu_id' => '27',
            'nombre' => 'Listar Compras',
            'url' => 'Clases/compra',
            'orden' => '29',
            'icono' => 'fa fa-check'
        ]);
        
        // VENTAS

        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'VENTAS',
            'url' => '#11',
            'orden' => '30',
            'icono' => 'fa fa-list'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '30',
            'nombre' => 'Nueva Venta',
            'url' => 'Clases/venta/crear',
            'orden' => '31',
            'icono' => 'fa fa-check'
        ]);

        DB::table('menu')->insert([
            'menu_id' => '30',
            'nombre' => 'Listar Venta',
            'url' => 'Clases/venta',
            'orden' => '32',
            'icono' => 'fa fa-check'
        ]);

        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'PERMISO ROL',
            'url' => '#12',
            'orden' => '33',
            'icono' => 'fa fa-check'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '33',
            'nombre' => 'listar permisos',
            'url' => 'Admin/permiso',
            'orden' => '34',
            'icono' => 'fa fa-check'
        ]);
          DB::table('menu')->insert([
            'menu_id' => '33',
            'nombre' => 'Configurar Permisos y roles',
            'url' => 'Admin/permiso-rol',
            'orden' => '35',
            'icono' => 'fa fa-check'
        ]);


        DB::table('usuario_rol')->insert([
            'rol_id' => 1,
            'usuario_id' => 1,
            'estado' => 1
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 2,
            'usuario_id' => 2,
            'estado' => 1
        ]);
        
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' =>1
           
        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 2

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 3

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 4

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 5

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 6

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 7

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 8

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 9

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 10

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 11

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 12

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 13

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 14

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 15

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 16

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 17

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 18

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 19

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 20

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 21

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 22

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 23

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 24

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 25

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 26

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 27

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 28

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 29

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 30

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 31

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 32

        ]);
         DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 33

        ]);
         DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 34

        ]);
         DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 35

        ]);


        // *********************************************************** vendedor
        /*DB::table('usuario_rol')->insert([
            'rol_id' => 2,
            'usuario_id' => 1,
            'estado' => 1
        ]);
        DB::table('usuario_rol')->insert([
            'rol_id' => 2,
            'usuario_id' => 2,
            'estado' => 1
        ]);*/

        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 1

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 2

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 3

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 4

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 5

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 6

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 7

        ]);
    

        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 11

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 12

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 13

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 14

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 15

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 16

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 17

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 18

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 19

        ]);

      
    
        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 27

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 28

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 29

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 30

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 31

        ]);
        DB::table('menu_rol')->insert([
            'rol_id' => 2,
            'menu_id' => 32

        ]);


       
    }
}
