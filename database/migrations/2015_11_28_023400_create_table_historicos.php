<?php

use Illuminate\Database\Migrations\Migration;

class CreateTableHistoricos extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('historicos', function ($table) {
				$table->bigIncrements('id');
				$table->longText('obs');
				$table->timestamp('data_envio');
				$table->bigInteger('plano_ensino_id')->unsigned();
				$table->timestamps();
			});

		Schema::table('historicos', function($table) {
			$table->foreign('plano_ensino_id')->references('id')->on('planos_ensino');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('historicos');
	}
}
