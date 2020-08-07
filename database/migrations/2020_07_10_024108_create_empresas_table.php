<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('rfc');
            $table->Integer('cp');
            $table->string('calle');
            $table->string('n_ext');
            $table->string('n_int')->nullable($value = true);
            $table->string('colonia');
            $table->string('municipio');
            $table->string('estado');
            $table->string('correo')->unique();
            $table->boolean('acceso')->default(false);
            $table->string('contrasena');
            
            //FK
            $table->integer('id_user')->unsigned();
            
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
        Schema::dropIfExists('empresas');
    }
}
