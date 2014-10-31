<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	private static $file;

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

	public function uploadDB($file,$role)
	{
		if ($file->isValid() and Input::hasFile('pic')){
			$path = '/assets/img/'.$role;
			$fne = $role.'-'.$file->getClientOriginalName();
			
			$file->move(public_path().$path, $fne);
			return $path.'/'.$fne;
		}
		return 'Fail!';
	}

	public function login()
	{


		// $count = Profile::where('email','=',Input::get('email'))->count();
		// $result = Profile::where('email','=',Input::get('email'))->get();
		// if ($count == 1)
		// {
		// 	if (Hash::check(Input::get('pwd'), $result[0]->password))
		// 	{
		// 		Session::put('id',$result[0]->id);
		// 		return Session::get('id');
		// 		// return "<br>Login Success!";
		// 	}
		// }
		if (!Auth::check())
		{
			$userdata = array(
				"email" => Input::get('email'),
				"password" => Input::get('pwd')
				);

			if (Auth::attempt($userdata))
			{
				return "Authen Success!";
			}
			return "Authen Failed!";
			
		}
		else
		{
			return var_dump(Auth::user());
		}
	}

	public function store()
	{
		// Didn't check the input

		$pro = new Profile;

		if (Input::get('type') == 'owner')
		{
			$pro->name = Input::get('sname');
			$pro->email = Input::get('email');
			$pro->password = Hash::make(Input::get('pwd'));
			$pro->telephone = Input::get('tel');
			$pro->picture = $this->uploadDB(Input::file('pic'), Input::get('type'));
			$pro->address = Input::get('addr');
			$pro->district = Input::get('district');
			$pro->province = Input::get('prov');
		 //	$pro->post = Input::get('post')
			$pro->category = Input::get('categ');
			$pro->description = Input::get('desc');
			$pro->role = Input::get('type');
		}
		else
		{
			$pro->firstname = Input::get('fname');
			$pro->lastname = Input::get('lname');
			$pro->email = Input::get('email');
			$pro->password = Hash::make(Input::get('pwd'));
			$pro->telephone = Input::get('tel');
			$pro->gender = Input::get('sex');
			$pro->birthday = Input::get('dob');
			$pro->role = Input::get('type');
			$pro->picture = $this->uploadDB(Input::file('pic'), Input::get('type'));
		}

		$pro->save();

		return View::make('test')->with('arr',Profile::all());
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
