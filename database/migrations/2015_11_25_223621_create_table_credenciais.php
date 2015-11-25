<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCredenciais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credenciais', function($table) {
            $table->bigIncrements('id');
            $table->string('email', 80)->unique();
            $table->string('login', 20)->unique();
            $table->string('senha', 64);
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
        Schema::drop('credenciais');
    }
}
