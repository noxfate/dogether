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

	// Update [Friend Maker] and [Crititizer] Achievement

	public function updateAcheivement($uid,$rid)
	{
		// [Crititizer]
		$rater = AchvRecord::whereRaw('user_id = ? and achv_id = 5 and active = 1',array($uid))->get();
		$val = $rater[0]->value;
		if ($val < 10){
			$rater[0]->value = $val+1;
			$rater[0]->save();
		}		
		

		// [Friend Maker]
		$rated = AchvRecord::whereRaw('user_id = ? and achv_id = 5 and active = 1',array($rid))->get();
		$val1 = $rated[0]->value;
		if ($val1 < 10){
			$rated[0]->value = $val1+1;
			$rated[0]->save();
		}		
		

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
		$ratedb->save();

		$avg = DB::select('select cast(avg(value) as decimal(10,2)) as avg_rate from rate where rated_id = ?;'
			,array($id))[0]->avg_rate;
		$pro = Profile::find($rated);
		$pro->rating = $avg;
		$pro->save();

		$this->updateAcheivement($rater,$rated);

		return Redirect::to('/rate/'.$eid);
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
