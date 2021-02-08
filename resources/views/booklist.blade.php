@extends('layout.masterbooklist')
@section('Title','booklist')
@section('main')
	<header>

 
<div class="headerblock">
		<div class="logo">
			<p><a href="{{url('home')}}">ConstruXology</a></p>
		</div>
		<div class="frmbody">
<table border = 1>
		<th>Author ID:</th>
		<th>Authro First Name:</th>
	<th>Author Last Name:</th>
	<th>Book NO:</th>
	<th>Book Title:</th>
	<th>Book Description:</th>
	<th>Book Price: </th>
	<th>Publisher Name:</th>
	<th>Year Published:</th>
	<th>Month Published:</th>
	<th>Day Published:</th>
	<th>Edit/Delete:</th>

		@foreach($users as $profile)
			<tr>
				<td> {{ $profile->author_id}}</td>
				<td> {{ $profile->author_fname}}</td>
				<td> {{ $profile->author_lname}}</td>
				<td> {{ $profile->book_number}}</td>
				<td> {{ $profile->book_title}}</td>
				<td> {{ $profile->book_desc}}</td>
				<td> {{ $profile->book_price}}</td>
				<td> {{ $profile->publisher_name}}</td>
				<td> {{ $profile->year_pub}}</td>
				<td> {{ $profile->month_pub}}</td>
				<td> {{ $profile->day_pub}}</td>


				<td>
				<a href="/edititem/{{$profile->author_id}}">EDIT</a>
				<a href="/delete/{{$profile->author_id}}">DELETE</a>
			</td>
			</tr>

		@endforeach

	</table>
</div>




       </div>
		</header>
   <button class='btnBack' name='btnBack'><a href="{{url('home')}}">Back</a></button>


@endsection