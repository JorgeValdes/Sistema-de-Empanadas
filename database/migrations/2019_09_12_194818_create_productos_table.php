<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
#migracion para productos
class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('tipoproducto_id')->unsigned();
            $table->String('nombre_producto',255);
            $table->longText('ingredientes_producto');
            $table->integer('precio_producto');
            $table->enum('estado_producto',['publicado','noPublicado'])->default('publicado');
            $table->String('files');
            $table->timestamps();

            $table->foreign('tipoproducto_id')->references('id')->on('tipoproductos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
