<?php

class JoinEventController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cate = Input::get('categ');
		$sort = Input::get('sort');
		
		$id = Auth::id();
		if ( ($cate == '' or $cate == 'all') and ($sort == '' or $sort == 'asc')){
			$join = DB::select("select * from event where event_id IN 
				(select event_id from joinevent where 
				user_id = ? and status != 'decline') 
				and event_id NOT IN (select event_id from event where user_id = ?)
				order by time_end;"
				,array($id,$id));


		}elseif ( $cate != '' and $sort == 'desc'){
			$join = DB::select("select * from event where event_id IN 
				(select event_id from joinevent where 
				user_id = ? and status != 'decline') 
				and event_id NOT IN (select event_id from event where user_id = ?)
				and category = ?
				order by time_end desc;"
				,array($id,$id,$cate));


		}elseif ($cate != '' and ($sort == '' or $sort == 'asc')){
			$join = DB::select("select * from event where event_id IN 
				(select event_id from joinevent where 
				user_id = ? and status != 'decline') 
				and event_id NOT IN (select event_id from event where user_id = ?)
				and category = ?
				order by time_end;"
				,array($id,$id,$cate));

		}else{
			$join = DB::select("select * from event where event_id IN 
				(select event_id from joinevent where 
				user_id = ? and status != 'decline') 
				and event_id NOT IN (select event_id from event where user_id = ?
				order by time_end desc;"
				,array($id,$id));

		}

		return View::make('index.event')->with('event',$join)->with('page','Joined Events');
		// return $join;
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
		$data = Events::find($id);
		$friend = DB::select('select * from profile where id in (
    		select user_id from joinevent where event_id = ?) and id != ?',array($id, Auth::id()));
		
		return View::make('index.eventdetail',array('data'=>$data,
			'flag'=>'join','friend'=>$friend));

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
