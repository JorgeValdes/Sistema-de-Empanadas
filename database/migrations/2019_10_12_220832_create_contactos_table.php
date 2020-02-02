<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
#migracion para contactos
class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('nombre_cliente');
            $table->String('telefono_cliente');
            $table->String('email_cliente');
            $table->enum('motivo',['sugerencia','reclamo','evento','otro'])->default('otro');
            $table->longText('cuerpo_texto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactos');
    }
}
