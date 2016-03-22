<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\UnidadeRequest;
use App\Http\Controllers\Controller;
use App\Http\Model\Unidade;
use Illuminate\Http\Request;

class UnidadeController extends Controller {

	protected $unidade = null;

	public function __construct(Unidade $unidade) {

		$this->unidade = $unidade;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->unidade->all();
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
	public function store(UnidadeRequest $request, Unidade $unidade) 
	{
		$unidade->create($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->unidade->findOrFail($id);
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

		$unidade = $this->show($id);

		if (!is_null($unidade)) {

			$unidade->update($request->all());
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

		$unidade = $this->show($id);

		if (!is_null($unidade)) {

			$unidade->delete();

			return $id;
		}

		return -1;
	}

}
