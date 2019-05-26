<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCfrClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfr_clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres', 65)->nullable();
            $table->string('apellido', 65)->nullable();
            $table->string('direccion', 200)->nullable();
            $table->string('telefono', 8)->nullable();
            $table->string('telefono1', 8)->nullable();
            $table->string('cmc', 65)->nullable();
            $table->string('mac', 13)->nullable();
            $table->string('contrato', 65)->nullable();
            $table->string('velocidad', 65)->nullable();
            $table->string('codigo', 65)->nullable();
            $table->string('observaciones', 65)->nullable();
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
        Schema::dropIfExists('cfr_clients');
    }
}
