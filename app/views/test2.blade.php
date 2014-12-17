
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
							<span>FIND YOUR</span>
							<label>PROMOTION</label>
						</div>
						<!---strat-date-piker---->
						  <script src="js/jquery-ui.js"></script>
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
						<h3>LATEST PROMOTION</h3>
					</div>
					<div class="row">
						<div class="col-md-1"> <img src="assets/img/customer/customer-taidaimaru.png" alt="" class="img-circle"></div>
						<div class="col-md-4" style="background-color: #1DD2AF;">
							<div>Event Name</div>
							<div>By Staphan</div>
							<div>At 0000-00-00 00:00:00:00</div>
							<div>
								<p>Location คณะไอที</p>
								<p>Catagory</p>
								<p>detail</p>
							</div>
							<div>Join</div>
						</div>
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