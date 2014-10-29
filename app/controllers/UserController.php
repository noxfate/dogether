<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('register');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return Profile::all();
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		// Didn't check the input

		// $pro = new Profile;

		// if (Input::get('type') == 'owner')
		// {
		// 	// $pro->firstname = Input::get('fname');
		// 	// $pro->lastname = Input::get('lname');
		// 	$pro->name = Input::get('sname');
		// 	$pro->email = Input::get('email');
		// 	$pro->password = Hash::make(Input::get('pwd'));
		// 	$pro->telephone = Input::get('tel');
		// 	// $pro->gender = Input::get('sex');
		// 	// $pro->birthday = Input::get('dob');
		// 	// $pro->picture = '-';
		// 	$pro->address = Input::get('addr');
		// 	$pro->category = Input::get('categ');
		// 	$pro->description = Input::get('desc');
		// 	$pro->role = Input::get('type');
		// }
		// else
		// {

		// 	$pro->firstname = Input::get('fname');
		// 	$pro->lastname = Input::get('lname');
		// 	$pro->email = Input::get('email');
		// 	$pro->password = Hash::make(Input::get('pwd'));
		// 	$pro->telephone = Input::get('tel');
		// 	$pro->gender = Input::get('sex');
		// 	$pro->birthday = Input::get('dob');
		// 	$pro->role = Input::get('type');
		// }

		// $pro->save();

		return Redirect::back();
	}

	public function uploadFile($file,$role)
	{

		// generate file Name
		if (Input::hasFile('pic') and Input::file('pic')->isValid())
		{
			if ($role == 'customer')
				return Input::file('pic')->move(app_path().'\assets\img\customer','test.jpg';
			else
				return Input::file('pic')->move(app_path().'\assets\img\owner','test.jpg';
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
