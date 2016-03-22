<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\AreaAcessoRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Model\AreaAcesso;

class AreaAcessoController extends Controller {

	protected $area = null;

	public function __construct(AreaAcesso $area) {

		$this->area = $area;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->area->all();
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
	public function store(AreaAcessoRequest $request, AreaAcesso $area)
	{
		$area->create($request->all());

		return $area;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->area->findOrFail($id);
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

		$area = $this->show($id);

		if (!is_null($area)) {

			$area->update($request->all());
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

		$area = $this->show($id);

		if (!is_null($area)) {

			$area->delete();

			return $id;
		}

		return -1;
	}

}
