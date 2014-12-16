
@extends('index.master')

<!-- Category didn't check Income Data TT^TT -->

@section('content')
	{{ HTML::style('css/bootstrap.css'); }}
	{{ HTML::style('css/flexslider.css'); }}
	{{ HTML::style('css/fwslider.css'); }}
	{{ HTML::style('css/jquery-ui.css'); }}
	{{ HTML::style('css/jquery.bxslider.css'); }}
	{{ HTML::style('css/style.css'); }}
	{{ HTML::script('js/css3-mediiaqueries.js'); }}
	{{ HTML::script('js/flexy-menu.js'); }}
	{{ HTML::script('js/fwslider.js'); }}
	{{ HTML::script('js/jquery-ui-min.js'); }}
	{{ HTML::script('js/jquery.bxslider.js'); }}
	{{ HTML::script('js/jquery.min.js'); }}
	{{ HTML::script('js/modal.js'); }}

	<div class="destinations">
			<div class="destination-head">
				<div class="wrap">
					<h3>Event Detail</h3>
				</div>
				<!---End-destinatiuons---->
				<div class="find-place dfind-place">
					<div class="wrap">
						<div class="p-h">
							<span>FIND YOUR</span>
							<label>HOLYDAYS</label>
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