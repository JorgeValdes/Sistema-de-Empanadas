<?php

use Illuminate\Database\Seeder;
#semilla para las direcciones
class DireccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('direcciones')->insert([
        	'direccion'=>'CHAPA VERDE #484, POBLACIÓN MANZANAL'
        ]);

        DB::table('direcciones')->insert([
        	'direccion'=>'MIGUEL RAMÍREZ #1420, RANCAGUA'
        ]);

        DB::table('direcciones')->insert([
        	'direccion'=>'CUEVAS #483, MALL PATIO'
        ]);
    }
}
