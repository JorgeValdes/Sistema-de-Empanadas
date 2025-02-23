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
        // $this->call(UsersTableSeeder::class);
        $this->call(TiposSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(DireccionesSeeder::class);
        $this->call(HorariosSeeder::class);
        $this->call(ProductosSeeder::class);
    }
}
