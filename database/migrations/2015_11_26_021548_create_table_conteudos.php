<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableConteudos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conteudos', function($table) {
            $table->bigIncrements('id');
            $table->string('titulo', 140);
            $table->text('descricao');
            $table->bigInteger('unidade_id');
            $table->timestamp('data_envio');
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
        Schema::drop('conteudos');
    }
}
