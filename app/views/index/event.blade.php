@extends('index.master')


<!-- Joined Event is in Var [joined] -->
@section('content')

<div class="destinations">
	<div class="destination-head">
		<div class="wrap">
			<h3>{{ $page }}</h3> 
			<!-- @if (Auth::check())
				<a href="event"><h3>All Events</h3></a>
				<a href="myevent"><h3>My Event</h3></a>
				<a href="joinevent"><h3>Joined Event</h3></a>
			@else
				<h3>Events</h3>
			@endif -->
		</div>
		<!---End-destinatiuons---->
		<div class="find-place dfind-place">
			<div class="wrap">
				<div class="p-h">
					<span>FIND YOUR</span>
					<label>ACTIVITIES</label>
				</div>
				<!---strat-date-piker---->
				  <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
				  <script>
				  $(function() {
				    $( "#datepicker" ).datepicker();
				  });
				  </script>
				<!---/End-date-piker---->
				<div class="p-ww">
					<form>
						<span> Where</span>
						<input class="dest" type="text" value="Distination" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Distination';}">
						<span> When</span>
						<input class="date" id="datepicker" type="text" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
						<input type="submit" value="Search" />
					</form>

				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<!----//End-find-place---->
	</div>
	<div class="criuse-main">
		<!-- Add Button -->
					<div class="wrap">

						<div class="criuse-head1" style="padding-left: 87%;">
							@if (Auth::check())
								<a class='btn' href="myevent/create" class="button">Add Event</a>
							@endif
						</div>
						<div class="criuse-grids">
							@foreach($event as $e)
								<div class="criuse-grid">
									<div class="criuse-grid-head">
										<div class="criuse-img">
											<div class="criuse-pic">
												<img src="images/glass.jpg" title="criuse-name" />
											</div>
											<div class="criuse-pic-info">
													<div class="criuse-pic-info-top">
														<div class="criuse-pic-info-top-weather">
															<p>{{ $e->time_start }}<span> </span></p>
														</div>
														<div class="criuse-pic-info-top-place-name">

															<h2><label>{{ DB::select("select count(*) as count from joinevent where event_id = ?",array( $e->event_id ))[0]->count }}/{{ $e->size }} People</label>
																<span>{{ $e->name }}</span>
															</h2>
														</div>
													</div>
												
												<div class="criuse-pic-info-price">
													<p><img src="{{ Profile::find($e->user_id)->picture }}" class="img-circle" style="height: 50px; width: 50px">
													<span>By {{ Profile::find($e->user_id)->firstname }} {{ Profile::find($e->user_id)->lastname }}</span></p>
												</div>
												<div class="detail-pro">
													Catagory : {{ $e->category }}
												</div>
												<div class="detail-pro">
													{{ $e->detail }}
												</div>
											</div>
										</div>
									</div>
									<div class="criuse-info">
										<div class="criuse-info-left">
											<ul>
												@if (!Auth::check())
												@elseif ($page === 'My Events')
													@if (Auth::id() === $e->user_id)
														@if ( $e->time_end >= date('Y-m-d H:i:s'))
															<!-- In time Event! -->
															<li><a class="c-hotel" href="myevent/{{$e->event_id}}"><span> </span>MANAGE</a></li>
														@else
															<!-- Expired Event! -->
															<li><a class="c-hotel" href="rate/{{$e->event_id}}"><span> </span>RATE NOW</a></li>
														@endif
													@elseif ( DB::select("select count(*) as count from joinevent where event_id = ?",array( $e->event_id ))[0]->count >= $e->size)
															<!-- Join people is more than Size, The Join button will disappear -->
															<li><span> </span>PARTY FULL</li>
													@endif
												@elseif ($page === 'Events')
													<li><a class="c-hotel" href="#" data-toggle="modal" data-target="#joinModal"><span> </span>JOIN</a></li>

													<!-- Join Modal -->
													<div class="modal fade" id="joinModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													  <div class="modal-dialog">
													    <div class="modal-content">
													      <div class="modal-header">
													        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
													        <h4 class="modal-title" id="myModalLabel">Joining Event</h4>
													      </div>
													      <div class="modal-body">
													        Do you want to join this Events?
													      </div>
													      <div class="modal-footer">
													      	<a href="/event/{{ $e->event_id }}/edit"type="button" class="btn btn-primary">Join</a>
													        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
													      </div>
													    </div>
													  </div>
													</div>
													<!--end modal-->
													
												@elseif ($page === 'Joined Events')
													@if ( $e->time_end >= date('Y-m-d H:i:s'))
														<!-- In time Event! -->
														<li><a class="c-hotel" href="/joinevent/{{ $e->event_id }}"><span> </span>DETAIL</a></li>
													@else
														<!-- Expired Event! -->
														<li><a class="c-hotel" href="rate/{{$e->event_id}}"><span> </span>RATE NOW</a></li>
													@endif
												@endif
												<div class="clear"> </div>
											</ul>
										</div>
										<div class="criuse-info-right">
											<ul>

												<!-- <li><a class="btn" href="myevent/{{$e->event_id}}">Manage</a></li> -->
												<li><a class="c-face" href="#"><span> </span> </a></li>
												<li><a class="c-twit" href="#"><span> </span> </a></li>
												<!-- <li><a class="c-tub" href="#"><span> </span> </a></li>
												<li><a class="c-pin" href="#"><span> </span> </a></li> -->
											</ul>
										</div>
										<div class="clear"> </div>

									</div>
									<script>
										function confirmJoin(id){
											if (confirm("Do you want to Join this Event?") == true){
												window.location.href = '/event/'+id+'/edit';
											}	
										}
									</script>
								@endforeach

							<!-- Social Media Part!

							<!-- <div class="criuse-grid">
								<div class="criuse-grid-head">
									<div class="criuse-img">
										<div class="criuse-pic">
											<img src="images/s1.jpg" title="criuse-name" />
										</div>
										<div class="criuse-pic-info">
												<div class="criuse-pic-info-top">
													<div class="criuse-pic-info-top-weather">
														<p>33<label>o</label><i>c</i><span> </span></p>
													</div>
													<div class="criuse-pic-info-top-place-name">
														<h2><label>Spain</label><span>BARCELONA</span></h2>
													</div>
												</div>
												<div class="criuse-pic-info-price">
													<p><span>Starting Form</span> <h4>250 $</h4></p>
												</div>
										</div>
									</div>
									<div class="criuse-info">
										<div class="criuse-info-left">
											<ul>
												<li><a class="c-hotel" href="#"><span> </span>6 Nights VIp/Luurious hotel </a></li>
												<li><a class="c-air" href="#"><span> </span> Return Air Ticket</a></li>
												<li><a class="c-fast" href="#"><span> </span> Complimentry beark fast</a></li>
												<li><a class="c-car" href="#"><span> </span> Car for All transfers</a></li>
												<div class="clear"> </div>
											</ul>
										</div>
										<div class="criuse-info-right">
											<ul>
												<li><a class="c-face" href="#"><span> </span> </a></li>
												<li><a class="c-twit" href="#"><span> </span> </a></li>
												<li><a class="c-tub" href="#"><span> </span> </a></li>
												<li><a class="c-pin" href="#"><span> </span> </a></li>
											</ul>
										</div>
										<div class="clear"> </div>
									</div>
								</div>
								<div class="criuse-grid-info">
									<h1><a href="#">Lorem Ipsum is typesetting industry</a></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
									<a class="btn" href="#">DeTails</a>
								</div>
							</div>
							<div class="criuse-grid">
								<div class="criuse-grid-head">
									<div class="criuse-img">
										<div class="criuse-pic">
											<img src="images/s1.jpg" title="criuse-name" />
										</div>
										<div class="criuse-pic-info">
												<div class="criuse-pic-info-top">
													<div class="criuse-pic-info-top-weather">
														<p>33<label>o</label><i>c</i><span> </span></p>
													</div>
													<div class="criuse-pic-info-top-place-name">
														<h2><label>Spain</label><span>BARCELONA</span></h2>
													</div>
												</div>
												<div class="criuse-pic-info-price">
													<p><span>Starting Form</span> <h4>250 $</h4></p>
												</div>
										</div>
									</div>
									<div class="criuse-info">
										<div class="criuse-info-left">
											<ul>
												<li><a class="c-hotel" href="#"><span> </span>6 Nights VIp/Luurious hotel </a></li>
												<li><a class="c-air" href="#"><span> </span> Return Air Ticket</a></li>
												<li><a class="c-fast" href="#"><span> </span> Complimentry beark fast</a></li>
												<li><a class="c-car" href="#"><span> </span> Car for All transfers</a></li>
												<div class="clear"> </div>
											</ul>
										</div>
										<div class="criuse-info-right">
											<ul>
												<li><a class="c-face" href="#"><span> </span> </a></li>
												<li><a class="c-twit" href="#"><span> </span> </a></li>
												<li><a class="c-tub" href="#"><span> </span> </a></li>
												<li><a class="c-pin" href="#"><span> </span> </a></li>
											</ul>
										</div>
										<div class="clear"> </div>
									</div>
								</div>
								<div class="criuse-grid-info">
									<h1><a href="#">Lorem Ipsum is typesetting industry</a></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
									<a class="btn" href="#">DeTails</a>
								</div>
							</div> -->
						</div>
						<div class="criuse-grid-load">
							<a href="#">Loading More</a>
						</div>
					</div>
				</div>
				
</div>

@stop