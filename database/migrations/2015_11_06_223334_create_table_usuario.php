<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function($table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('endereco', 150);
            $table->string('formacao', 200);
            $table->string('cpf', 20);
            $table->string('rg', 20);
            $table->string('titulacao', 100);
            $table->string('email', 80);
            $table->string('telefone', 20);
            $table->string('login', 20);
            $table->string('senha', 64);
            $table->integer('perfil_id');
            $table->integer('programa_id');
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
        Schema::drop('usuario');
    }
}
