<?php

use Illuminate\Database\Migrations\Migration;

class CreateTableAnexos extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('anexos', function ($table) {
				$table->bigIncrements('id');
				$table->string('url', 120);
				$table->bigInteger('tipo_anexo_id')->unsigned();
				$table->bigInteger('conteudo_id')->unsigned();
				$table->timestamps();
			});

		Schema::table('anexos', function($table) {
			$table->foreign('tipo_anexo_id')->references('id')->on('tipos_anexo');
			$table->foreign('conteudo_id')->references('id')->on('conteudos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('anexos');
	}
}
