<?php

use Illuminate\Database\Migrations\Migration;

class CreateTableUsuarios extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('usuarios', function ($table) {
				$table->bigIncrements('id');
				$table->string('nome', 100);
				$table->string('endereco', 150);
				$table->string('formacao', 200);
				$table->string('cpf', 20);
				$table->string('rg', 20);
				$table->string('titulacao', 100);
				$table->string('telefone', 20);
				$table->bigInteger('perfil_id')->unsigned();
				$table->bigInteger('programa_id')->unsigned();
				$table->bigInteger('credencial_id')->unsigned();
				$table->timestamps();
			});

		Schema::table('usuarios', function($table) {
			$table->foreign('perfil_id')->references('id')->on('perfis');
			$table->foreign('programa_id')->references('id')->on('programas');
			$table->foreign('credencial_id')->references('id')->on('credenciais');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('usuarios');
	}
}
