@extends('index.master')
@section('content')
<div class="destinations">
	<div class="destination-head">
		<div class="wrap">
			<h3>Events</h3>
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
	<div class="destination-places">
		<div class="wrap">
			<div class="destination-places-head">
				<h3>CREATE YOUR EVENT <a href="">CLICK+</a></h3>
			</div>
			<div class="event-grid" onclick="location.href='#';">
				<div class="row">
					<div class="col-md-9" style="background-color: #00FF00; height: 1150px; padding: 0;">
						<div class="row">
							<div class="col-md-4">
								<img src="images/p2.jpg">
							</div>
							<div class="col-md-4" style="background-color: #CCCCCC; width: 66.66666%">
								Text
							</div>
						</div>
						<div class="row" style="background-color: #000">
							eiei
						</div>
					</div>
					<!-- <div class="col-md-3" style="background-color: #FF0000; float: right; height: 500px;">
						TESTTTTTTTT
					</div> -->
				</div>
			</div>
			<div class="clear"> </div>
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