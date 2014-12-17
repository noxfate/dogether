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
					<span></span>
					<label>Details</label>
				</div>
				<!---strat-date-piker---->
				
				<div class="clear"> </div>
			</div>
		</div>
		<!----//End-find-place---->
	</div>
	<div class="criuse-main">
		<div class="wrap"><!-- 
			<div class="criuse-head1">
				<h3>Promotion name</h3>
			</div> -->
			<!--Promotion-->
			<div class="row">
				<div class="col-md-2"></div>
				<div><img src="{{ $promo->picture }}" alt=""></div>
			</div>
			<table class='table table-hover'>
				<tr>
					<td class="col-md-2" style=" font-weight: bold;">Promotion</td>
					<td>{{ $promo->name }}</td>
				</tr>
				<tr>
					<td class="col-md-2" style="font-weight: bold;">Location</td>
					<td>{{ Profile::find($promo->user_id)->address }}, {{ Profile::find($promo->user_id)->district }}</td>
				</tr>
				<tr>
					<td class="col-md-2" style="font-weight: bold;">Start Date</td>
					<td>{{ date("d/m/Y",strtotime($promo->time_start)) }}</td>
				</tr>
				<tr>
					<td class="col-md-2" style="font-weight: bold;">End Date</td>
					<td>{{ date("d/m/Y",strtotime($promo->time_end)) }}</td>
				</tr>
				<tr>
					<td class="col-md-2" style="font-weight: bold;">Describe</td>
					<td>{{ $promo->detail }}</td>
				</tr>
			</table>
			@if (Auth::check())
			<form action="/myevent/create" method="GET">
				<input type="hidden" name="proid" value="{{ $promo->promotion_id }}">
				<input type="submit" class="btn" value="Create Event">
			</form>
			@endif
			<div style="padding-left: 80%;">on {{ date("H:i:s d/m/Y",strtotime($promo->timestamp)) }}</div>
		</div>
	</div>
</div>

@stop