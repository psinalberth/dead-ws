<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAreasAcesso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas_acesso', function($table) {
            $table->bigInteger('perfil_id')->unique();
            $table->bigInteger('transacao_id')->unique();
            $table->primary(['perfil_id', 'transacao_id']);
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
        Schema::drop('areas_acesso');
    }
}
