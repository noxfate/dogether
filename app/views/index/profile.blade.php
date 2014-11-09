@extends('index.default')

@section('header')
	<h1>Profile Page</h1>
	<br>
	@if($id->role == 'customer')
		<!-- Customer Here -->
		<form action="/edit/{{$id->id}}" method="POST" enctype="multipart/form-data">
			<table border='1'>
				<tr>
					<td>Firstname</td>
					<td><input type="text" name="fname" value="{{ $id->firstname }}"</td>
				</tr>
				<tr>
					<td>Lastname</td>
					<td><input type="text" name="lname" value="{{ $id->lastname}}"</td>
				</tr>
				<tr>
					<td>Telephone</td>
					<td><input type="telephone" name="tel" value="{{ $id->telephone}}"</td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>{{ $id->gender}}</td>
				</tr>
				<tr>
					<td>Birthday</td>
					<td>{{ $id->birthday}}</td>
				</tr>
				<tr>
					<td>Picture</td>
					<td><img src='{{ $id->picture }}' width='250' height='300'><br>
						<input type="file" name="pic" value="{{$id->picture}}">
					</td>
				</tr>
			</table>
			<input type="submit" value="save">
		</form>
		<a href="/">Back</a>

	@else
		<!-- Owner Here -->
		<form action="/edit/{{$id->id}}" method="POST" enctype="multipart/form-data">
			<table border='1'>
				<tr>
					<td>Storename</td>
					<td><input type="text" name="sname" value="{{ $id->name}}"</td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="addr" value="{{ $id->address}}"</td>
				</tr>
				<tr>
					<td>District</td>
					<td>
						<select name="district">
							<option value="{{ $id->district }}">{{ $id->district }}</option>
	                       <?php
	                       		{{ $arr = DB::select("select district from district where district != '$id->district'"); }}
	                          foreach($arr as $r)
	                          {
	                            echo "<option value='$r->district'>$r->district</option>";
	                          }
	                        ?> 
	                    </select>
                	</td>
                </tr>
				<tr>
					<td>Province</td>
					<td><input type="text" name="prov" value="{{ $id->province }}"</td>
				</tr>
				<tr>
					<td>Phone Number</td>
					<td><input type="text" name="tel" value="{{ $id->telephone}}"</td>
				</tr>
				<tr>
					<td>Caption</td>
					<td><textarea row="3" name="desc">{{ $id->description}}</textarea></td>
				</tr>
				<tr>
					<td>Category</td>
					<td>
						<!-- TO DO -->
						<?php
							$cat = $id->category;
							switch ($cat) {
								case 'food':
									echo '<input type="radio" name="categ" value="food" checked>Food';
									echo '<input type="radio" name="categ" value="fashion" >Fashion';
									echo '<input type="radio" name="categ" value="health">Health';
									echo '<input type="radio" name="categ" value="entertainment">Entertainment';
									echo '<input type="radio" name="categ" value="seminar">Seminar';
									echo '<input type="radio" name="categ" value="other">Other';
									break;
								case 'fashion':
									echo '<input type="radio" name="categ" value="food" >Food';
									echo '<input type="radio" name="categ" value="fashion" checked>Fashion';
									echo '<input type="radio" name="categ" value="health" >Health';
									echo '<input type="radio" name="categ" value="entertainment">Entertainment';
									echo '<input type="radio" name="categ" value="seminar">Seminar';
									echo '<input type="radio" name="categ" value="other">Other';
									break;
								case 'health':
									echo '<input type="radio" name="categ" value="food">Food';
									echo '<input type="radio" name="categ" value="fashion" >Fashion';
									echo '<input type="radio" name="categ" value="health" checked>Health';
									echo '<input type="radio" name="categ" value="entertainment">Entertainment';
									echo '<input type="radio" name="categ" value="seminar">Seminar';
									echo '<input type="radio" name="categ" value="other">Other';
								break;
								case 'entertainment':
									echo '<input type="radio" name="categ" value="food">Food';
									echo '<input type="radio" name="categ" value="fashion" >Fashion';
									echo '<input type="radio" name="categ" value="health">Health';
									echo '<input type="radio" name="categ" value="entertainment" checked>Entertainment';
									echo '<input type="radio" name="categ" value="seminar">Seminar';
									echo '<input type="radio" name="categ" value="other">Other';
								break;
								case 'seminar':
									echo '<input type="radio" name="categ" value="food" >Food';
									echo '<input type="radio" name="categ" value="fashion" >Fashion';
									echo '<input type="radio" name="categ" value="health">Health';
									echo '<input type="radio" name="categ" value="entertainment">Entertainment';
									echo '<input type="radio" name="categ" value="seminar" checked>Seminar';
									echo '<input type="radio" name="categ" value="other">Other';
								break;
								case 'other':
									echo '<input type="radio" name="categ" value="food" >Food';
									echo '<input type="radio" name="categ" value="fashion" >Fashion';
									echo '<input type="radio" name="categ" value="health">Health';
									echo '<input type="radio" name="categ" value="entertainment">Entertainment';
									echo '<input type="radio" name="categ" value="seminar">Seminar';
									echo '<input type="radio" name="categ" value="other" checked>Other';
								break;
								default:
									echo '<input type="radio" name="categ" value="food">Food';
									echo '<input type="radio" name="categ" value="fashion" >Fashion';
									echo '<input type="radio" name="categ" value="health">Health';
									echo '<input type="radio" name="categ" value="entertainment">Entertainment';
									echo '<input type="radio" name="categ" value="seminar">Seminar';
									echo '<input type="radio" name="categ" value="other">Other';
									break;
							}
						?>
					</td>
				</tr>
				<tr>
					<td>Profile</td>
					<td><img src='{{ $id->picture }}' width='250' height='300'><br>
						<input type="file" name="pic" value="{{$id->picture}}">
					</td>
				</tr>
			</table>
				
			<input type="submit" value="save">
		</form>
		<a href="/">Back</a>
		


	@endif
@stop