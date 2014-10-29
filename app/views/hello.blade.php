@extends('layout.default')

@section('content')

	<h1>You have arrived.</h1>
	<h1>Hello there, {{$name}}</h1>

	<a href="register">Register</a>
	<br>
	<a href="register/create">Show All</a>
@stop
