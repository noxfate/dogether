@extends('owner.master')

@section('content')
<h3><i class="fa fa-angle-right"></i> Edit Profile</h3>
<div class="row mt">
		<!-- Profile -->
	  	<div class="col-lg-12">
			<div class="form-panel"><br>
			<form class="form-horizontal style-form" method="POST" action="/edit/{{$id->id}}" enctype="multipart/form-data">
				<div class="form-group">
				  <label class="col-sm-2 col-sm-2 control-label">Store Name</label>
				  <div class="col-sm-10">
				      <input type="text" class="form-control" value="{{ $id->name}}" name="sname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 col-sm-2 control-label">Address</label>
				  <div class="col-sm-10">
				      <input type="text" class="form-control" value="{{ $id->address}}" name="addr">
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 col-sm-2 control-label">District</label>
				  <div class="col-sm-10">
				      <select class="form-control" name="district">
				      	<?php
	                   		{{ $arr = DB::select("select district from district where district != '$id->district'"); }}
	                      foreach($arr as $r)
	                      {
	                        echo "<option value='$r->district'>$r->district</option>";
	                      }
	                    ?> 
				      </select>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 col-sm-2 control-label">Province</label>
				  <div class="col-sm-10">
				      <input type="text" class="form-control" name="prov" value="{{ $id->province }}">
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 col-sm-2 control-label">Phone Number</label>
				  <div class="col-sm-10">
				      <input type="text" class="form-control" name="tel" value="{{ $id->telephone}}">
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 col-sm-2 control-label">Caption</label>
				  <div class="col-sm-10">
				      <input type="text" class="form-control" name="desc" value="{{ $id->description}}">
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 col-sm-2 control-label">Profile Picture</label>
				  <div class="col-sm-10">
				      <input type="file" class="form-control" accept="image/*" name="pic">
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 col-sm-2 control-label">Catagory</label>
				  <div class="col-sm-10">
				      <label class="checkbox-inline">
						<input type="checkbox" value="food" name="categ" @if($id->category=='food') checked @endif> Food
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" value="fashion" name="categ" @if($id->category=='fashion') checked @endif> Fashion
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" value="health" name="categ" @if($id->category=='health') checked @endif> Health
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" value="entertainment" name="categ" @if($id->category=='entertainment') checked @endif> Entertainment
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" value="seminar" name="categ" @if($id->category=='seminar') checked @endif> Seminar
					  </label>
					  <label class="checkbox-inline">
						<input type="checkbox" value="other" name="categ" @if($id->category=='other') checked @endif> Other
					  </label>
				  </div>
				</div>
				<input type="hidden" name="hid" value="profile">
				<button type="submit" class="btn btn-info btn-block">Save</button>
			</form>	
			</div> <!--end panel-->
		</div> <!-- end Profile-->
@stop