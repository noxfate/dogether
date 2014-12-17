<?php

class PromotionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cate = Input::get('categ');
		$sort = Input::get('sort');

		// select only time_end >= current_timestamp
		if ( ($cate == '' or $cate == 'all') and ($sort == '' or $sort == 'asc')){
			$data = Promotion::whereRaw('time_end >= current_date and active = 1 order by time_end')->get();
		}elseif ( $cate != '' and $sort == 'desc'){
			$data = Promotion::whereRaw('time_end >= current_date and active = 1 
				and category = ? order by time_end desc;',array($cate))->get();
		}elseif ($cate != '' and ($sort == '' or $sort == 'asc')){
			$data = Promotion::whereRaw('time_end >= current_date and active = 1 
				and category = ? order by time_end;',array($cate))->get();
		}else{
			$data = Promotion::whereRaw('time_end >= current_date and active = 1 
				order by time_end desc;',array($cate))->get();
		}

		return View::make('index.promotion')->with('promo',$data);
		// return $data->get();
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
		$data = Promotion::find($id);
		return View::make('index.prodetail')->with('promo',$data);

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
