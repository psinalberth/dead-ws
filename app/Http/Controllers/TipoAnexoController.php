<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\TipoAnexoRequest;
use App\Http\Controllers\Controller;
use App\Http\Model\TipoAnexo;
use Illuminate\Http\Request;

class TipoAnexoController extends Controller {


	protected $tipo = null;

	public function __construct(TipoAnexo $tipo) {

		$this->tipo = $tipo;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->tipo->all();
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
	public function store(TipoAnexoRequest $request, TipoAnexo $tipo)
	{
		$tipo->create($request->all());

		return $tipo;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->tipo->findOrFail($id);
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

		$tipo = $this->show($id);

		if (!is_null($tipo)) {

			$tipo->update($request->all());
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

		$tipo = $this->show($id);

		if (!is_null($tipo)) {

			$tipo->delete();

			return $id;
		}

		return -1;
	}

}
