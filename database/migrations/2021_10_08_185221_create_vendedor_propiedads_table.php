<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendedorPropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedor_propiedades', function (Blueprint $table) {
            $table->id();
            $table->integer('id_vendedor')->unsigned()->index('id_vendedor');
            $table->integer('id_propiedad')->unsigned()->index('id_tipo');
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
        Schema::dropIfExists('vendedor_propiedades');
    }
}
