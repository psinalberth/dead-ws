<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePlanosEnsino extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planos_ensino', function($table) {
            $table->bigIncrements('id');
            $table->integer('ano');
            $table->enum('status', ['Deferido', 'Indeferido']);
            $table->bigInteger('usuario_id');
            $table->bigInteger('semestre_id');
            $table->bigInteger('disciplina_id');
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
        Schema::drop('planos_ensino');
    }
}
