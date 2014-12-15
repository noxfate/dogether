
@extends('index.master')

<!-- Category didn't check Income Data TT^TT -->

@section('content')
	<h1>This is Event Detail</h1>
	@if ($data != null)
		@if ($flag == 'join')

			<!-- Data, Collaborator -->
			<br>
			Event name : {{ $data->name }}<br>
			Size : {{ $data->size }}<br>
			Event Start : {{ $data->time_start }}<br>
			Event End : {{ $data->time_end }}<br>
			Category : {{ $data->category }}<br>
			Detail : {{ $data->detail }}<br>
			Location : {{ $data->location }}<br><br>

			@foreach($friend as $f)
				Firstname: {{ $f->firstname }}<br>
				LastName: {{ $f->lastname }}<br>
				Gender : {{ $f->gender }}<br>
				Date of Birth : {{ $f->birthday }}<br>
				E-mail : {{ $f->email }}<br>
				Telephone : {{ $f->telephone }}<br>
				<img src="{{ $f->picture }}"><br>

			@endforeach
		

		@elseif ($flag == 'myown')

			<!-- Data, Collaborator, Accept/Decline Button -->
			<br>
			Event name : {{ $data->name }}<br>
			Size : {{ $data->size }}<br>
			Event Start : {{ $data->time_start }}<br>
			Event End : {{ $data->time_end }}<br>
			Category : {{ $data->category }}<br>
			Detail : {{ $data->detail }}<br>
			Location : {{ $data->location }}<br><br>

			@foreach($friend as $f)
				Firstname: {{ $f->firstname }}<br>
				LastName: {{ $f->lastname }}<br>
				Gender : {{ $f->gender }}<br>
				Date of Birth : {{ $f->birthday }}<br>
				E-mail : {{ $f->email }}<br>
				Telephone : {{ $f->telephone }}<br>
				<img src="{{ $f->picture }}"><br>

				<a class='btn' href="#">Accept</a>
				<a class='btn' href="#">Decline</a>

			@endforeach
			<br>
			<button class='btn'>Confirm</button>
		@endif


	@elseif ($pid != null)
		<!-- Create From Promotion -->
		<form action="/myevent" method="POST">
			Event Name : <input type="text" name="name" value="{{ $pid->name}}"><br>
			Size : <input type="text" name="size"><br>
			Event Start : <input type="date" name="start" value="{{ $pid->time_start }}"><br>
			Event End : <input type="date" name="end" value="{{ $pid->time_end }}"><br>
			Cateory : <input type="radio" name="cate" value="food"> Food 
			<input type="radio" name="cate" value="fashion"> Fashion
			<input type="radio" name="cate" value="health"> Health
			<input type="radio" name="cate" value="entertainment"> Entertainment
			<input type="radio" name="cate" value="seminar"> Seminar
			<input type="radio" name="cate" value="other"> Other <br>
			Detail : <textarea name="detail" row="3">{{ $pid->detail }}</textarea><br>
			Location : <textarea name="loca" row="3"></textarea>
			<input type="submit" value="save">
		</form>

	@else
		<form action="/myevent" method="POST">
			Event Name : <input type="text" name="name"><br>
			Size : <input type="text" name="size" ><br>
			Event Start : <input type="datetime" name="start" ><br>
			Event End : <input type="datetime" name="end" ><br>
			Cateory : <input type="radio" name="cate" value="food"> Food 
			<input type="radio" name="cate" value="fashion"> Fashion
			<input type="radio" name="cate" value="health"> Health
			<input type="radio" name="cate" value="entertainment"> Entertainment
			<input type="radio" name="cate" value="seminar"> Seminar
			<input type="radio" name="cate" value="other"> Other <br>
			Detail : <textarea name="detail" row="3"></textarea><br>
			Location : <textarea name="loca" row="3"></textarea>
			<input type="submit" value="save">
		</form>
	@endif

@stop