
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

				@if ($f->status == 'pending')

					<!-- Wait for Confirmation -->

					Firstname: {{ $f->firstname }}<br>
					LastName: {{ $f->lastname }}<br>
					Gender : {{ $f->gender }}<br>
					Date of Birth : {{ $f->birthday }}<br>
					E-mail : {{ $f->email }}<br>
					Telephone : {{ $f->telephone }}<br>
					<img src="{{ $f->picture }}"><br>
					
					{{ Form::open(array('route'=>array('myevent.update',$f->id),'method'=>'put')) }}
						<input type="hidden" name="eid" value="{{ $data->event_id }}">
						<input type="submit" class='btn' name="answer" value="accept"> || 
						<input type="submit" class='btn' name="answer" value="decline">
					{{ Form::close() }}

				@elseif ($f->status == 'accept' or $f->status == 'confirm')

					<!-- Accepted the Joining Request -->

					Firstname: {{ $f->firstname }}<br>
					LastName: {{ $f->lastname }}<br>
					Gender : {{ $f->gender }}<br>
					Date of Birth : {{ $f->birthday }}<br>
					E-mail : {{ $f->email }}<br>
					Telephone : {{ $f->telephone }}<br>
					<img src="{{ $f->picture }}"><br>

					Status : {{ $f->status }}

					<!-- Decline and this user will Disappear -->
				@endif

			@endforeach
			<br>
			<!-- <a class='btn' href='/myevent/{{ $data->event_id }}/edit'>Confirm</a> -->
			<button class='btn' href='#'>Confirm</button>
		@elseif ($flag == 'rate')

			<!-- Rating Part -->
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

				@if (count(Rate::whereRaw('rated_id = ? and onevent_id = ?',array($f->id,$data->event_id))->get()) < 1 )
					{{ Form::open(array('route'=>array('rate.update',$f->id),'method'=>'put')) }}
						<input type="number" name="rating" value="0" min='0' max='5'><br>
						<input type="hidden" name="eid" value="{{ $data->event_id }}">
						<input type="submit" value="Rate!">
					{{ Form::close() }}
				@else
					<!-- Already Rate -->
				@endif

			@endforeach
			<br>
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