@extends('index.master')

@section('content')
	<h1>this is test</h1>
	<form action="/myevent" method="POST">
			Event Name : <input type="text" name="name"><br>
			Size : <input type="text" name="size" ><br>
			Event Start : <input type="datetime" name="start" ><br>
			Event End : <input type="datetime" name="end" ><br>
			Cateory : <input type="radio" name="cate" value="food"> Food 
			<input type="radio" name="cate" value="fashion"> Fashion
			<input type="radio" name="cate" value="health"> Health
			<input type="radio" name="cate" value="entertainment"> Entertainment
			<input type="radio" name="cate" value="seminar"> Seminar
			<input type="radio" name="cate" value="other"> Other <br>
			Detail : <textarea name="detail" row="3"></textarea><br>
			Location : <textarea name="loca" row="3"></textarea>
			<input type="submit" value="save">
		</form>
@stop