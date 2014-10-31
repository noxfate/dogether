@extends('index/default')

@section('customCss')
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
  <script src="assets/js/jquery-2.1.0.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-dropdown.js"></script>
	<style type="text/css">
 
  body{
    background: #f9ff92;
  }

  .container{
    background: #ffffff;
    width: 100%;
    padding-right: 10%;
    padding-left: 10%;
  }
  
  .navbar-header{
    width: inherit;
    float: right;
  }
  .navbar-collapse{
    float: right;
  }
  .navbar-nav li a {
    height: 90px;
    padding-top: 35px;
  }

  .navbar-right .dropdown-menu{
    left: 0px;
    position: fixed;
    width: 100%;
  }

  .dropdown-menu{
    width: 1200px;
    overflow: hidden;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 20%;
    padding-right: 20%;
    opacity: 1;
    height: auto;
    top: 89px;
  }

  .container-slide{
    padding-left: 10%;
    padding-right: 10%;
    height: 350px;

  }

  .item img {
    max-height: 350px;
  }

  .cell-active{
    background: yellow;
  }

	</style>
  <script type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
@stop

<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ HEADER @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

@section('header')
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

@section('slide')
<div class="container-slide">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="assets/img/slide002.jpg" alt="...">
      </div>
      <div class="item">
        <img src="assets/img/slide001.jpg" alt="...">
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</dic>
@stop

<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ FOOTER @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->



<form class="form-horizontal" role="form" action="register/store" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control input-sm" id="inputEmail3" placeholder="Email" name="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control input-sm" placeholder="Password" name="pwd">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Confirm Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control input-sm" placeholder="Confirm Password" name="repwd">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">StoreName</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" placeholder="Address" name="addr">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" placeholder="Address" name="addr">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">District</label>
                    <div class="col-sm-10">
                      <select name="district">
                        <option value="null">---- Choose District ----</option>
                        <?php
                          foreach($arr as $r)
                          {
                            echo "<option value='$r->district'>$r->district</option>";
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Province</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" placeholder="Province" name="prov">
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <label class="col-sm-2 control-label">Post Number</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" placeholder="Post" name="post">
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Phone Number</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" placeholder="080-000-0000">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Caption</label>
                    <div class="col-sm-10">
                      <textarea class="form-control input-sm" rows="3" name="desc"></textarea>
                    </div>
                  </div>
                  <label class="col-sm-2 control-label">Catagory</label>
                  <div class="radio-inline">
                    <label class="help-block">
                      <input type="radio" name="categ" value="food">
                      Food
                    </label>
                  </div>
                  <div class="radio-inline">
                    <label class="help-block">
                      <input type="radio" name="categ" value="fashion">
                      Fashion
                    </label>
                  </div>
                  <div class="radio-inline">
                    <label class="help-block">
                      <input type="radio" name="categ" value="health">
                      Health
                    </label>
                  </div>
                  <div class="radio-inline">
                    <label class="help-block">
                      <input type="radio" name="categ" value="entertainment">
                      Entertainment
                    </label>
                  </div>
                  <div class="radio-inline">
                    <label class="help-block">
                      <input type="radio" name="categ" value="seminar">
                      Seminar
                    </label>
                  </div>
                  <div class="radio-inline">
                    <label class="help-block">
                      <input type="radio" name="categ" value="other">
                      Other
                    </label>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">          
                      <label class="col-sm-2">Profile</label>
                      <input type="file" class="col-sm-10" name="pic">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="hidden" name="type" value="owner">
                      <button type="submit" class="btn btn-default">Sign Up</button>
                    </div>
                  </div>

  </form>


@section('footer')

<script type="text/javascript">
$(document).ready(function(){
  $('#login-trigger').click(function(){
    $(this).next('#login-content').slideToggle()
    $("#register-content").slideUp()
  });
});

$(document).ready(function(){
  $('#register-trigger').click(function(){
    $(this).next('#register-content').slideToggle()
    $("#login-content").slideUp()
  });
});

$(document).ready(function() {
  $('#datetimepicker').datetimepicker({
    pickTime: false
  });
});

// $(document).ready(function(){
//   $("#menu-button").hover(function(){
//     $("#menu-button").css("background-color","green")
//   });
// });

</script>
@stop
