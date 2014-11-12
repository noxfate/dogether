@extends('master')

@section('content')

<script type="text/javascript" src="assets/js/tabs.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

<div class="content">
	<div class="main">
	   <div class="container">
		   <div class="register">

			
			 <!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
				  <li role="presentation" class="active"><a href="#regUser" role="tab" data-toggle="tab"><h4><b>Create an Account (for user)</b></h4></a></li>
				  <li role="presentation"><a href="#regOwner" role="tab" data-toggle="tab"><h4><b>Create an Account (for owner)</b></h4></a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<!-- User -->
				  	<div role="tabpanel" class="tab-pane active" id="regUser">
				  		<br>
				  		<div class="row">
						  <div class="form-group col-xs-6 ">
						  	<label class="control-label">Firstname</label>
						    <input type="text" class="form-control" placeholder="Firstname">
						  </div>
						  <div class="form-group col-xs-6">
						  	<label class="control-label">Lastname</label>
						    <input type="text" class="form-control" placeholder="Lastname">
						  </div>
						</div>
						<div class="row">
						  <div class="form-group col-xs-12">
						  	<label class="control-label">Email</label>
						    <input type="text" class="form-control" placeholder="example@dogether.com">
						  </div>
						</div>
						<div class="row">
						  <div class="form-group col-xs-6">
						  	<label class="control-label">Password</label>
						    <input type="password" class="form-control" placeholder="Password">
						  </div>
						  <div class="form-group col-xs-6">
						  	<label class="control-label">Confirm Password</label>
						    <input type="password" class="form-control" placeholder="Confirm Password">
						  </div>
						</div>
						<div class="row">
						  <div class="form-group col-xs-6">
						  	<label class="control-label">Phone Number</label>
						    <input type="text" class="form-control" placeholder="080XXXXXXX">
						  </div>
						  <div class="form-group col-xs-6">
						  	<label class="control-label">Date of Birth</label>
						    <input type="date" class="form-control" placeholder=".col-xs-2">
						  </div>
						</div>
						<div class="row">
						  <div class="form-group col-xs-6">
						  	<label class="control-label">Sex</label><p>
							<label class="radio-inline">
							  <input type="radio" name="sex" id="inlineRadio1" value="M"> Male
							</label>
							<label class="radio-inline">
							  <input type="radio" name="sex" id="inlineRadio2" value="F"> Female
							</label>
						  </div>
					  	</div>
					  	<div class="row">
						  <div class="form-group col-xs-12">
						  	<label class="control-label">Profile Picture</label>
						    <input type="file" accept="image/*" class="form-control" placeholder=".col-xs-2">
						  </div>
						</div>
					  	<input class="btn" type="submit" value="Create an Account">
				  	
				  	</div>
	
				  	<!-- Owner -->
					<div role="tabpanel" class="tab-pane" id="regOwner">

				  	eiei

					</div>

				</div>
			</div>
		</div>

	</div>
</div>

<script>
  $(document).ready(function() {
    $('#myTab a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')

	})
  })
</script>
	   


@stop