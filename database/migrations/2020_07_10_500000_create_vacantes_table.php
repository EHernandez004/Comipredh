<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacantes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');
            $table->string('area')->nullable();
            $table->string('descripcion')->nullable();
            $table->date('fecha');
            $table->float('sueldo_min')->nullable();
            $table->float('sueldo_max')->nullable();

            //FK
            $table->integer('id_empresa')->unsigned();
            $table->integer('id_user')->unsigned();

            $table->foreign('id_empresa')->references('id')->on('empresas');
            $table->foreign('id_user')->references('id')->on('users');

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
        Schema::dropIfExists('vacantes');
    }
}
