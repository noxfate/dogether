@extends('index.master')
@section('content')
	<div class="destinations">
			<div class="destination-head">
				<div class="wrap">
					<h3>RANKING</h3>
				</div>
				<!---End-destinatiuons---->
				<!--Ranking-->
				<div class="find-place dfind-place">
					<div class="wrap">
							<div class="row ranking">
								<div class="col-md-3"><img src="assets/img/ranking/{{$data->rank}}.png" alt=""></div>
								<div class="col-md-9">
									<p class="ranking-head">{{ Rank::find($data->rank)->name }}</p>
									<p>{{ Rank::find($data->rank)->description }}</p>
								</div>
							</div>

						<div class="clear"> </div>
					</div>
				</div>
				<!----//End-ranking---->
			</div>

			<!-- achievement -->

			<div class="destination-places">
				<div class="wrap">
					<div class="destination-places-head">
						<h3>ACHIEVEMENT</h3>
					</div>
					@foreach($achvment as $a)
					<div class="row">
						@if ($a->value < 10)
							<div class="col-md-2"><img src="assets/img/achievement/unach.png" alt=""></div>
						@else
							<div class="col-md-2"><img src="assets/img/achievement/{{$a->achv_id}}.png" alt="{{ $a->name }}"></div>
						@endif	
						<div class="col-md-7">
							<p>{{$a->name}}</p>
							<p style="padding-left: 85%;">{{ $a->value }}/10</p>	
							<div class="progress">
							  <div class="progress-bar progress-bar-do" role="progressbar" aria-valuenow="{{ $a->value*10 }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $a->value*10 }}%;">
							  </div>
							</div>
							<p>{{ $a->description }}</p>
						</div>
					</div>
					<br>
					@endforeach


				</div>
			</div>
			<!-- end achievement -->
		</div>
	</div>
@stop




