<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedades', function (Blueprint $table) {
            $table->id();
            $table->integer('id_vendedor')->unsigned()->index('id_vendedor');
            $table->integer('id_tipo')->unsigned()->index('id_tipo')->nullable();
            $table->string('nombre', 255);
            $table->string('direccion', 1000);
            $table->text('descripcion')->nullable();
            $table->string('metros_cuadrados', 255)->nullable();
            $table->enum('estado', ['En Venta', 'Reservada', 'Vendida'])->default('En Venta');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propiedades');
    }
}
