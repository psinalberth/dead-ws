<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Model\Perfil;

use App\Http\Requests\PerfilRequest;
use Illuminate\Http\Request;

class PerfilController extends Controller {
	
	protected $perfil = null;

	public function __construct(Perfil $perfil) {

		$this->perfil = $perfil;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		
		return $this->perfil->all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(PerfilRequest $request, Perfil $perfil) {
		
		$perfil->create($request->all());

		return $perfil;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		
		return $this->perfil->findOrFail($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		
		if (is_null($id)) {

			return;
		}

		$perfil = $this->show($id);

		if (!is_null($perfil)) {

			$perfil->update($request->all());
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		
		if (is_null($id)) {

			return -1;
		}

		$perfil = $this->show($id);

		if (!is_null($perfil)) {

			$perfil->delete();

			return $id;
		}

		return -1;
	}
}
