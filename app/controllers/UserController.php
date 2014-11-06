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
		//
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

	public function uploadDB($file,$role)
	{
		if (Input::hasFile('pic'))
		{
			if ($file->isValid())
			{
				
				$path = '/assets/img/'.$role;
				$fne = $role.'-'.$file->getClientOriginalName();
				
				$file->move(public_path().$path, $fne);
				return $path.'/'.$fne;
			}
			return '/assets/img/default.jpg';
		}
		return Profile::find(Auth::id())->picture;
	}

	public function login()
	{

		if (!Auth::check())
		{
			$userdata = array(
				"email" => Input::get('email'),
				"password" => Input::get('pwd')
				);

			if (Auth::attempt($userdata))
			{
				return Redirect::to('/');
			}
			return View::make('error')->with('message','Wrong Username or Password');
			
		}
		else
		{
			return Redirect::to('/');
		}
	}

	public function logout()
	{
		if (Auth::check())
		{
			Auth::logout();
		}
		return Redirect::to('/');
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
		if (Auth::check())
		{
			$info = Profile::find($id);
			return View::make('index.profile')->with('id',$info);	
		}
		return Redirect::to('/');
	}



	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pro = Profile::find($id);
		$pro->firstname = Input::get('fname');
		$pro->lastname = Input::get('lname');
		$pro->telephone = Input::get('tel');
		$pro->picture = $this->uploadDB(Input::file('pic'), $pro->role);

		$pro->save();

		return View::make('index.profile')->with('id',$pro); 
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
