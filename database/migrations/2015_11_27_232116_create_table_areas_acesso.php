<?php

use Illuminate\Database\Migrations\Migration;

class CreateTableAreasAcesso extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('areas_acesso', function ($table) {
				$table->bigInteger('perfil_id')->unique()->unsigned();
				$table->bigInteger('transacao_id')->unique()->unsigned();
				$table->primary(['perfil_id', 'transacao_id']);
				$table->timestamps();
			});

		Schema::table('areas_acesso', function($table) {
			$table->foreign('perfil_id')->references('id')->on('perfis');
			$table->foreign('transacao_id')->references('id')->on('transacoes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('areas_acesso');
	}
}
