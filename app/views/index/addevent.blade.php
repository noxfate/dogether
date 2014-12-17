@extends('index.master')

@section('content')
	<div class="destinations">
	<div class="destination-head">
		<div class="wrap">
			<h3>Add Events</h3> 
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
		<div class="wrap">
			<div class="criuse-head1">
				<h3>ADD YOUR OWN EVENT</h3>
			</div>
			<div class='row'>
			@if ($pid != null)
			
			<form action="/myevent" method="POST">
			  
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Event Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="name" class="form-control" ><br>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label" class="form-control">Size</label>
			    <div class="col-sm-10">
			      <input type="text" name="size" class="form-control">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Event Start</label>
			    <div class="col-sm-10">
			      <input type="date" name="start" class="form-control">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Event End</label>
			    <div class="col-sm-10">
			      <input type="date" name="end" class="form-control">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label" class="form-control">Catagory</label>
			    <div class="col-sm-10">

    			<input type="radio" name="cate" value="food"> Food <br>
				<input type="radio" name="cate" value="fashion"> Fashion<br>
				<input type="radio" name="cate" value="health"> Health<br>
				<input type="radio" name="cate" value="entertainment"> Entertainment<br>
				<input type="radio" name="cate" value="seminar"> Seminar<br>
				<input type="radio" name="cate" value="other"> Other <br>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Detail</label>
			    <div class="col-sm-10">
			      <textarea name="detail" row="3" class="form-control">{{ $pid->detail }}</textarea><br>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Location</label>
			    <div class="col-sm-10">
			      <textarea name="loca" row="3" class="form-control"></textarea>
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Save</button>
			    </div>
			  </div>
			</form>

			
			@else
			<form action="/myevent" method="POST">

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Event Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="name" class="form-control" ><br>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label" class="form-control">Size</label>
			    <div class="col-sm-10">
			      <input type="number" name="size" class="form-control">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Event Start</label>
			    <div class="col-sm-10">
			      <input type="date" name="start" class="form-control">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Event End</label>
			    <div class="col-sm-10">
			      <input type="date" name="end" class="form-control">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label" class="form-control">Catagory</label>
			    <div class="col-sm-10">

    			<input type="radio" name="cate" value="food"> Food <br>
				<input type="radio" name="cate" value="fashion"> Fashion<br>
				<input type="radio" name="cate" value="health"> Health<br>
				<input type="radio" name="cate" value="entertainment"> Entertainment<br>
				<input type="radio" name="cate" value="seminar"> Seminar<br>
				<input type="radio" name="cate" value="other"> Other <br>

			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Detail</label>
			    <div class="col-sm-10">
			      <textarea name="detail" row="3" class="form-control"></textarea><br>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Location</label>
			    <div class="col-sm-10">
			      <textarea name="loca" row="3" class="form-control"></textarea>
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Save</button>
			    </div>
			  </div>
			</form>
			
		@endif
			


			<!-- <form class="form-horizontal" role="form">
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Add Event</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Size</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Event Start</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
			    </div>
			  </div><div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Event End</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Catagory</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Detail</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
			    </div>
			  </div><div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Location</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Save</button>
			    </div>
			  </div>
			</form> -->
		</div>
		</div>
	</div>
@stop