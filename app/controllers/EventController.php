<?php

class EventController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Auth::check()){
			$id = Auth::id();
			$event = DB::select("select * from event where user_id != ? 
				and event_id not in ( select event_id from joinevent where user_id = ?)
				order by time_start,time_end;",
				array($id,$id));
		}
		else{			
			$event = DB::select('select * from event where time_end >= current_timestamp
				order by time_end;');
		}
		return View::make('index.event')->with('event',$event)->with('page','Events');
		// return DB::select("select count(*) as count from joinevent where event_id = 10")[0]->count;
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
		$aevent = array(Events::find($id));
		return View::make('index.event')->with('event',$aevent);
		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// Join Event Here
		$jevnt = new JoinEvent;
		$jevnt->user_id = Auth::id();
		$jevnt->event_id = $id;
		$jevnt->active = 1;
		$jevnt->status = 'pending';
		$jevnt->save();

		// [Event Hunter]
		$achv = AchvRecord::whereRaw('user_id = ? and achv_id = 1 and active = 1')->get();
		$val = $achv[0]->value;
		if ($val < 10){
			$achv[0]->value = $val+1;
			$achv[0]->save();
		}



		return View::make('success')->with('message',Auth::id().' '.$id);
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
