<html>
<head>
<title>Register Customer</title>

	<style type="text/css">
	body{
	background: rgb(0,0,0); /* Old browsers */
	background: -moz-linear-gradient(-45deg,  rgba(0,0,0,1) 1%, rgba(247,27,19,1) 41%, rgba(255,247,38,1) 87%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, right bottom, color-stop(1%,rgba(0,0,0,1)), color-stop(41%,rgba(247,27,19,1)), color-stop(87%,rgba(255,247,38,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(-45deg,  rgba(0,0,0,1) 1%,rgba(247,27,19,1) 41%,rgba(255,247,38,1) 87%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(-45deg,  rgba(0,0,0,1) 1%,rgba(247,27,19,1) 41%,rgba(255,247,38,1) 87%); /* Opera 11.10+ */
	background: -ms-linear-gradient(-45deg,  rgba(0,0,0,1) 1%,rgba(247,27,19,1) 41%,rgba(255,247,38,1) 87%); /* IE10+ */
	background: linear-gradient(135deg,  rgba(0,0,0,1) 1%,rgba(247,27,19,1) 41%,rgba(255,247,38,1) 87%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#fff726',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
	}


	div.header{
		color: white;
		font-size: 20px;
		text-align: center ;
		margin: 10px;
	}

	#formRegister{
		color:white;
		padding: 20px;
		margin: 20px;
		margin-left: 33%;
		border: solid;
		width: 350px;
		height: 300px;

	}

	input{
	margin: 5px;

	}

	</style>
</head>

<body>
<div class="header">
	<h1>Register</h3>
</div>

<div id="formRegister">

	<form action="register/store" method="POST">
		E-mail:  <input type="text" name="email" required/><br>
		Password: <input type="password" name="pwd" required/><br>
		Re-Password: <input type="password" name = 'repwd' required/><br>
		First Name: <input type="text" name='fname' required/><br>
		Last Name: <input type="text" name='lname' required/><br>
		Profile: <input type="file" name='pic'/><br>
		Telephone: <input type="text" name='tel' required/><br>
		Sex : <input type="radio" name="sex" value="male"/>Male 
			<input type="radio" name="sex" value="female"/>Female <br>
		Date of Birth: <input type="date" name='dob' required/> <br>
		<input type='hidden' name='type' value='customer'/>
		<input type="submit" value="Register">
	</form>
</div>

</body>


</html>