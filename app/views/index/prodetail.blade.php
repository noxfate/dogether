@extends('index.master')

@section('content')

<div class="destinations">
	<div class="destination-head">
		<div class="wrap">
			<h3>PROMOTION</h3> 
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
				<h3>Promotion name</h3>
			</div>
			<!--Promotion-->
			<table class='table table-hover'>
				<img src="../images/pro2.jpg" alt="">
				<thead>
					<th>Detail</th>
					<th></th>
				</thead>
				<tr>
					<td class="col-md-2" style=" font-weight: bold;">Promotion</td>
					<td>มา 4 จ่าย 3</td>
				</tr>
				<tr>
					<td class="col-md-2" style="font-weight: bold;">Location</td>
					<td>ลาดกระบังฮิ</td>
				</tr>
				<tr>
					<td class="col-md-2" style="font-weight: bold;">Start Date</td>
					<td>00-00-0000 00:00:00</td>
				</tr>
				<tr>
					<td class="col-md-2" style="font-weight: bold;">End Date</td>
					<td>00-00-0000 00:00:00</td>
				</tr>
				<tr>
					<td class="col-md-2" style="font-weight: bold;">Describe</td>
					<td>หนึ่งสองสามปลาฉลามขึ้นบก</td>
				</tr>
			</table>
			<div style="padding-left: 80%;">ON 00-00-0000 00:00:00</div>
		</div>
	</div>
</div>

@stop