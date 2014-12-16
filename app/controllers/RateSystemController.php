<?php

class RateSystemController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
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
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$event = Events::find($id);
		$friend = DB::select('select * from profile a, joinevent b where a.id in (
    		select user_id from joinevent where event_id = ?) and a.id != ? 
			and b.event_id = ? and b.user_id = a.id;',array($id, Auth::id(), $id));
		
		return View::make('index.eventdetail',array('data'=>$event,
			'flag'=>'rate','friend'=>$friend));
		// return View::make('index.eventdetail');
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
		$rater = Auth::id();
		$rated = $id;
		$eid = Input::get('eid');
		$num = Input::get('rating');

		$ratedb = new Rate;
		$ratedb->rater_id = $rater;
		$ratedb->rated_id = $rated;
		$ratedb->onevent_id = $eid;
		$ratedb->value = $num;
		// $ratedb->save();

		$avg = DB::select('select avg(value) as avg_rate from rate where rated_id = ?;'
			,array($id))[0]->avg_rate;
		$pro = Profile::find($rated);
		$pro->rating = $avg;
		$pro->save();

		return Redirect::to('/rate/'.$id);
		// return "Rate Function : Mr.".$rater." rate Mr.".$rated." in event ".$eid." for ".$num;
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
