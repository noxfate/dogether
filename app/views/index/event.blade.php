
@extends('index.master')

@section('content')
	<div class="destinations">
			<div class="destination-head">
				<div class="wrap">
					<h3>{{ $page }}</h3>
				</div>
				<!---End-destinatiuons---->
				<div class="find-place dfind-place">
					<div class="wrap">
						<div class="p-h">
							<span>FIND YOUR</span>
							<label>PROMOTION</label>
						</div>
						<!---strat-date-piker---->
						  <script src="js/jquery-ui.js"></script>
						  <script>
						  $(function() {
						    $( "#datepicker" ).datepicker();
						  });
						  $(function() {
						    $( "#datepicker2" ).datepicker();
						  });
						  </script>
						<!---/End-date-piker---->
						<div class="p-ww">
							@if (!Auth::check())
								<form action="/event" method="GET">
							@elseif ($page === 'My Events')
								<form action="/myevent" method="GET">
							@elseif ($page === 'Events')
								<form action="/event" method="GET">
							@elseif ($page === 'Joined Events')
								<form action="/joinevent" method="GET">
							@endif
							<span> Category</span>
							<select name="categ">
								<option value="all">All</option>
								<option value="food">Food</option>
								<option value="fashion">Fashion</option>
								<option value="health">Health</option>
								<option value="entertainment">Entertainment</option>
								<option value="seminar">Seminar</option>
								<option value="other">Other</option>
							</select>
							<!-- <input class="dest" type="text" value="Destination" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Destination';}"> -->
							<span>  Start </span>
							<input name="start" class="date" id="datepicker" type="text" placeholder="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
							<span>  To </span>
							<input name="to" class="date" id="datepicker2" type="text" placeholder="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">

							<input type="submit" value="Search" />
						</form>

						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----//End-find-place---->
			</div>
			<div class="destination-places">
				<div class="wrap">
					<div class="criuse-head1" style="padding-left: 87%;">
						@if (Auth::check())
							<a class='btn' href="myevent/create" class="button">Add Event</a>
						@endif
					</div>
					<div class="row">
					<div class="row">
						<!-- วางแท็กนี้ในส่วนหัวหรือก่อนแท็กปิดของเนื้อความ -->
						<script src="https://apis.google.com/js/platform.js" async defer>
						  {lang: 'th'}
						</script>

						<!-- วางแท็กนี้ในตำแหน่งที่คุณต้องการให้ ปุ่ม +1 ปรากฏ -->
						<div class="g-plusone"></div><br>

						<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://localhost:8000/event" data-text="Let's see what we've got here! --->" data-hashtags="sktnb">Tweet</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						
						<div id="fb-root"></div>
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1572541586290686&version=v2.0";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
							<div class="fb-like" data-href="http://goo.gl/38NzXC" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

					</div>
						<!--Start loop here-->
						@foreach($event as $e)
							<div class="col-md-1 img-event"> <img src="{{ Profile::find($e->user_id)->picture }}" alt="" class="img-circle"></div>
							<div class="col-md-5 wrap-event">
								<div class='content-event ename'><img class='arrow' src="images/popa.png" alt="">{{ $e->name }}</div>
								<div class='content-event eby'>By {{ Profile::find($e->user_id)->firstname }} {{ Profile::find($e->user_id)->lastname }}</div>
								<div class='content-event edetail'>
									<p>Start : {{ date("H:i d/m/Y",strtotime($e->time_start)) }}</p>
									<p>End : {{ date("H:i d/m/Y",strtotime($e->time_end)) }}</p>
									<p>People : {{ DB::select("select count(*) as count from joinevent where event_id = ?",array( $e->event_id ))[0]->count }}/{{ $e->size }} </p>
									<p>Location : {{ Profile::find($e->user_id)->address }}, {{ Profile::find($e->user_id)->district }}</p>
									<p>Catagory : {{ $e->category }}</p>
									<p>Detail : {{ $e->detail }}</p>
								</div>
								@if (!Auth::check())
								@elseif ($page === 'My Events')
									@if (Auth::id() === $e->user_id)
										@if ( $e->time_end >= date('Y-m-d H:i:s'))
											<!-- In time Event! -->
											<a href="/myevent/{{$e->event_id}}" class="btn-event btn btn-default">Manage</a>
										@else
											<!-- Expired Event! -->
											<a href="/rate/{{$e->event_id}}" class="btn-event btn btn-default">RATE NOW</a>
										@endif
									@elseif ( DB::select("select count(*) as count from joinevent where event_id = ?",array( $e->event_id ))[0]->count >= $e->size)
										<!-- Join people is more than Size, The Join button will disappear -->
										<button class="btn-event btn btn-default" disabled>PARTY FULL</button>
									@endif
								@elseif ($page === 'Events')

									<a class="btn-event btn btn-default" href="#" data-toggle="modal" data-target="#joinModal">JOIN</a>

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
										<a href="/joinevent/{{ $e->event_id }}" class="btn-event btn btn-default">DETAIL</a>
									@else
										<!-- Expired Event! -->
										<a href="/rate/{{$e->event_id}}" class="btn-event btn btn-default">RATE NOW</a>
									@endif
								@endif
							</div>
						@endforeach
						<!-- end loop here -->
					</div>
				</div>
			</div>
			<!---start-destinations-pagenation---->
				<div class="destination-pagenate">
					<div class="wrap">
						<ul>
							<li><a class="d-next" href="#">LOAding More</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
				</div>
			<!---//End-destinations-pagenation---->

@stop