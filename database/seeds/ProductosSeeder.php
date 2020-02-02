<?php

use Illuminate\Database\Seeder;
#semilla para los productos
class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
        	'tipoproducto_id'=>'1',
        	'nombre_producto'=>'PINO CLÁSICA',
        	'ingredientes_producto'=>'CARNE PICADA, CEBOLLA, ACEITUNA, HUEVO, ALIÑOS',
        	'precio_producto'=>'1400',
        	'estado_producto'=>'publicado',
        	'files'=>'http://127.0.0.1:8000/imagenes/foto3.PNG'

        ]);

        DB::table('productos')->insert([
        	'tipoproducto_id'=>'1',
        	'nombre_producto'=>'PINO MERKÉN',
        	'ingredientes_producto'=>'CARNE PICADA, CEBOLLA, ACEITUNA, HUEVO, MERKÉN',
        	'precio_producto'=>'1400',
        	'estado_producto'=>'publicado',
        	'files'=>'http://127.0.0.1:8000/imagenes/foto3.PNG'

        ]);

        DB::table('productos')->insert([
        	'tipoproducto_id'=>'1',
        	'nombre_producto'=>'PINO POLLO',
        	'ingredientes_producto'=>'CARNE PICADA, CEBOLLA, ACEITUNA, HUEVO, ALIÑOS',
        	'precio_producto'=>'1600',
        	'estado_producto'=>'publicado',
        	'files'=>'http://127.0.0.1:8000/imagenes/foto3.PNG'

        ]);

        DB::table('productos')->insert([
        	'tipoproducto_id'=>'1',
        	'nombre_producto'=>'NAPOLITANA',
        	'ingredientes_producto'=>'QUESO, TOMATE, ACEITUNA, JAMÓN, OREGANO',
        	'precio_producto'=>'1400',
        	'estado_producto'=>'publicado',
        	'files'=>'http://127.0.0.1:8000/imagenes/foto3.PNG'

        ]);

        DB::table('productos')->insert([
        	'tipoproducto_id'=>'1',
        	'nombre_producto'=>'QUESO CHAMPIÑON POLLO',
        	'ingredientes_producto'=>'QUESO, CHAMPIÑON, POLLO, CREMA, ALIÑOS',
        	'precio_producto'=>'1600',
        	'estado_producto'=>'publicado',
        	'files'=>'http://127.0.0.1:8000/imagenes/foto3.PNG'

        ]);

        DB::table('productos')->insert([
        	'tipoproducto_id'=>'2',
        	'nombre_producto'=>'PINO CLÁSICA',
        	'ingredientes_producto'=>'CARNE PICADA, CEBOLLA, ACEITUNA, HUEVO, ALIÑOS',
        	'precio_producto'=>'1400',
        	'estado_producto'=>'publicado',
        	'files'=>'http://127.0.0.1:8000/imagenes/foto3.PNG'

        ]);

        DB::table('productos')->insert([
        	'tipoproducto_id'=>'2',
        	'nombre_producto'=>'QUESO CAMARÓN',
        	'ingredientes_producto'=>'QUESO, CAMARONES, ORÉGANO,MANTEQUILLA',
        	'precio_producto'=>'1600',
        	'estado_producto'=>'publicado',
        	'files'=>'http://127.0.0.1:8000/imagenes/foto3.PNG'

        ]);

        DB::table('productos')->insert([
        	'tipoproducto_id'=>'2',
        	'nombre_producto'=>'QUESO CARNE',
        	'ingredientes_producto'=>'CARNE PICADA, QUESO, ALIÑOS',
        	'precio_producto'=>'1600',
        	'estado_producto'=>'publicado',
        	'files'=>'http://127.0.0.1:8000/imagenes/foto3.PNG'

        ]);

        DB::table('productos')->insert([
        	'tipoproducto_id'=>'3',
        	'nombre_producto'=>'ENSALADA CÉSAR',
        	'ingredientes_producto'=>'POLLO DESMENUZADO, CEBOLLA MORADA, ACEITUNA, LECHUGA, TOMATE',
        	'precio_producto'=>'3000',
        	'estado_producto'=>'publicado',
        	'files'=>'http://127.0.0.1:8000/imagenes/foto3.PNG'

        ]);

        DB::table('productos')->insert([
        	'tipoproducto_id'=>'3',
        	'nombre_producto'=>'PASTEL DE PAPAS',
        	'ingredientes_producto'=>'PAPAS, CEBOLLA, ACEITUNA, HUEVO, ALIÑOS, PINO DE CARNE',
        	'precio_producto'=>'3200',
        	'estado_producto'=>'publicado',
        	'files'=>'http://127.0.0.1:8000/imagenes/foto3.PNG'

        ]);

        DB::table('productos')->insert([
        	'tipoproducto_id'=>'3',
        	'nombre_producto'=>'ARROZ CON CARNE',
        	'ingredientes_producto'=>'BISTEC DE CARNE DE VACUNO, ARROZ GRANEADO, ENSALADA SURTIDA',
        	'precio_producto'=>'2700',
        	'estado_producto'=>'publicado',
        	'files'=>'http://127.0.0.1:8000/imagenes/foto3.PNG'

        ]);

        DB::table('productos')->insert([
        	'tipoproducto_id'=>'4',
        	'nombre_producto'=>'MASAS DE EMPANADAS DE HORNO',
        	'ingredientes_producto'=>'25 MASAS PARA HACER EMPANADAS DE HORNO',
        	'precio_producto'=>'3000',
        	'estado_producto'=>'publicado',
        	'files'=>'http://127.0.0.1:8000/imagenes/foto3.PNG'

        ]);

        DB::table('productos')->insert([
        	'tipoproducto_id'=>'4',
        	'nombre_producto'=>'MASAS DE EMPANADAS FRITAS',
        	'ingredientes_producto'=>'25 MASAS PARA HACER EMPANADAS FRITAS',
        	'precio_producto'=>'3000',
        	'estado_producto'=>'publicado',
        	'files'=>'http://127.0.0.1:8000/imagenes/foto3.PNG'

        ]);

        DB::table('productos')->insert([
        	'tipoproducto_id'=>'4',
        	'nombre_producto'=>'EMPANADITAS DE CÓCTEL DE QUESO',
        	'ingredientes_producto'=>'20 EMPANADITAS DE CÓCTEL PARA FREIR CON UN RELLENO DE QUESO GAUDA',
        	'precio_producto'=>'1400',
        	'estado_producto'=>'publicado',
        	'files'=>'http://127.0.0.1:8000/imagenes/foto3.PNG'

        ]);
    }
}
