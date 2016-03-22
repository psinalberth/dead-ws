<?php

use Illuminate\Database\Migrations\Migration;

class CreateTableOfertasSemestre extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('ofertas_semestre', function ($table) {
				$table->bigIncrements('id');
				$table->bigInteger('semestre_id')->unsigned();
				$table->bigInteger('curso_id')->unsigned();
				$table->timestamps();
			});

		Schema::table('ofertas_semestre', function($table) {
			$table->foreign('semestre_id')->references('id')->on('semestres');
			$table->foreign('curso_id')->references('id')->on('cursos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('ofertas_semestre');
	}
}
