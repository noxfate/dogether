<!doctype html>
<meta name="Content-Type" content="text/html; charset=utf-8" />
<html>
<head>
	<title>DoGether - Home</title>
	<meta charset="utf-8">
	@yield('customCss')
</head>
<body>
	 <table border='1'>
      <tr>
        <td>LoggedIn</td>
        <td><a href="">Edit Profile</a></td>
      	<td><a href="">Promotion</a></td>
      	<td><a href="">Security</a></td>
        <td><a href="/logout">Log out</a></td>
      </tr>
    </table>

	@yield('context')
	@yield('footer')
</body>
</html>