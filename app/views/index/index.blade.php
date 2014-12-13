@extends('index.master')
@section('content')
@include('index.slide')
<!----start-clients---->
<div class="clients">
	<div class="client-head">
		<h3>EVENTS</h3>
		<span>hot events available now! join us!</span>
	</div>
	<div class="client-grids">
		<ul class="bxslider">
			@foreach($event as $e)
			<li>
				<a href="#">{{ $e->name }}</a>
				<p>{{ $e->detail }}</p>
				<span>{{ $e->location }}</span>
				<label> </label>
			</li>
			@endforeach
		  <!-- <li>
		  	<p>Lorem Ipsum is simply dummy text of the printing and typeset industry. Lorem Ipsum has been the industry's standard dummy text ever hen an with new version look.</p>
		  	<a href="#">Client Name</a>
		  	<span>United States</span>
		  	<label> </label>
		  </li> -->
		</ul>
	</div>
	<a href="/event" class="btn" style="position: absolute; right: 10%;">MORE</a>
</div>
<!-- enc client -->
		
		<!---start-holiday-types---->
			<div class="holiday-types">
				<div class="wrap">
					<div class="holiday-type-head">
						<h3>Acheivements</h3>
						<span>get explore your dream to travel the world!</span>
					</div>
					<div class="holiday-type-grids">
						<div class="holiday-type-grid" onclick="location.href='#';">
							<span class="icon1"> </span>
							<a href="#">Cruise</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='#';">
							<span class="icon2"> </span>
							<a href="#">City Breaks</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='#';">
							<span class="icon3"> </span>
							<a href="#">Honeymoon</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='#';">
							<span class="icon4"> </span>
							<a href="#">Adventure</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='#';">
							<span class="icon5"> </span>
							<a href="#">Safari</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='#';">
							<span class="icon6"> </span>
							<a href="#">Beach</a>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				</div>
		<!---//End-holiday-types---->
		<!----//End-images-slider---->
		<!----start-offers---->
		<div class="offers">
			<div class="offers-head">
				<h3>MORE SPECIAL PROMOTION!</h3>
				<p>Best 2014 packages where people love to stay!</p>

			</div>
			<!-- start content_slider -->
			<!-- FlexSlider -->
			 <!-- jQuery -->
			  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
			  <!-- FlexSlider -->
			  <script defer src="js/jquery.flexslider.js"></script>
			  <script type="text/javascript">
			    $(function(){
			      SyntaxHighlighter.all();
			    });
			    $(window).load(function(){
			      $('.flexslider').flexslider({
			        animation: "slide",
			        animationLoop: true,
			        itemWidth:250,
			        itemMargin: 5,
			        start: function(slider){
			          $('body').removeClass('loading');
			        }
			      });
			    });
			  </script>
			<!-- Place somewhere in the <body> of your page -->
				 <section class="slider">
		        <div class="flexslider carousel">
		          <ul class="slides">
		            <li onclick="location.href='#';">
		  	    	    <img src="images/p1.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p2.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p3.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p4.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		            <li onclick="location.href='#';">
		  	    	    <img src="images/p5.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p6.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p1.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p2.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		             <li onclick="location.href='#';">
		  	    	    <img src="images/p3.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		  	    	 <li onclick="location.href='#';">
		  	    	    <img src="images/p4.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p5.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		  	    		 <li onclick="location.href='#';">
		  	    	    <img src="images/p6.jpg" />
		  	    	    <!----place-caption-info---->
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">Hong Kong & Macau</a></h4>
			  	    	    	 	<span>Bonus Extras!</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	     <!----//place-caption-info---->
		  	    		</li>
		          </ul>
		        </div>
		        <button class="btn" style="position: absolute; right: 10%;">MORE</button>
		      </section>
              <!-- //End content_slider -->

		</div>
		<!----//End-offers---->
		<!----//End-clients---->	

@stop