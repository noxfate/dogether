@extends('index.master')
@section('content')
	<div class="destinations">
			<div class="destination-head">
				<div class="wrap">
					<h3>ACHIEVEMENT</h3>
				</div>
				<!---End-destinatiuons---->
				<div class="find-place dfind-place">
					<div class="wrap">

							<img src="assets/img/ranking/0.png" alt="">


						<div class="clear"> </div>
					</div>
				</div>
				<!----//End-find-place---->
			</div>
			<div class="destination-places">
				<div class="wrap">
					<div class="destination-places-head">
						<h3>LASTEST PROMOTION</h3>
					</div>
					<div class="destination-places-grids">
						<div class="destination-places-grid" onclick="location.href='#';">
							<div class="dest-place-pic main_box user_style4" data-hipop="two-horizontal">
								<img src="images/d7.jpg" title="place-name" />
							</div>
							<div class="dest-place-opt">
								<ul class="dest-place-opt-fea">
									<li><a class="hot" href="#"><span> </span> By Store Name</a></li>
									<!-- <li><a class="plain" href="#"><span> </span> Air ticket</a></li>
									<li><a class="Breakfast" href="#"><span> </span> Break Fast</a></li> -->
									<div class="clear"> </div>
								</ul>
								<ul class="dest-place-opt-cast">
									<li><a class="d-place" href="#">Promotion Name 12345678</a></li>
									<!-- <li><a class="d-price" href="#">Starting Form 250$</a></li> -->
									<div class="clear"> </div>
								</ul>
							</div>
						</div>
						
						<div class="clear"> </div>
					</div>
				</div>
			</div>
			<!---start-destinations-pagenation---->
				<div class="destination-pagenate">
					<div class="wrap">
						<ul>
							<li><a class="d-next" href="#">LOAding More</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
				</div>
			<!---//End-destinations-pagenation---->
@stop




