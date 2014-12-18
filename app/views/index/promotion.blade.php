
@extends('index.master')

@section('content')
	<div class="destinations">
			<div class="destination-head">
				<div class="wrap">
					<h3>PROMOTION</h3>
				</div>
				<!---End-destinatiuons---->
				<div class="find-place dfind-place">
					<div class="wrap">
						<div class="p-h">
							<span style="height:60px;"></span>
						</div>
						
						<div class="clear"> </div>
					</div>
				</div>
				<!----//End-find-place---->
			</div>
			<div class="destination-places">
				<div class="wrap">
					<div class="destination-places-head">
						<h3>LATEST PROMOTION</h3>
					</div>
					<div class="destination-places-grids">
						@foreach($promo as $p)
						<div class="destination-places-grid" onclick="location.href='/promotion/{{ $p->promotion_id }}';">
							<div class="dest-place-pic main_box user_style4" data-hipop="two-horizontal">
								<img src="{{ $p->picture }}" style="width:480px; height:250px;" title="place-name" />
							</div>
							<div class="dest-place-opt">
								<ul class="dest-place-opt-fea">
									<li><a class="hot" href="#"><span> </span> By {{ Profile::find($p->user_id)->name }}</a></li>
									<!-- <li><a class="plain" href="#"><span> </span> Air ticket</a></li>
									<li><a class="Breakfast" href="#"><span> </span> Break Fast</a></li> -->
									<div class="clear"> </div>
								</ul>
								<ul class="dest-place-opt-cast" style="height:80px;">
									<li><a class="d-place" href="#">{{ $p->name }}</a></li>
									<!-- <li><a class="d-price" href="#">Starting Form 250$</a></li> -->
									<div class="clear"> </div>
								</ul>
							</div>
						</div>
						@endforeach
						
						<div class="clear"> </div>
					</div>
				</div>
			</div>
			<!---start-destinations-pagenation---->
				<div class="destination-pagenate">
					<div class="wrap">
						<ul>
							<li></li>
							<div class="clear"> </div>
						</ul>
					</div>
				</div>
			<!---//End-destinations-pagenation---->

<!-- 
		<form action="/myevent/create" method="GET">
			<a class="btn" href="/promotion/{{$p->promotion_id}}">Detail</a> 
			<input type="hidden" name="proid" value="{{ $p->promotion_id }}">
			<input type="submit" class="btn" style="color:red" value="Create Event">
		</form>
 -->
@stop