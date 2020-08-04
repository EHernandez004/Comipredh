<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostulacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulacions', function (Blueprint $table) {
            $table->increments('id_post');
            $table->string('nombre');
            $table->date('fecha');
            $table->time('hora');

            //FK
            $table->integer('id_vacante')->unsigned();
            $table->integer('id_empresa')->unsigned();
            $table->integer('id_user')->unsigned();

            $table->foreign('id_vacante')->references('id_vacante')->on('vacantes');
            $table->foreign('id_empresa')->references('id_empresa')->on('empresas');
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
        Schema::dropIfExists('postulacions');
    }
}
