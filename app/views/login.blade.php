@extends('master')

@section('content')
<div class="container">
	<form class="form-inline" role="form" action="loginChk" method="POST">
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
@stop