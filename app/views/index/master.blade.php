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
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<script src="js/jquery.min.js"></script>
		<!---script---->

		<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" />
		<script src="js/jquery.bxslider.js"></script>
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
		<script type="text/javascript" src="js/flexy-menu.js"></script>
		<script type="text/javascript">$(document).ready(function(){$(".flexy-menu").flexymenu({speed: 400,type: "horizontal",align: "right"});});</script>
		<!----//End-top-nav-script---->
		<!---webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!---webfonts---->
		<!--start slider -->
	    <link rel="stylesheet" href="css/fwslider.css" media="all">
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
		<script src="js/fwslider.js"></script>
		<!--end slider -->
		<!---calender-style---->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<!---//calender-style---->
	</head>
	<body>
		<!----start-wrap---->
		<script type="text/javascript" src="js/modal.js"></script>
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
		      	<form role="form" action="loginChk" method="POST">
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
					<a href="/"><img src="images/logo.png" title="voyage" /></a>
				</div>
				<!--- //End-logo---->
				<!--- start-top-nav---->
				<div class="top-nav">
					<ul class="flexy-menu thick orange">
						<li class="@if (Request::path() == '/') active @endif"><a href="/">Home</a></li>
						<li class="@if (Request::path() == 'event') active @endif"><a href="/event">Event</a></li>
						<li><a href="#">Achievement</a></li>
						<li><a href="/promotion">Promotion</a></li>

					</ul>
					@if(Auth::check())
					<div class="search-box">
						<div id="sb-search" class="sb-search">
							<form>
								<a href="logout"><span class="sb-icon-search"> </span></a>
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
		
		@yield('content')
		<!----start-footer---->
		<div class="footer">
			<div class="wrap">
			<div class="footer-grids">
				<div class="footer-grid Newsletter">
					<h3>News letter </h3>
					<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore.</p>
					<form>
						<input type="text" placeholder="Subscribes.." /> <input type="submit" value="GO" />
					</form>
				</div>
				<div class="footer-grid Newsletter">
					<h3>Latest News </h3>
					<div class="news">
						<div class="news-pic">
							<img src="images/f01.jpg" title="news-pic1" /> 
						</div>
						<div class="news-info">
							<a href="#">Postformat Gallery: Multiple images</a>
							<span>December 12, 2012 - 9:11 pm</span>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="news">
						<div class="news-pic">
							<img src="images/f01.jpg" title="news-pic1" /> 
						</div>
						<div class="news-info">
							<a href="#">Postformat Gallery: Multiple images</a>
							<span>December 12, 2012 - 9:11 pm</span>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="footer-grid tags">
					<h3>Tags</h3>
					<ul>
						<li><a href="#">Agent login</a></li>
						<li><a href="#">Customer Login</a></li>
						<li><a href="#">Not a Member?</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">New Horizons</a></li>
						<li><a href="#">Lanscape</a></li>
						<li><a href="#">Tags</a></li>
						<li><a href="#">Nice</a></li>
						<li><a href="#">Some</a></li>
						<li><a href="#">Portrait</a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="footer-grid address">
					<h3>Address </h3>
					<div class="address-info">
						<span>DieSachbearbeiter Schonhauser </span>
						<span>Allee 167c,10435 Berlin Germany</span>
						<span><i>E-mail:</i><a href="mailto:moin@blindtextgenerator.de">moin@blindtextgenerator.de</a></span>
					</div>
					<div class="footer-social-icons">
						<ul>
							<li><a class="face1 simptip-position-bottom simptip-movable" data-tooltip="facebook" href="#"><span> </span></a></li>
							<li><a class="twit1 simptip-position-bottom simptip-movable" data-tooltip="twitter" href="#"><span> </span></a></li>
							<li><a class="tub1 simptip-position-bottom simptip-movable" data-tooltip="tumblr" href="#"><span> </span></a></li>
							<li><a class="pin1 simptip-position-bottom simptip-movable" data-tooltip="pinterest" href="#"><span> </span></a></li>
							<div class="clear"> </div>
						</ul>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
			</div>
		</div>
		<!----//End-footer---->
		<!---start-subfooter---->
		<div class="subfooter">
			<div class="wrap">
				<ul>
					<li><a href="/">Home</a><span>::</span></li>
					<li><a href="destinations.html">Destinations</a><span>::</span></li>
					<li><a href="criuses.html">Criuses</a><span>::</span></li>
					<li><a href="destinations.html">Specils</a><span>::</span></li>
					<li><a href="destinations.html">Holidays</a><span>::</span></li>
					<li><a href="blog.html">Blog</a><span>::</span></li>
					<li><a href="contact.html">Contact Us</a></li>
					<div class="clear"> </div>
				</ul>
				<p class="copy-right">Template by <a href="http://w3layouts.com/">W3layouts</a></p>
				<a class="to-top" href="#header"><span> </span> </a>
			</div>
		</div>
		<!---//End-subfooter---->
		<!----//End-wrap---->
	</body>

	
</html>

