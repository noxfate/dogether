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

	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (Input::get('type') == 'owner'){

		}
		else{

			$pro = new Profile;

			$pro->firstname = Input::get('fname');
			$pro->lastname = Input::get('lname');
			// $pro->name = '-';
			$pro->email = Input::get('email');
			$pro->password = Hash::make(Input::get('pwd'));
			$pro->telephone = Input::get('tel');
			$pro->gender = Input::get('sex');
			$pro->birthday = Input::get('dob');
			// $pro->picture = '-';
			// $pro->address = '-';
			// $pro->category = '-';
			// $pro->description = '-';
			$pro->role = Input::get('type');

			$pro->save();

		}


	// 	// DB::insert("insert into account (username,password,role) values (?,?,'customer')",array($usr,$pwd));
	// 	$result = DB::select("select * from account");

		return "Success!!";
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
