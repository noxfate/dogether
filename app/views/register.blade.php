@extends('layout.default')
@section('content')
<div class="header">
	<h1>Register</h3>
</div>

<div id="formRegister">

	<form action="register/store" method="POST" enctype="multipart/form-data"><!-- 
		E-mail:  <input type="text" name="email" required/><br>
		Password: <input type="password" name="pwd" required/><br>
		Re-Password: <input type="password" name = 'repwd' required/><br>
		First Name: <input type="text" name='fname' required/><br>
		Last Name: <input type="text" name='lname' required/><br> -->
		Profile: <input type="file" name="pic"/><br>
		<!-- Telephone: <input type="text" name='tel' required/><br>
		Sex : <input type="radio" name="sex" value="male"/>Male 
			<input type="radio" name="sex" value="female"/>Female <br>
		Date of Birth: <input type="date" name='dob' required/> <br> -->
		<input type='hidden' name='type' value='customer'/>
		<input type="submit" value="Register">
	</form>
</div>

@stop