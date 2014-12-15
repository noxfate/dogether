
@extends('index.master')

@section('content')
	<h1>Promotion Page</h1>

	<!-- Query all the data from promotion -->

	@foreach($promo as $p)
		Promotion : {{ $p->name }}<br>
		<!-- Detail : {{ $p->detail }}<br>
		Start : {{ $p->time_start }}<br>
		End : {{ $p->time_end }}<br>
		Location : {{ Profile::find($p->user_id)->address }}, {{ Profile::find($p->user_id)->district }}, 
		{{ Profile::find($p->user_id)->province }}<br> -->
		<img src="{{ $p->picture }}"><br>

		@if (Auth::check())
		<form action="/myevent/create" method="GET">
			<a class="btn" href="/promotion/{{$p->promotion_id}}">Detail</a> 
			<input type="hidden" name="proid" value="{{ $p->promotion_id }}">
			<input type="submit" class="btn" style="color:red" value="Create Event">
		</form>
		@else
			<a class="btn" href="/promotion/{{$p->promotion_id}}">Detail</a> 
		@endif

		<br><br>
	@endforeach
@stop