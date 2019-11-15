<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->TruncarTablas([
            'rol',
            'permiso',
            'usuario',
            'usuario_rol'
            ]); 
        $this->call(Tablarolseeder::class);
        $this->call(TablaPermisoSider::class);
        $this->call(UsuarioAdministradorSeeder::class);    
    }
    protected function TruncarTablas(array $tablas){
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        foreach ($tablas as $key => $tabla) {
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
       }
}
