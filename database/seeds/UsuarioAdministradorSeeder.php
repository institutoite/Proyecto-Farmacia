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
       /* DB::table('usuario')->insert([
            'usuario'=>'farmacia_admin',
            'nombre' => 'Administrador',
            'password'=>bcrypt('pass123'),
            
        ]);
        DB::table('usuario')->insert([
            'usuario' => 'jason',
            'nombre' => 'jason',
            'password' => bcrypt('pass123'),

        ]);*/
        
        DB::table('menu')->insert([
            'menu_id' =>'0',
            'nombre' =>'Productos',
            'url' => 'Clases/producto',
            'orden' => '1',
            'icono' => 'fa fa-list'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Usuario',
            'url' => 'Admin/usuario',
            'orden' => '2',
            'icono' => 'fa fa-list'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Persona',
            'url' => 'Clases/persona',
            'orden' => '3',
            'icono' => 'fa fa-list'
        ]);
        DB::table('menu')->insert([
            'menu_id'=> '0',
            'nombre' => 'Rol',
            'url' => 'Admin/Rol',
            'orden' => '4',
            'icono' => 'fa fa-list'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Rol',
            'url' => 'Admin/Rol',
            'orden' => '7',
            'icono' => 'fa fa-list'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'TipoProducto',
            'url' => 'Clases/tipoproducto',
            'orden' => '5',
            'icono' => 'fa fa-list'
        ]);
        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Producto',
            'url' => 'Clases/producto',
            'orden' => '6',
            'icono' => 'fa fa-list'
        ]);

        DB::table('rol')->insert([
            'nombre' => 'administrador'
        ]);
        DB::table('rol')->insert([
            'nombre' => 'editor'
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
            'rol_id' => 2,
            'menu_id' => 1

        ]);


       
    }
}
