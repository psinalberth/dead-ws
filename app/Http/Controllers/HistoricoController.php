<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\HistoricoRequest;
use App\Http\Controllers\Controller;
use App\Http\Model\Historico;
use Illuminate\Http\Request;

class HistoricoController extends Controller {

	protected $historico = null;

	public function __construct(Historico $historico) {

		$this->historico = $historico;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->historico->all();
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
	public function store(HistoricoRequest $request, Historico $historico)
	{
		$historico->create($request->all());

		return $historico;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->historico->findOrFail($id);
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
	public function update(Request $request, $id)
	{
		if (is_null($id)) {

			return;
		}

		$historico = $this->show($id);

		if (!is_null($historico)) {

			$historico->update($request->all());
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

		$historico = $this->show($id);

		if (!is_null($historico)) {

			$historico->delete();

			return $id;
		}

		return -1;
	}
}
