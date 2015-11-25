<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function($table) {
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->string('endereco', 150);
            $table->string('formacao', 200);
            $table->string('cpf', 20);
            $table->string('rg', 20);
            $table->string('titulacao', 100);
            $table->string('telefone', 20);
            $table->bigInteger('perfil_id');
            $table->bigInteger('programa_id');
            $table->bigInteger('credencial_id');
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
        Schema::drop('usuarios');
    }
}
