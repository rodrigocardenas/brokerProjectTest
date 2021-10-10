<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_visitas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_comprador')->unsigned()->index('id_vendedor');
            $table->integer('id_propiedad')->unsigned()->index('id_tipo');
            $table->enum('estado', ['Pendiente', 'Aprobada', 'Terminada', 'Cancelada'])->default('Pendiente');
            $table->dateTime('fecha_solicitada');
            $table->dateTime('fecha_visita')->nullable();
            $table->text('descripcion')->nullable();
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
        Schema::dropIfExists('solicitud_visitas');
    }
}
