<?php

use Illuminate\Database\Migrations\Migration;

class CreateTableUnidades extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('unidades', function ($table) {
				$table->bigIncrements('id');
				$table->date('data_inicio');
				$table->date('data_fim');
				$table->bigInteger('plano_ensino_id')->unsigned();
				$table->timestamps();
			});

		Schema::table('unidades', function($table) {
			$table->foreign('plano_ensino_id')->references('id')->on('planos_ensino');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('unidades');
	}
}
