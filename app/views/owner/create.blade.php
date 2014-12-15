@extends('owner.master')

@section('content')
	<h1>Promotion</h1>
	<form action="/owner" method="POST" enctype="multipart/form-data">
		<table border='1'>
			<tr>
				<td>Promotion Name</td>
				<td><input type="text" name="proname"></td>
			</tr>
			<tr>
				<td>Start</td>
				<td><input type="date" name="start"></td>
			</tr>
			<tr>
				<td>End</td>
				<td><input type="date" name="end"></td>
			</tr>
			<tr>
				<td>Detail</td>
				<td><textarea row="3" name="desc"></textarea></td>
			</tr>
			<tr>
				<td>Picture</td>
				<td><input type="file" name="pic"></td>
			</tr>
		</table>
		<input type="submit" value="Submit">
	</form>

@stop