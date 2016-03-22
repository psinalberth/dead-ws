<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\TransacaoRequest;
use App\Http\Controllers\Controller;
use App\Http\Model\Transacao;
use Illuminate\Http\Request;

class TransacaoController extends Controller {

	protected $transacao = null;

	public function __construct(Transacao $transacao) {

		$this->transacao = null;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->transacao->all();
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
	public function store(TransacaoRequest $request, Transacao $transacao)
	{
		$transacao->create($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->transacao->findOrFail($id);
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

		$transacao = $this->show($id);

		if (!is_null($transacao)) {

			$transacao->update($request->all());
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

		$transacao = $this->show($id);

		if (!is_null($transacao)) {

			$transacao->delete();

			return $id;
		}

		return -1;
	}

}
