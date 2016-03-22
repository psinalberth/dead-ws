<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\PlanoEnsinoRequest;
use App\Http\Controllers\Controller;
use App\Http\Model\PlanoEnsino;
use Illuminate\Http\Request;

class PlanoEnsinoController extends Controller {

	protected $plano = null;

	public function __construct(PlanoEnsino $plano) {

		$this->plano = $plano;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->plano->all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PlanoEnsinoRequest $request, PlanoEnsino $plano)
	{
		$plano->create($request->all());

		return $plano;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->plano->findOrFail($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if (is_null($id)) {

			return;
		}

		$plano = $this->show($id);

		if (!is_null($plano)) {

			$plano->update($request->all());
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if (is_null($id)) {

			return -1;
		}		

		$plano = $this->show($id);

		if (!is_null($plano)) {

			$plano->delete();

			return $id;
		} 

		return -1;
	}
}