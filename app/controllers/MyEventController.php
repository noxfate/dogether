<?php

class MyEventController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $event = Events::where('user_id','=',Auth::id())->get();
		$e1 = DB::select('select * from event where user_id = ? 
			and time_end >= current_timestamp
			order by time_end',array(Auth::id()));
		
		$e2 = DB::select('select * from event where user_id = ?
			and time_end < current_timestamp
			order by time_end;',array(Auth::id()));
		$event = array_merge($e1,$e2);

		// return $event;
		return View::make('index.event')->with('event',$event);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$pid = Input::get('proid');
		if ($pid == null){
			//  Create youself
			return View::make('index.addevent')->with('data',null)->with('pid',null);
		}else{
			//  Create From Promotion
			$data = Promotion::find($pid);
			return View::make('index.addevent')->with('data',null)->with('pid',$data);
		}
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Create New Event

		$evnt = new Events;
		$evnt->user_id = Auth::id();
		$evnt->name = Input::get('name');
		$evnt->size = Input::get('size');
		$evnt->time_start = Input::get('start');
		$evnt->time_end = Input::get('end');
		$evnt->detail = Input::get('detail');
		$evnt->location = Input::get('loca');
		$evnt->category = Input::get('cate');
		$evnt->save();

		$eid = DB::select('select event_id from event where event_id = (select max(event_id) from event)');
		$join = new JoinEvent;
		$join->event_id = $eid[0]->event_id;
		$join->user_id = Auth::id();
		$join->active = 1;
		// $join->status = 'owner';
		$join->save();		


		return View::make('success')->with('message','Add Event!');
		// return $join;
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
			'flag'=>'myown','friend'=>$friend));
		// return $friend;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return 'confirm';
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($usrid)
	{
		// set Status to Accept/Decline
		
		$eid = Input::get('eid');
		$ans = Input::get('answer');
		DB::update("update joinevent set status = ? where event_id = ? and user_id = ?"
			,array($ans,$eid,$usrid));

		return Redirect::to('/myevent/'.$eid);
		
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
