<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\OfertaCursoRequest;
use App\Http\Controllers\Controller;
use App\Http\Model\OfertaCurso;
use Illuminate\Http\Request;

class OfertaCursoController extends Controller {

	protected $oferta = null;

	public function __construct(OfertaCurso $oferta) {

		$this->oferta = $oferta;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->oferta->all();
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
	public function store(OfertaCursoRequest $request, OfertaCurso $oferta)
	{
		$oferta->create($request->all());

		return $oferta;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->oferta->findOrFail($id);
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

		$oferta = $this->show($id);

		if (!is_null($oferta)) {

			$oferta->update($request->all());
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

		$oferta = $this->show($id);

		if (!is_null($oferta)) {

			$oferta->delete();

			return $id;
		}

		return -1;
	}

}
