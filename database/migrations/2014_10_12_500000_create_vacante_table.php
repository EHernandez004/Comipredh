<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacante', function (Blueprint $table) {
            $table->increments('id_vacante');
            $table->string('nombre');
            $table->string('area')->nullable($value = true);
            $table->string('descripcion')->nullable($value = true);
            $table->date('fecha');
            $table->double('sueldo_min')->nullable($value = true);
            $table->double('sueldo_max')->nullable($value = true);
            $table->integer('empresa_id_empresa');
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
        Schema::dropIfExists('vacante');
    }
}
