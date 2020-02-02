<?php

use Illuminate\Database\Seeder;
#semilla para los usuarios
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'=>'Administrador',
        	'email'=>'admin@admin.com',
        	'password'=>bcrypt('123456789'),
        	'tipo'=>'admin',

        ]);
    }
}
