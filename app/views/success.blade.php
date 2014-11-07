<h1>Successfully Registered</h1>

@foreach($arr as $a)
	ID: {{ $a->id }}<br>
	Username: {{ $a->email}}<br>
@endforeach

