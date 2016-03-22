<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

/*header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, PATCH');
header('Access-Control-Allow-Headers: Content-Type, Accept, Authorization, X-Requested-With');*/

Route::get('/', function () {
		return view('welcome');
	});

Route::group(['middleware' => 'cors', 'prefix' => 'api'], function () {

		//Autenticação
		Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
		Route::post('authenticate', 'AuthenticateController@authenticate');

		//Anexos

		Route::group(['prefix' => 'anexos'], function () {

				Route::get('', ['uses' => 'AnexoController@index']);

				Route::get('{id}', ['uses' => 'AnexoController@show']);

				Route::post('', ['uses' => 'AnexoController@store']);

				Route::patch('{id}', ['uses' => 'AnexoController@update']);

				Route::put('{id}', ['uses' => 'AnexoController@update']);

				Route::delete('{id}', ['uses' => 'AnexoController@destroy']);
			});

		//Areas de Acesso

		Route::group(['prefix' => 'areas_acesso'], function () {

				Route::get('', ['uses' => 'AreaAcessoController@index']);

				Route::get('{id}', ['uses' => 'AreaAcessoController@show']);

				Route::post('', ['uses' => 'AreaAcessoController@store']);

				Route::patch('{id}', ['uses' => 'AreaAcessoController@update']);

				Route::put('{id}', ['uses' => 'AreaAcessoController@update']);

				Route::delete('{id}', ['uses' => 'AreaAcessoController@destroy']);
			});

		//Conteudos

		Route::group(['prefix' => 'conteudos'], function () {

				Route::get('', ['uses' => 'ConteudoController@index']);

				Route::get('{id}', ['uses' => 'ConteudoController@show']);

				Route::post('', ['uses' => 'ConteudoController@store']);

				Route::patch('{id}', ['uses' => 'ConteudoController@update']);

				Route::put('{id}', ['uses' => 'ConteudoController@update']);

				Route::delete('{id}', ['uses' => 'ConteudoController@destroy']);
			});

		//Credenciais

		Route::group(['prefix' => 'credenciais'], function () {

				Route::get('', ['uses' => 'CredencialController@index']);

				Route::get('{id}', ['uses' => 'CredencialController@show']);

				Route::post('', ['uses' => 'CredencialController@store']);

				Route::patch('{id}', ['uses' => 'CredencialController@update']);

				Route::put('{id}', ['uses' => 'CredencialController@update']);

				Route::delete('{id}', ['uses' => 'CredencialController@destroy']);
			});

		//Cursos

		Route::group(['prefix' => 'cursos'], function () {

				Route::get('', ['uses' => 'CursoController@index']);

				Route::get('{id}', ['uses' => 'CursoController@show']);

				Route::post('', ['uses' => 'CursoController@store']);

				Route::patch('{id}', ['uses' => 'CursoController@update']);

				Route::put('{id}', ['uses' => 'CursoController@update']);

				Route::delete('{id}', ['uses' => 'CursoController@destroy']);
			});

		//Disciplinas

		Route::group(['prefix' => 'disciplinas'], function () {

				Route::get('', ['uses' => 'DisciplinaController@index']);

				Route::get('{id}', ['uses' => 'DisciplinaController@show']);

				Route::post('', ['uses' => 'DisciplinaController@store']);

				Route::patch('{id}', ['uses' => 'DisciplinaController@update']);

				Route::put('{id}', ['uses' => 'DisciplinaController@update']);

				Route::delete('{id}', ['uses' => 'DisciplinaController@destroy']);
			});

		//Historicos

		Route::group(['prefix' => 'historicos'], function () {

				Route::get('', ['uses' => 'HistoricoController@index']);

				Route::get('{id}', ['uses' => 'HistoricoController@show']);

				Route::post('', ['uses' => 'HistoricoController@store']);

				Route::patch('{id}', ['uses' => 'HistoricoController@update']);

				Route::put('{id}', ['uses' => 'HistoricoController@update']);

				Route::delete('{id}', ['uses' => 'HistoricoController@destroy']);
			});

		//Ofertas de Curso

		Route::group(['prefix' => 'ofertas_curso'], function () {

				Route::get('', ['uses' => 'OfertaCursoController@index']);

				Route::get('{id}', ['uses' => 'OfertaCursoController@show']);

				Route::post('', ['uses' => 'OfertaCursoController@store']);

				Route::patch('{id}', ['uses' => 'OfertaCursoController@update']);

				Route::put('{id}', ['uses' => 'OfertaCursoController@update']);

				Route::delete('{id}', ['uses' => 'OfertaCursoController@destroy']);
			});

		//Ofertas de Cursos por Semestre

		Route::group(['prefix' => 'ofertas_semestre'], function () {

				Route::get('', ['uses' => 'OfertaSemestreController@index']);

				Route::get('{id}', ['uses' => 'OfertaSemestreController@show']);

				Route::post('', ['uses' => 'OfertaSemestreController@store']);

				Route::patch('{id}', ['uses' => 'OfertaSemestreController@update']);

				Route::put('{id}', ['uses' => 'OfertaSemestreController@update']);

				Route::delete('{id}', ['uses' => 'OfertaSemestreController@destroy']);
			});

		//Perfis

		Route::group(['prefix' => 'perfis'], function () {

				Route::get('', ['uses' => 'PerfilController@index']);

				Route::get('{id}', ['uses' => 'PerfilController@show']);

				Route::post('', ['uses' => 'PerfilController@store']);

				Route::patch('{id}', ['uses' => 'PerfilController@update']);

				Route::put('{id}', ['uses' => 'PerfilController@update']);

				Route::delete('{id}', ['uses' => 'PerfilController@destroy']);
			});

		//Planos de Ensino

		Route::group(['prefix' => 'planos_ensino'], function () {

				Route::get('', ['uses' => 'PlanoEnsinoController@index']);

				Route::get('{id}', ['uses' => 'PlanoEnsinoController@show']);

				Route::post('', ['uses' => 'PlanoEnsinoController@store']);

				Route::patch('{id}', ['uses' => 'PlanoEnsinoController@update']);

				Route::put('{id}', ['uses' => 'PlanoEnsinoController@update']);

				Route::delete('{id}', ['uses' => 'PlanoEnsinoController@destroy']);
			});

		//Programas

		Route::group(['prefix' => 'programas'], function () {

				Route::get('', ['uses' => 'ProgramaController@index']);

				Route::get('{id}', ['uses' => 'ProgramaController@show']);

				Route::post('', ['uses' => 'ProgramaController@store']);

				Route::patch('{id}', ['uses' => 'ProgramaController@update']);

				Route::put('{id}', ['uses' => 'ProgramaController@update']);

				Route::delete('{id}', ['uses' => 'ProgramaController@destroy']);
			});

		//Semestres

		Route::group(['prefix' => 'semestres'], function () {

				Route::get('', ['uses' => 'SemestreController@index']);

				Route::get('{id}', ['uses' => 'SemestreController@show']);

				Route::post('', ['uses' => 'SemestreController@store']);

				Route::patch('{id}', ['uses' => 'SemestreController@update']);

				Route::put('{id}', ['uses' => 'SemestreController@update']);

				Route::delete('{id}', ['uses' => 'SemestreController@destroy']);
			});

		//Tipos de Anexo

		Route::group(['prefix' => 'tipos_anexo'], function () {

				Route::get('', ['uses' => 'TipoAnexoController@index']);

				Route::get('{id}', ['uses' => 'TipoAnexoController@show']);

				Route::post('', ['uses' => 'TipoAnexoController@store']);

				Route::patch('{id}', ['uses' => 'TipoAnexoController@update']);

				Route::put('{id}', ['uses' => 'TipoAnexoController@update']);

				Route::delete('{id}', ['uses' => 'TipoAnexoController@destroy']);
			});

		//Transacoes

		Route::group(['prefix' => 'transacoes'], function () {

				Route::get('', ['uses' => 'TransacaoController@index']);

				Route::get('{id}', ['uses' => 'TransacaoController@show']);

				Route::post('', ['uses' => 'TransacaoController@store']);

				Route::patch('{id}', ['uses' => 'TransacaoController@update']);

				Route::put('{id}', ['uses' => 'TransacaoController@update']);

				Route::delete('{id}', ['uses' => 'TransacaoController@destroy']);
			});

		//Unidades

		Route::group(['prefix' => 'unidades'], function () {

				Route::get('', ['uses' => 'UnidadeController@index']);

				Route::get('{id}', ['uses' => 'UnidadeController@show']);

				Route::post('', ['uses' => 'UnidadeController@store']);

				Route::patch('{id}', ['uses' => 'UnidadeController@update']);

				Route::put('{id}', ['uses' => 'UnidadeController@update']);

				Route::delete('{id}', ['uses' => 'UnidadeController@destroy']);
			});

		//Usuarios

		Route::group(['prefix' => 'usuarios'], function () {

				Route::get('', ['uses' => 'UsuarioController@index']);

				Route::get('{id}', ['uses' => 'UsuarioController@show']);

				Route::post('', ['uses' => 'UsuarioController@store']);

				Route::patch('{id}', ['uses' => 'UsuarioController@update']);

				Route::put('{id}', ['uses' => 'UsuarioController@update']);

				Route::delete('{id}', ['uses' => 'UsuarioController@destroy']);
			});

	});
