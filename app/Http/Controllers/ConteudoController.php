<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Conteudo;
use App\Http\Requests\ConteudoRequest;
use Illuminate\Http\Request;

class ConteudoController extends Controller {

	protected $conteudo = null;

	public function __construct(Conteudo $conteudo) {

		$this->conteudo = $conteudo;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->conteudo->all();
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
	public function store(ConteudoRequest $request, Conteudo $conteudo)
	{
		$conteudo->create($request->all());

		return $conteudo; 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->conteudo->findOrFail($id);
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

		$conteudo = $this->show($id);

		if (!is_null($conteudo)) {

			$conteudo->update($request->all());
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

		$conteudo = $this->show($id);

		if (!is_null($conteudo)) {

			$conteudo->delete();

			return $id;
		}

		return -1;
	}

}
