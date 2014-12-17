<?php

class EventController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cate = Input::get('categ');
		$sort = Input::get('sort');

		if (Auth::check()){
			$id = Auth::id();

			if ( ($cate == '' or $cate == 'all') and ($sort == '' or $sort == 'asc')){
				$event = DB::select("select * from event where user_id != ? 
					and event_id not in ( select event_id from joinevent where user_id = ?)
					order by time_end;",
					array($id,$id));
			}elseif ( $cate != '' and $sort == 'desc'){
				$event = DB::select("select * from event where user_id != ? 
					and event_id not in ( select event_id from joinevent where user_id = ?)
					and category = ?
					order by time_end desc;",
					array($id,$id,$cate));
			}elseif ($cate != '' and ($sort == '' or $sort == 'asc')){
				$event = DB::select("select * from event where user_id != ? 
					and event_id not in ( select event_id from joinevent where user_id = ?)
					order by time_end;",
					array($id,$id,$cate));
			}else{
				$event = DB::select("select * from event where user_id != ? 
					and event_id not in ( select event_id from joinevent where user_id = ?)
					order by time_end desc;",
					array($id,$id,$cate));
			}
		}
			
		else{

			if ( ($cate == '' or $cate == 'all') and ($sort == '' or $sort == 'asc')){
				$event = DB::select('select * from event where time_end >= current_timestamp
					order by time_end;');
			}elseif ( $cate != '' and $sort == 'desc'){
				$event = DB::select('select * from event where time_end >= current_timestamp
					and category = ?
					order by time_end desc;',array($cate));
			}elseif ($cate != '' and ($sort == '' or $sort == 'asc')){
				$event = DB::select('select * from event where time_end >= current_timestamp
					and category = ?
					order by time_end;',array($cate));
			}else{
				$event = DB::select('select * from event where time_end >= current_timestamp
					order by time_end desc;');
			}

		}
		return View::make('index.event')->with('event',$event)->with('page','Events');
		// return $ctg;
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
		$achv = AchvRecord::whereRaw('user_id = ? and achv_id = 1 and active = 1',array(Auth::id()))->get();
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
