@extends('owner.master')

@section('content')
	<h3><i class="fa fa-angle-right"></i>Promotion</h3>
	<div class="row mt">
		<div class="col lg 12">
			<div class="form-panel">
				<h4 class="mb">
					<i class="fa fa-angle-right"></i>
					Create Promotion
				</h4>
				<form action="/owner" method="POST" enctype="multipart/form-data" class="form-horizontal style-form">
				<!-- <form class="form-horizontal style-form" method="get"> -->
					<div class="form-group">
					  <label class="col-sm-2 col-sm-2 control-label">Promotion Name</label>
					  <div class="col-sm-10">
					      <input type="text" class="form-control" name="proname">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-sm-2 col-sm-2 control-label">Start Time</label>
					  <div class="col-sm-10">
					      <input type="date" class="form-control" name="start">
					  </div>
					</div>
				
					<div class="form-group">
					  <label class="col-sm-2 col-sm-2 control-label">End Time</label>
					  <div class="col-sm-10">
					      <input type="date" class="form-control" name="end">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-sm-2 col-sm-2 control-label">Description</label>
					  <div class="col-sm-10">
					      <textarea row='3' type="text" class="form-control" name="desc"></textarea>
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-sm-2 col-sm-2 control-label">Picture</label>
					  <div class="col-sm-10">
					      <input row='3' type="file" class="form-control" name="pic" accept="image/*">
					  </div>
					</div>
					<input type="hidden" name="flag" value="pwd">
					<button type="submit" class="btn btn-info btn-block">Save</button>
				</form>
				</div> <!--end panel-->
			</div> <!-- end Profile-->
		</div>
	</div>




<!-- 	<h1>Promotion</h1>
	<form action="/owner" method="POST" enctype="multipart/form-data">
		<table border='1'>
			<tr>
				<td>Promotion Name</td>
				<td><input type="text" name="proname"></td>
			</tr>
			<tr>
				<td>Start</td>
				<td><input type="date" name="start"></td>
			</tr>
			<tr>
				<td>End</td>
				<td><input type="date" name="end"></td>
			</tr>
			<tr>
				<td>Detail</td>
				<td><textarea row="3" name="desc"></textarea></td>
			</tr>
			<tr>
				<td>Picture</td>
				<td><input type="file" name="pic"></td>
			</tr>
		</table>
		<input type="submit" value="Submit">
	</form> -->

@stop