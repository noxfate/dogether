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
		else{
			if (Auth::check()){
				return Profile::find(Auth::id())->picture;
			}
			return '/assets/img/default.jpg'; 
		}
		
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
				if (Profile::find(Auth::id())->role == 'customer')
					return Redirect::to('/');
				return Redirect::to('/owner');

			}
			return View::make('error')->with('message','Wrong Username or Password');			
		}
		return Redirect::to('/');

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
		$count = Profile::where('email','=',Input::get('email'))->count();
		if ($count == 0)
		{
			$pro = new Profile;

			if (Input::get('type') == 'owner')
			{
				$pro->name = Input::get('sname');
				$pro->email = Input::get('email');
				if (Input::get('pwd') != Input::get('repwd'))
				{
					return Redirect::to('error')->with('message','The password does not match!');
				}
				else
				{
					$pro->password = Hash::make(Input::get('pwd'));
				}
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
				if (Input::get('pwd') != Input::get('repwd'))
				{
					return View::make('error')->with('message','The password does not match!');
				}
				else
				{
					$pro->password = Hash::make(Input::get('pwd'));
				}
				$pro->telephone = Input::get('tel');
				$pro->gender = Input::get('sex');
				$pro->birthday = Input::get('dob');
				$pro->role = Input::get('type');
				$pro->picture = $this->uploadDB(Input::file('pic'), Input::get('type'));
			}

			$pro->save();
			return View::make('success')->with('arr',Profile::all());
		}
		return View::make('error')->with('message','E-mail is already existed!!');
		

		
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
		if (Auth::check()){
			$pro = Profile::find($id);
			if (Input::get('hid') == 'profile'){
				// Change Profile
				if ($pro->role == 'owner'){
					$pro->name = Input::get('sname');
					$pro->address = Input::get('addr');
					$pro->telephone = Input::get('tel');
					$pro->district = Input::get('district');
					$pro->province = Input::get('prov');
					$pro->description = Input::get('desc');
					$pro->category = Input::get('categ');
					$pro->picture = $this->uploadDB(Input::file('pic'), $pro->role);
				}else{
					$pro->firstname = Input::get('fname');
					$pro->lastname = Input::get('lname');
					$pro->telephone = Input::get('tel');
					$pro->picture = $this->uploadDB(Input::file('pic'), $pro->role);
				}
			}else{
				// Change Password
				if (password_verify(Input::get('oldpwd'),$pro->password)){
					if (Input::get('pwd') == Input::get('repwd'))
						$pro->password = Hash::make(Input::get('pwd'));
					else
						return View::make('error')->with('message','Password does not match!');
				}else
					return View::make('error')->with('message','Old Password is incorrect!');
			}
			$pro->save();

			return Redirect::to("/profile/$id"); 

		}
		return Redirect::to('/');
		
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
