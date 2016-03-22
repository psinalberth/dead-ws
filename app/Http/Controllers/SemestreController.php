<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\SemestreRequest;
use App\Http\Controllers\Controller;
use App\Http\Model\Semestre;
use Illuminate\Http\Request;

class SemestreController extends Controller {

	protected $semestre = null;

	public function __construct(Semestre $semestre) {

		$this->semestre = $semestre;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->semestre->all();
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
	public function store(SemestreRequest $request, Semestre $semestre)
	{
		$semestre->create($request->all());

		return $semestre;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->semestre->findOrFail($id);
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

		$semestre = $this->show($id);

		if (!is_null($semestre)) {

			$semestre->update($request->all());
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

		$semestre = $this->show($id);

		if (!is_null($semestre)) {

			$semestre->delete();

			return $id;
		}

		return -1;
	}

}
