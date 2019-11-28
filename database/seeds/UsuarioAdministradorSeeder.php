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
        DB::table('usuario')->insert([
            'usuario'=>'farmacia_admin',
            'nombre' => 'Administrador',
            'password'=>bcrypt('pass123'),
            
        ]);
        DB::table('usuario')->insert([
            'usuario' => 'jason',
            'nombre' => 'jason',
            'password' => bcrypt('pass123'),

        ]);

// PRODUCTOS

        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'PRODCUTO',
            'url' => '#',
            'orden' => '1',
            'icono' => 'fa fa-list'
        ]);    

        DB::table('menu')->insert([
            'menu_id' =>'1',
            'nombre' =>'Crear Productos',
            'url' => 'Clases/producto/crear',
            'orden' => '2',
            'icono' => 'fa fa-list'
        ]);

        DB::table('menu')->insert([
            'menu_id' => '1',
            'nombre' => 'Listar Productos',
            'url' => 'Clases/producto',
            'orden' => '3',
            'icono' => 'fa fa-list'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '1',
            'nombre' => 'Reporte',
            'url' => 'Clases/producto/reporte',
            'orden' => '4',
            'icono' => 'fa fa-list'
        ]);
        




        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Usuario',
            'url' => 'Admin/usuario',
            'orden' => '5',
            'icono' => 'fa fa-list'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Persona',
            'url' => 'Clases/persona',
            'orden' => '6',
            'icono' => 'fa fa-list'
        ]);
        DB::table('menu')->insert([
            'menu_id'=> '0',
            'nombre' => 'Rol',
            'url' => 'Admin/rol',
            'orden' => '7',
            'icono' => 'fa fa-list'
        ]);
    
        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'TipoProducto',
            'url' => 'Clases/tipoproducto',
            'orden' => '8',
            'icono' => 'fa fa-list'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Menu-rol',
            'url' => 'Admin/menu-rol',
            'orden' => '9',
            'icono' => 'fa fa-list'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Empleado',
            'url' => 'Clases/empleado',
            'orden' => '10',
            'icono' => 'fa fa-list'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Menu',
            'url' => 'Admin/menu',
            'orden' => '11',
            'icono' => 'fa fa-list'
        ]);

        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Proveedor',
            'url' => 'Clases/proveedor',
            'orden' => '12',
            'icono' => 'fa fa-list'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Cliente',
            'url' => 'Clases/cliente',
            'orden' => '13',
            'icono' => 'fa fa-list'
        ]);

        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Compra',
            'url' => 'Clases/compra',
            'orden' => '14',
            'icono' => 'fa fa-list'
        ]);

        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Venta',
            'url' => 'Clases/venta',
            'orden' => '15',
            'icono' => 'fa fa-list'
        ]);


        DB::table('usuario_rol')->insert([
            'rol_id' => 1,
            'usuario_id' => 1,
            'estado' => 1
        ]);
        DB::table('usuario_rol')->insert([
            'rol_id' => 1,
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
            'rol_id' => 2,
            'menu_id' => 8

        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => 1,
            'menu_id' => 1

        ]);

       
    }
}
