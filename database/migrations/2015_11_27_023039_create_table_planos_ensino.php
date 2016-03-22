<?php

use Illuminate\Database\Migrations\Migration;

class CreateTablePlanosEnsino extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('planos_ensino', function ($table) {
				$table->bigIncrements('id');
				$table->integer('ano');
				$table->enum('status', ['Deferido', 'Indeferido']);
				$table->bigInteger('usuario_id')->unsigned();
				$table->bigInteger('semestre_id')->unsigned();
				$table->bigInteger('disciplina_id')->unsigned();
				$table->timestamps();
			});

		Schema::table('planos_ensino', function($table) {
			$table->foreign('usuario_id')->references('id')->on('usuarios');
			$table->foreign('semestre_id')->references('id')->on('semestres');
			$table->foreign('disciplina_id')->references('id')->on('disciplinas');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('planos_ensino');
	}
}
