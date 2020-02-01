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
            'nombre'    => 'Edicion de usuarios',
            'slug'      => 'usuario.edit',
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
            'slug'      => 'rol.index',
        ]);

        Permiso::create([
            'nombre'    => 'Edicion de Roles',
            'slug'      => 'rol.edit',
        ]);
        Permiso::create([
            'nombre'    => 'Eliminar Roles',
            'slug'      => 'rol.eliminar',
        ]);
       
    }
}
