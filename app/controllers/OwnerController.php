<?php

class OwnerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('owner.profile')->with('id',Profile::find(Auth::id()));
		//return View::make('owner.index')->with('id',Profile::find(Auth::id()));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('owner.create'); 
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// One-to-Many :: http://laravel.com/docs/4.2/eloquent#one-to-many
		// return Promotion::all();

		// Need to Check for Start and End Time

		$prom = new Promotion;
		$prom->name = Input::get('proname');
		$prom->user_id = Auth::id();
		$prom->time_start =  Input::get('start');
		$prom->time_end = Input::get('end');
		$prom->detail = Input::get('desc');
		$prom->picture = $this->uploadPic(Input::file('pic'));
		$prom->active = 1;
		$prom->save();
		return View::make('owner.create');

	}


	public function uploadPic($file)
	{
		if (Input::hasFile('pic'))
		{
			if ($file->isValid())
			{
				$path = '/assets/img/promotion';
				$fne = Input::get('start').Auth::id().'_'.Input::get('proname');
				
				$file->move(public_path().$path, $fne);
				return $path.'/'.$fne;
			}
			return '/assets/img/promotion/default.png'; 
		}
		else{
			return '/assets/img/promotion/default.png'; 
		}
		
	}

	public function changepassword()
	{
		return View::make('owner.changepass');
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
		if (Input::get('flag') == 'pwd'){
			$pro = Profile::find($id);
			if (password_verify(Input::get('oldpwd'),$pro->password)){
				if (Input::get('pwd') == Input::get('repwd'))
					$pro->password = Hash::make(Input::get('pwd'));
				else
					return View::make('error')->with('message','Password does not match!');
			}else{
				return View::make('error')->with('message','Old Password is incorrect!');
			}
			$pro->save();
			return Redirect::to('chgepwd');
		}
		return "ChangePass";
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
