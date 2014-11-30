<?php

namespace Orbis\Http\Controllers;

use Orbis\Http\Requests;
use Orbis\Models\Player;
use Orbis\Http\Controllers\Controller;

/**
 * @Resource("player", only={"index", "show"})
 */
class PlayerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Player::all()->toJson();
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
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
     *
     * @Where({"id": "^\d+$"})
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Player::find($id)->toJson();
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
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
