@extends('layout.masteredititem')
@section('Title','Edit Item')
@section('main')
	<header>
	<div class="headerblock"> 
		<div class="logo">
			<p><a href="{{url('home')}}">ConstruXology</a></p>
		</div>
		
<form class="frmbody" action="/edititem/{{$usert[0]->author_id}}" method="POST">
	@csrf
<br>	
<label>Author First Name:</label>
<br>
<input type="text" name="fnameUp" value="{{$usert[0]->author_fname}}">
<br>
<label>Author Last Name:</label>
<br>
<input type="text" name="lnameUp" value="{{$usert[0]->author_lname}}">
<br>
<label>Book Number:</label>
<br>
<input type="text" name="bnumber" value="{{$usert[0]->book_number}}">
<br>
<label>Book Title:</label>
<br>
<input type="text" name="btitle" value="{{$usert[0]->book_title}}">
<br>
<label>Book Description:</label>
<br>
<input type="text" name="bdesc" value="{{$usert[0]->book_desc}}">
<br>
<label>Book Price:</label>
<br>
<input type="text" name="bprice" value="{{$usert[0]->book_price}}">
<br>
<label>Publisher Name:</label>
<br>
<input type="text" name="pname" value="{{$usert[0]->publisher_name}}">
<br>
<label>Year Published:</label>
<br>
<input type="text" name="yrpublish" value="{{$usert[0]->year_pub}}">
<br>
<label>Month Published:</label>
<br>
<input type="text" name="mnthpublish" value="{{$usert[0]->month_pub}}">
<br>
<label>Day Published:</label>
<br>
<input type="text" name="dypublish" value="{{$usert[0]->day_pub}}">
<br>
<div class="buttonup">
<button type="submit" name="btnUpdate">Update</button>
</div>
</form>


</div>
</header>
<button class='btnBack' name='btnBack'><a href="{{url('booklist')}}">Back</a></button>

@endsection