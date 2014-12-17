<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		$event = Events::all()->take(6);
		return View::make('index.index')->with('event',$event);
		// return $res;
	}

	public function showRegister()
	{
		$res = DB::select("select district from district");
		return View::make('index.register')->with('arr',$res);
		// return $res;
	}

	public function test()
	{
		return View::make('test2');
	}
}
