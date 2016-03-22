<?php

use Illuminate\Database\Migrations\Migration;

class CreateTableOfertasCurso extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('ofertas_curso', function ($table) {
				$table->bigIncrements('id');
				$table->bigInteger('programa_id')->unsigned();
				$table->bigInteger('curso_id')->unsigned();
				$table->timestamps();
			});

		Schema::table('ofertas_curso', function($table) {
			$table->foreign('programa_id')->references('id')->on('programas');
			$table->foreign('curso_id')->references('id')->on('cursos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('ofertas_curso');
	}
}
