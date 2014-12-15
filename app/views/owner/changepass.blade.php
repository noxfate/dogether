@extends('owner.master')

@section('content')

<h3><i class="fa fa-angle-right"></i> Change Password</h3>
	<div class="row mt">
	  	<div class="col-lg-12">
			<div class="form-panel"><br>

			{{ Form::open(array('url'=>'owner/'.Auth::id(), 'method' => 'put', 
			'class'=>'form-horizontal style-form')) }}
			<!-- <form class="form-horizontal style-form" method="get"> -->
				<div class="form-group">
				  <label class="col-sm-2 col-sm-2 control-label">Email</label>
				  <div class="col-sm-10">
				      <input type="Email" class="form-control">
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 col-sm-2 control-label">Old Password</label>
				  <div class="col-sm-10">
				      <input type="password" class="form-control" name="oldpwd">
				  </div>
				</div>
			
				<div class="form-group">
				  <label class="col-sm-2 col-sm-2 control-label">New Password</label>
				  <div class="col-sm-10">
				      <input type="password" class="form-control" name="pwd">
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 col-sm-2 control-label">Confirm New Password</label>
				  <div class="col-sm-10">
				      <input type="password" class="form-control" name="repwd">
				  </div>
				</div>
				<input type="hidden" name="flag" value="pwd">
				<button type="submit" class="btn btn-info btn-block">Save</button>
			</form>
			</div> <!--end panel-->
		</div> <!-- end Profile-->
	</div>
@stop