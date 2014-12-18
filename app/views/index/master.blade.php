<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>DoGether : HOME</title>
		<link rel="stylesheet" href="{{ URL::to('css/bootstrap.css') }}" type="text/css" />
		<link href="{{ URL::to('css/style.css') }}" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<script src="{{ URL::to('js/jquery.min.js')}}"></script>
		<!---script---->
		<script src="{{ URL::to('js/alert.js')}}"></script>
		<link rel="stylesheet" href="{{ URL::to('css/jquery.bxslider.css')}}" type="text/css" />
		<script src="{{ URL::to('js/jquery.bxslider.js')}}"></script>
			<script type="text/javascript">
				$(document).ready(function(){
					$('.bxslider').bxSlider({
						 auto: true,
 						 autoControls: true,
						 minSlides: 4,
						 maxSlides: 4,
						 slideWidth:450,
						 slideMargin: 10
					});
				});
			</script>
		<!---//script---->
		<!---smoth-scrlling---->
			<script type="text/javascript">
				$(document).ready(function(){
									$('a[href^="#"]').on('click',function (e) {
									    e.preventDefault();
									    var target = this.hash,
									    $target = $(target);
									    $('html, body').stop().animate({
									        'scrollTop': $target.offset().top
									    }, 1000, 'swing', function () {
									        window.location.hash = target;
									    });
									});
								});
				</script>
		<!---//smoth-scrlling---->
		<!----start-top-nav-script---->
		<script type="text/javascript" src="{{ URL::to('js/flexy-menu.js')}}"></script>
		<script type="text/javascript">$(document).ready(function(){$(".flexy-menu").flexymenu({speed: 400,type: "horizontal",align: "right"});});</script>
		<!----//End-top-nav-script---->
		<!---webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!---webfonts---->
		<!--start slider -->
	    <link rel="stylesheet" href="{{ URL::to('css/fwslider.css')}}" media="all">
		<script src="{{ URL::to('js/jquery-ui.min.js')}}"></script>
		<script src="{{ URL::to('js/css3-mediaqueries.js')}}"></script>
		<script src="{{ URL::to('js/fwslider.js')}}"></script>
		<!--end slider -->
		<!---calender-style---->
		<link rel="stylesheet" href="{{ URL::to('css/jquery-ui.css')}}" />
		<!---//calender-style---->

		<!-- cdn for modernizr, if you haven't included it already -->
    <script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
    <!-- polyfiller file to detect and load polyfills -->
    <script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
    <script>
      webshims.setOptions('waitReady', false);
      webshims.setOptions('forms-ext', {types: 'date'});
      webshims.polyfill('forms forms-ext');
    </script>
	</head>
	<body>
		<!----start-wrap---->
		<script type="text/javascript" src="{{ URL::to('js/modal.js')}}"></script>
		<div class="top-header" id="header">
			<div class="wrap">
				<div class="top-header-left">
					<ul>
						@if(Auth::check())
							<li><p><span style="background:url(../images/agent.png)"></span>{{ Auth::user()->email }}</p></li>
							<li><p><span> </span>Edit My </p>&nbsp;<a class="reg" href="/profile/{{Auth::id()}}"> Account</a></li>
							<div class="clear"> </div>
						@else
							<li><a href="#" data-toggle="modal" data-target="#myModal"><span> </span> Sign in</a></li>
							<li><p><span> </span>Not a Member ? </p>&nbsp;<a href="/register" class="reg"> Register</a></li>
							<div class="clear"> </div>
						@endif
					</ul>
				</div>

				<div class="clear"> </div>
			</div>
		</div>

		<!-- Modal Login -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-sm">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title" id="myModalLabel">Sign in</h4>
		      </div>
		      <div class="modal-body">
		      	<form role="form" action="/loginChk" method="POST">
			        <div class="form-group">
		            <label>Enter your Email</label> <br>
			            <div class="input-group">
				            <div class="input-group-addon">@</div>
				            <input class="form-control" type="email" placeholder="do@gether.com" name="email" >
				        </div>
			        </div>
			        <div class="form-group">
			            Enter your Password <br>
			            <div class="input-group">
			              <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
			              <input class="form-control" type="password" placeholder="Password" name="pwd" >
			          </div>
			        </div>
			        <button type="submit" class="btn btn-primary">Sign in</button>
			    </form>
			   </div>
		    </div>
		    </div>
		  </div>
		</div>
		<!-- end modal login -->
		
		<!---start-header---->
		<div class="header">
			<div class="wrap">
				<!--- start-logo---->
				<div class="logo">
					<a href="/"><img class="logo" style="margin-top:30px" src="{{URL::to('images/logo003.png')}}" title="voyage" /></a>
				</div>
				<!--- //End-logo---->
				<!--- start-top-nav---->
				<div class="top-nav">
					<ul class="flexy-menu thick orange">
						<li class="@if (Request::path() == '/') active @endif"><a href="/">Home</a></li>
						
						@if (Auth::check())
						<li class="@if (Request::path() == 'event') active @endif"><a href="/event">Event <span class='glyphicon glyphicon-chevron-down'></span></a>
							<ul>								
								<li><a href="/event">All Events</a></li>
								<li><a href="/myevent">My Event</a></li>
								<li><a href="/joinevent">Joined Event</a></li>
							</ul>
						</li>
						@else
						<li class="@if (Request::path() == 'event') active @endif"><a href="/event">Event</a></i>
						@endif

						<li><a href="/achievement">Achievement</a></li>
						<li><a href="/promotion">Promotion</a></li>

					</ul>
					@if(Auth::check())
					<div class="search-box">
						<div id="sb-search" class="sb-search">
							<form>
								<a href="/logout"><span class="sb-icon-search"> </span></a>
							</form>
						</div>
					</div>
					@endif
				</div>
		
			</div>
			<!--- //End-top-nav---->
			<div class="clear"> </div>
		</div>
		<!---//End-header---->

		@if (Session::pull('lgn','true') == 'false')
		<!-- Warning Tab -->
		<div class="wrap">
			<div class="alert alert-danger alert-dissible fade in" role=alert>
				Log-in unsuccessfull. Wrong Username or Password. Please try again.
				<button type="button" class="close" data-dismiss="alert">
				  <span aria-hidden="true">&times;</span>
				  <span class="sr-only">Close</span>
				</button>
			</div>
		</div>
		@elseif (Session::pull('rg',0) == 'false')
			<div class="wrap">
			<div class="alert alert-info alert-dissible fade in" role=alert>
				There're some technical problem. Sorry for the inconvenient.
				<button type="button" class="close" data-dismiss="alert">
				  <span aria-hidden="true">&times;</span>
				  <span class="sr-only">Close</span>
				</button>
			</div>
			</div>
		@elseif (Session::pull('rg',0) == 'true')
			<div class="wrap">
			<div class="alert alert-success alert-dissible fade in" role=alert>
				Successfully Registerd.
				<button type="button" class="close" data-dismiss="alert">
				  <span aria-hidden="true">&times;</span>
				  <span class="sr-only">Close</span>
				</button>
			</div>
			</div>
		@endif


		@yield('content')
		
		<!---start-subfooter---->
		<div class="subfooter">
			<div class="wrap">
				<ul>
					<li><a href="/">Home</a><span>::</span></li>
					<li><a href="/event">Event</a><span>::</span></li>
					<li><a href="/achievement">Achievement</a><span>::</span></li>
					<li><a href="/promotion">Promotion</a><span>::</span></li>
					<div class="clear"> </div>
				</ul>
				<p class="copy-right"><span class="glyphicon glyphicon-copyright-mark"></span> <a href="#">2014 SKT NB</a></p>
				<a class="to-top" href="#header"><span> </span> </a>
			</div>
		</div>
		<!---//End-subfooter---->
		<!----//End-wrap---->
	</body>

	
</html>

