<?php

use Illuminate\Database\Seeder;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipoproductos')->insert([
        	'tipo_producto'=>'EMPANADAS DE HORNO',
        ]);

        DB::table('tipoproductos')->insert([
        	'tipo_producto'=>'EMPANADAS FRITAS',
        ]);

        DB::table('tipoproductos')->insert([
        	'tipo_producto'=>'ALMUERZOS',
        ]);

        DB::table('tipoproductos')->insert([
        	'tipo_producto'=>'OTROS',
        ]);
    }
}
