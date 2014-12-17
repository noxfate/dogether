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
				<a href="/event/{{ $e->event_id }}">{{ $e->name }}</a>
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
						<h3>Achievements</h3>
						<span>Complete each achievement to unlock new rank!</span>
					</div>
					<div class="holiday-type-grids">
						<div class="holiday-type-grid" onclick="location.href='#';">
							<span> <img src="/assets/img/ranking/0.png" alt=""> </span>
							<a>FOREVER ALONE</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='#';">
							<span> <img src="/assets/img/ranking/1.png" alt=""> </span>
							<a>OUT GOING</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='#';">
							<span> <img src="/assets/img/ranking/2.png" alt=""> </span>
							<a>RISING STAR</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='#';">
							<span> <img src="/assets/img/ranking/3.png" alt=""> </span>
							<a>HOTTIE</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='#';">
							<span> <img src="/assets/img/ranking/4.png" alt=""> </span>
							<a>SOCIALIZER</a>
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

<!-- Promotion Slide -->

					@foreach($promo as $p)
		            <li onclick="location.href='/promotion/{{$p->promotion_id}}';">
		  	    	    <img src="{{ $p->picture }}" />
		  	    	   
		  	    	    <div class="caption-info">
		  	    	    	 <div class="caption-info-head">
		  	    	    	 	<div class="caption-info-head-left">
			  	    	    	 	<h4><a href="#">{{ $p->name }}</a></h4>
			  	    	    	 	<span>By {{ Profile::find($p->user_id)->name }}</span>
		  	    	    	 	</div>
		  	    	    	 	<div class="caption-info-head-right">
		  	    	    	 		<span> </span>
		  	    	    	 	</div>
		  	    	    	 	<div class="clear"> </div>
		  	    	    	 </div>
		  	    	    </div>
		  	    	</li>
		  	    	@endforeach

		  	    		
		          </ul>
		        </div>
		        <a href="/promotion" class="btn" style="position: absolute; right: 10%;">MORE</a>
		      </section>
              <!-- //End content_slider -->

		</div>
		<!----//End-offers---->
		<!----//End-clients---->	

@stop