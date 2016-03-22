<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CredencialRequest;
use App\Http\Model\Credencial;
use Illuminate\Http\Request;
use Hash;

class CredencialController extends Controller {

	protected $credencial = null;

	public function __construct(Credencial $credencial) {

		$this->credencial = $credencial;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->credencial->all();
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
	public function store(CredencialRequest $request, Credencial $credencial)
	{
		$request['password'] = Hash::make($request['password']);
		$credencial->create($request->all());

		return $credencial;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->credencial->findOrFail($id);
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

		$credencial = $this->show($id);

		if (!is_null($credencial)) {

			$request['password'] = Hash::make($request['password']);
			$credencial->update($request->all());
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

		$credencial = $this->show($id);

		if (!is_null($credencial)) {

			$credencial->delete();

			return $credencial;
		}
	}
}
