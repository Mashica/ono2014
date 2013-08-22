<?php

class UserController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function showIndex()
	{
		return View::make('index');
	}

	public function showUsers()
	{
		$users = User::all();
		return View::make('users')->with(array('users' => $users));
	}

	public function newUser()
	{
		return View::make('usernew');
	}

	public function createUser()
	{
		// validate post
		$date = Input::get('year') . '-' . Input::get('month') . '-' . Input::get('day');


		// do db insert for User
		$newuser = new User; 
		$newuser -> login = Input::get('login'); 
		$newuser -> email = Input::get('email'); 
		$newuser -> password = Hash::make(Input::get('password'));
		$newuser -> name = Input::get('name'); 
		$newuser -> lastname1 = Input::get('lastname1'); 
		$newuser -> lastname2 = Input::get('lastname2'); 
		$newuser -> birthday = $date; 
		$newuser -> tel = Input::get('tel'); 
		$newuser -> cel = Input::get('cel'); 
		$newuser -> address = Input::get('address'); 
		$newuser -> colonia = Input::get('colonia'); 
		$newuser -> city = Input::get('city'); 
		$newuser -> state = Input::get('state'); 
		$newuser -> country = Input::get('country');
		$newuser -> save();

		// redirect to User id page
		return Redirect::route('u_show', array($newuser->id));

	}


	public function showUser($id)
	{
		$userdata = User::find($id);

		return View::make('user')->with(array('userdata' => $userdata));
	}
	public function editUser($id)
	{
		$userdata = User::find($id);

		return View::make('useredit')->with(array('userdata' => $userdata));
	}
	public function updateUser($id)
	{
		// validate post

		// organize variables
		$date = Input::get('year') . '-' . Input::get('month') . '-' . Input::get('day');


		// do db insert for User
		$user = User::find(Input::get('id')); 
		$user -> login = Input::get('login'); 
		$user -> email = Input::get('email'); 
		$user -> password = Hash::make(Input::get('password'));
		$user -> name = Input::get('name'); 
		$user -> lastname1 = Input::get('lastname1'); 
		$user -> lastname2 = Input::get('lastname2'); 
		$user -> birthday = $date; 
		$user -> tel = Input::get('tel'); 
		$user -> cel = Input::get('cel'); 
		$user -> address = Input::get('address'); 
		$user -> colonia = Input::get('colonia'); 
		$user -> city = Input::get('city'); 
		$user -> state = Input::get('state'); 
		$user -> country = Input::get('country');
		$user -> save();

		// redirect to User id page
		return Redirect::route('u_show', array($user->id));

	}
	public function destroyUser($id)
	{
		User::destroy($id);
		return Redirect::to(route('u'));
	}



}