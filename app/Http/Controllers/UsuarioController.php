<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\UsuarioRequest;
use App\Http\Controllers\Controller;
use App\Http\Model\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller {


	protected $usuario = null;

	public function __construct(Usuario $usuario) {

		$this->usuario = $usuario;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->usuario->all();
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
	public function store(UsuarioRequest $request, Usuario $usuario)
	{
		$usuario->create($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->usuario->findOrFail($id);
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

		$usuario = $this->show($id);

		if (!is_null($usuario)) {

			$usuario->update($request->all());
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

		$usuario = $this->show($id);

		if (!is_null($usuario)) {

			$usuario->delete();

			return $id;
		}

		return -1;
	}

}
