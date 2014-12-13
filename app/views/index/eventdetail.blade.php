@extends('index.master')
@section('content')
	<h1>This is Event Detail</h1>
	@foreach($data as $d)
	<form action="myevent/create" method="POST">
		Event Name : <input type="text" name="name" value="{{ $d->name }}"><br>
		Size : <input type="text" name="size" value="{{ $d->size }}"><br>
		Event Start : <input type="datetime" name="start" value="{{ $d->time_start }}"><br>
		Event End : <input type="datetime" name="end" value="{{ $d->time_end }}"><br>
		Category : <input type="text" name="end" value="{{ $d->time_end }}"><br>
		Detail : <textarea name="detail" row="3">{{ $d->detail }}</textarea><br>
		Location : <textarea name="loca" row="3">{{ $d->location }}</textarea>
	</form>
	@endforeach

@stop