<?php

class RaceController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$races = Race::all();
		return View::make('races')->with(array('races' => $races));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('racenew');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate post

		// organize variables


		// do db update
		$db = new Race;
		$db -> racetype = Input::get('racetype'); 
		$db -> title = Input::get('title'); 
		$db -> seriesordinal = Input::get('seriesordinal');
		$db -> seriesyear = Input::get('seriesyear'); 
		$db -> fecha = Input::get('fecha'); 
		$db -> starttime = Input::get('starttime');
		$db -> venue = Input::get('venue'); 
		$db -> city = Input::get('city'); 
		$db -> state = Input::get('state'); 
		$db -> inscripciones = Input::get('inscripciones');
		$db -> inscripciones_dir = Input::get('inscripciones_dir');
		$db -> inscripciones_tel1 = Input::get('inscripciones_tel1');
		$db -> inscripciones_tel2 = Input::get('inscripciones_tel2');
		$db -> ispublished = Input::get('ispublished');
		$db -> save();

		// redirect to id page
		return Redirect::route('race_show', array($db->id));

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$racedata = Race::find($id);
		return View::make('race')->with(array('racedata' => $racedata));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$racedata = Race::find($id);
		return View::make('raceedit')->with(array('racedata' => $racedata));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate post

		// organize variables


		// do db update
		$db = Race::find($id); 
		$db -> racetype = Input::get('racetype'); 
		$db -> title = Input::get('title'); 
		$db -> seriesordinal = Input::get('seriesordinal');
		$db -> seriesyear = Input::get('seriesyear'); 
		$db -> fecha = Input::get('fecha'); 
		$db -> starttime = Input::get('starttime');
		$db -> venue = Input::get('venue'); 
		$db -> city = Input::get('city'); 
		$db -> state = Input::get('state'); 
		$db -> inscripciones = Input::get('inscripciones');
		$db -> inscripciones_dir = Input::get('inscripciones_dir');
		$db -> inscripciones_tel1 = Input::get('inscripciones_tel1');
		$db -> inscripciones_tel2 = Input::get('inscripciones_tel2');
		$db -> ispublished = Input::get('ispublished');
		$db -> save();

		// redirect to id page
		return Redirect::route('race_show', array($db->id));

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Race::destroy($id);
		return Redirect::to(route('races'));

	}

}