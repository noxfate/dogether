@extends('index.default')

@section('header')
	<h1>Profile Page</h1>
	<br>
	@if($id->role == 'customer')
		<!-- Customer Here -->
		<form action="/edit/{{$id->id}}" method="POST" enctype="multipart/form-data">
			<table border='1'>
				<tr>
					<td>Firstname</td>
					<td><input type="text" name="fname" value="{{ $id->firstname }}"</td>
				</tr>
				<tr>
					<td>Lastname</td>
					<td><input type="text" name="lname" value="{{ $id->lastname}}"</td>
				</tr>
				<tr>
					<td>Telephone</td>
					<td><input type="telephone" name="tel" value="{{ $id->telephone}}"</td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>{{ $id->gender}}</td>
				</tr>
				<tr>
					<td>Birthday</td>
					<td>{{ $id->birthday}}</td>
				</tr>
				<tr>
					<td>Picture</td>
					<td><img src='{{ $id->picture }}' width='250' height='300'><br>
						<input type="file" name="pic" value="{{$id->picture}}">
					</td>
				</tr>
			</table>
			<input type="submit" value="save">
		</form>
		<a href="/">Back</a>

	@else
		<!-- Owner Here -->

		<!-- 
				<tr>
					<td>Address</td>
					<td><input type="text" name="" value="{{ $id->address}}"</td>
				</tr>
				<tr>
					<td>District</td>
					<td><input type="text" name="" value="{{ $id->district }}"</td>
				</tr>
				<tr>
					<td>Province</td>
					<td><input type="text" name="" value="{{ $id->province }}"</td>
				</tr> -->

	@endif
@stop