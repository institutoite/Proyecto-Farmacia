<?php

use App\Clases\Persona;
use Illuminate\Database\Seeder;

class TablaPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Clases\Persona::class,50)->create(); 
    }
}
