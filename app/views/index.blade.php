@extends('master')

@section('content')

<div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
	<div class="container">
		<script src="assets/js/pgwSlide.js" type="text/javascript"></script>
		<link href="assets/css/pgwSlide.css" rel="stylesheet" type="text/css"/>
		<ul class="pgwSlider">
		    <li><img src="assets/img/promotion/001.jpg" ></li>
		    <li><img src="assets/img/promotion/002.jpg" ></li>
		    <li><img src="assets/img/promotion/003.jpg" ></li>
		    <li><img src="assets/img/promotion/004.jpg" ></li>

		</ul>
	</div>
	<script>
			$(document).ready(function() {
			    $('.pgwSlider').pgwSlider();
			});

		</script>

	<div class="container">
		@for ($i = 0; $i < 100; $i++)
		    Test UI to top {{ $i }}<br>
		@endfor
	</div>
</div>		

@stop