<?php

class MyEventController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$event = Events::where('user_id','=',Auth::id())->get();

		// Didn't know where to display.
		
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
			return View::make('index.eventdetail')->with('data',null)->with('pid',null);
		}else{
			$data = Promotion::find($pid);
			return View::make('index.eventdetail')->with('data',null)->with('pid',$data);
		}
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
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

		// Update [ joinevent ] table , Also

		return View::make('success')->with('message','Add Event!');
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
		$friend = DB::select('select * from profile where id in (
    		select user_id from joinevent where event_id = ?) and id != ?',array($id, Auth::id()));
		
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
		// return $id;
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// Event Can't be update!!

		// $evnt = Events::find($id);
		// $evnt->user_id = Auth::id();
		// $evnt->name = Input::get('name');
		// $evnt->size = Input::get('size');
		// $evnt->time_start = Input::get('start');
		// $evnt->time_end = Input::get('end');
		// $evnt->detail = Input::get('detail');
		// $evnt->location = Input::get('loca');
		// $evnt->category = Input::get('cate');
		// $evnt->save();
		// return View::make('success')->with('message','Event '.$id.' is Edited');
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
