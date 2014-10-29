<html>

	<head>
		<title>
			DoDether
		</title>

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
		<!-- Header here! -->
		<h1>This is the Header<br>
			_____________________</h1>

		@yield('content')

		<!-- Footer here! -->
		<h1>_____________________<br>
			This is the Footer</h1>
	</body>
</html>