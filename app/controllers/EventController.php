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
				and event_id not in ( select event_id from joinevent where user_id = ?)",
				array($id,$id));
		}
		else{			
			$event = Events::all();
		}
		return View::make('index.event')->with('event',$event);
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
		$jevnt = new JoinEvent;
		$jevnt->user_id = Auth::id();
		$jevnt->event_id = $id;
		$jevnt->active = 1;
		$jevnt->save();
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
