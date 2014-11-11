<!doctype html>
<meta name="Content-Type" content="text/html; charset=utf-8" />
<html>
<head>
	<title>DoGether - Home</title>
	<meta charset="utf-8">
	@yield('customCss')
</head>
<body>

<!-- @@@@@ HEADER @@@@@@@ -->

@if (!Auth::check())
    <!-- User not Login -->
    <div class="container">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapase" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img src="assets/img/logo.png">
          </a>
          <div class="navbar-collapse navbar-right collapse" style="height: 0px;">
            <ul class="nav navbar-nav ">
              <li id="menu-button">
                <a href="#"><span class="glyphicon glyphicon-search"></span> Search</a></li>
                <li id="menu-button">
                  <a id="register-trigger" href="#" class="dropdown-toggle" data-toggle="dropdown">Register</a>
                  <div id="register-content" class="dropdown-menu">
                    <form class="form-horizontal" role="form" action="register/store" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label> 
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" placeholder="Password" name="pwd">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Confirm Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" placeholder="Confirm Password" name="repwd">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Name" name="fname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Surname</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Surname" name="lname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Phone Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="080-000-0000" name="tel">
                        </div>
                      </div>
                      <label class="col-sm-2 control-label">Sex</label>
                      <div class="radio-inline">
                        <label class="help-block">
                          <input type="radio" name="sex" value="M">
                          Male
                        </label>
                      </div>
                      <div class="radio-inline">
                        <label class="help-block">
                          <input type="radio" name="sex" value="F">
                          Female
                        </label>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Date of Birth</label>
                         <div class='col-sm-6'>
                            <div class='input-group date' id='datetimepicker'>
                              <input type='date' class="form-control" name="dob"/>
                              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                              </span>
                            </div>
                          </div>
                        </div>
                      <div class="form-group">
                        <label class="col-sm-2">Profile</label>
                        <input type="file" class="col-sm-10" name="pic">
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <input type="hidden" name="type" value="customer">
                          <button type="submit" class="btn btn-default">Sign Up</button>
                        </div>
                      </div>
                    </form>
                  </div>
              </li>
              <li id="menu-button">
                <a id="login-trigger" href="#" class="dropdown-toggle" data-toggle="dropdown">Log in</a>
                <div id="login-content" class="dropdown-menu">
                  <form class="form-inline" role="form" action="login" method="POST">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                            Enter your Email <br>
                            <div class="input-group">
                              <div class="input-group-addon">@</div>
                              <input class="form-control" type="email" placeholder="do@gether.com" name="email" >
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            Enter your Password <br>
                            <div class="input-group">
                              <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                              <input class="form-control" type="password" placeholder="Password" name="pwd" >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group"><br>
                          <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-play"></span></button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
            </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  

  @else

    <!-- User have logged in HEADER -->
    <table border='1'>
      <tr>
        <td>LoggedIn</td>
        <td><a href="/profile/{{ Auth::id(); }}">Edit Profile</a></td>
        <td><a href="/logout">Log out</a></td>
      </tr>
    </table>
  

  @endif


	<!-- @yield('header')  -->
	@yield('slide') 
	@yield('context')
	@yield('footer')
</body>
</html>