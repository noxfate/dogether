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
		$event = Events::whereRaw('time_end >= current_timestamp')->take(6)->get();
		$promo = Promotion::whereRaw('time_end >= current_timestamp')->take(6)->get();
		return View::make('index.index')->with('event',$event)
			->with('promo',$promo);
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
