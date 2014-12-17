<?php

class AchievementController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Auth::check()){
			$id = Auth::id();
			// $id = 5;
			$prf = Profile::find($id);
			$r = $prf->rank;
			$rank = Rank::find($r);

			$ach = AchvRecord::whereRaw("user_id = ? and active = 1",array($id))->get();
			
			// Check Level of Ranking from Achievement
			$r_tmp = 0;
			foreach ($ach as $a) {
				if ($a->value >= 0 and $a->value <=2)
					$r_tmp = 0;
				elseif ($a->value > 2 and $a->value <=5)
					$r_tmp = 1;
				elseif ($a->value > 5 and $a->value <=7)
					$r_tmp = 2;
				elseif ($a->value > 8 and $a->value <10)
					$r_tmp = 3;
				else
					$r_tmp = 4;
			}
			$prf->rank = $r_tmp;
			$prf->save();

			$achv = DB::select('select * from achievement a, achv_record b
				where a.achv_id = b.achv_id and b.user_id = ?;',array($id));
			return View::make('index.achievement')->with('data',$prf)->with('achvment',$achv);
			// return $id*10;
		}
		return View::make('index.achvment');
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
		//
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
