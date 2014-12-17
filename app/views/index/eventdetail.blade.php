
@extends('index.master')

<!-- Category didn't check Income Data TT^TT -->

@section('content')
	<div class="destinations">
			<div class="destination-head">
				<div class="wrap">
					<h3>Event Detail</h3>
				</div>
				<!---End-destinatiuons---->
				<div class="find-place dfind-place">
					<div class="wrap">
						<div class="p-h">
							<span>FIND YOUR</span>
							<label>Event</label>
						</div>

						<div class="p-ww">
							<form>
								<span> Catagory</span>
								<select name="" id="">
									<option value=""></option>
									<option value=""></option>
								</select>
								<span> Sort</span>
								<select name="" id="">
									<option value=""></option>
									<option value=""></option>
								</select>
								<input type="submit" value="Search" />
							</form>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----//End-find-place---->
			</div>
			<div class="criuse-main">
				<div class="wrap">
					<!-- <div class="criuse-head1">
						<h3>{{ $data->name }}</h3>
					</div> -->
					<div class="criuse-grids">
						<div class="criuse-grid">
							<div class="criuse-grid-head">
								<div class="criuse-img">
									<div class="criuse-pic">
										<img src="../images/glass.jpg" title="criuse-name" />
									</div>
									<div class="criuse-pic-info">
											<div class="criuse-pic-info-top">
												<div class="criuse-pic-info-top-weather">
													<p>Start {{ $data->time_start }}<span> </span></p>
													<p>End {{ $data->time_end }}<span> </span></p>
												</div>
												<div class="criuse-pic-info-top-place-name">

													<h2><label>{{ $data->size }} People</label>
														<span>{{ $data->name }}</span>
													</h2>

												</div>
											</div>
											<div class="criuse-pic-info-price">
												<p><span>By {{ Profile::find($data->user_id)->firstname }} {{ Profile::find($data->user_id)->lastname }}</span></p>
											</div>
											<div class="detail-pro">
												Catagory : {{ $data->category }}
											</div>
											<div class="detail-pro">
												{{ $data->detail }}
											</div>
									</div>
								</div>
								<div class="criuse-info">
									<div class="criuse-info-left">
										<ul>
											<li>Location: {{$data->location}}</li>
										</ul>
									</div> 
								<!-- 	<div class="criuse-info-right">
										<ul>
											<li><a class='btn' href="myevent/create" class="button">Leave</a></li>
										</ul>
									</div> -->
									<div class="clear">
								</div>
							</div>
						</div>
						<br>
						<h1>Companion</h1>
					</div>
				</div>
				<!--Accept/Decline Person-->
				<div class='row'>

				@foreach($friend as $f)
					<div class="col-md-2"><img src="{{ $f->picture }}" class="img-circle"></div>
					<div class="col-md-3">
						Name: {{ $f->firstname }} {{ $f->lastname }}<br>
						Gender : {{ $f->gender }}<br>
						Date of Birth : {{ $f->birthday }}<br>
						E-mail : {{ $f->email }}<br>
						Telephone : {{ $f->telephone }}<br>
						Rate : {{ $f->rating }} / 5.0<br>

						<!--chk if owner can accept/decline-->
						@if ($flag == 'myown')
							
							<!--pending-->
							@if ($f->status == 'pending')
								{{ Form::open(array('route'=>array('myevent.update',$f->id),'method'=>'put')) }}
									<input type="hidden" name="eid" value="{{ $data->event_id }}">
									<input type="radio" name="answer" value="accept"> Accept 
									<input type="radio" name="answer" value="decline"> Decline<br>
									<input type="submit" value="answer"> 
								{{ Form::close() }}
							<!-- <img src="../images/chk.png" alt="">
							<img src="../images/can-active.png" alt=""> -->

							@elseif ($f->status == 'accept' or $f->status == 'confirm')
								<img src="../images/chk-active.png" alt="">
							@elseif ($f->status == 'decline')
								<img src="../images/can-active.png" alt="">
							@endif

						@elseif ($flag == 'join')

						@elseif ($flag == 'rate')
							<!-- Rating Part -->
							@if (count(Rate::whereRaw('rated_id = ? and onevent_id = ?',array($f->id,$data->event_id))->get()) < 1 )
								{{ Form::open(array('route'=>array('rate.update',$f->id),'method'=>'put')) }}
									<input type="number" name="rating" value="0" min='0' max='5'><br>
									<input type="hidden" name="eid" value="{{ $data->event_id }}">
									<input type="submit" value="Rate!">
								{{ Form::close() }}
							@else
								<!-- Already Rate -->
							@endif
						@endif


					</div>
				@endforeach

				@if ($flag == 'myown')
					<div class="col-md-12">
						<div class="criuse-grid-load">
							<a href="#">Confirm</a>
						</div>
					</div>
				@endif

				</div>
				
			</div>
		</div>
	</div>
@stop