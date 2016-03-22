<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\DisciplinaRequest;
use App\Http\Model\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller {

	protected $disciplina = null;

	public function __construct(Disciplina $disciplina) {

		$this->disciplina = $disciplina;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->disciplina->all();
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
	public function store(DisciplinaRequest $request, Disciplina $disciplina)
	{
		$disciplina->create($request->all());

		return $disciplina;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->disciplina->findOrFail($id);
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

		$disciplina = $this->show($id);

		if (!is_null($disciplina)) {

			$disciplina->update($request->all());
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

		$disciplina = $this->show($id);

		if (!is_null($disciplina)) {

			$disciplina->delete();

			return $id;
		}

		return -1;
	}
}