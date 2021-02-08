@extends('layout.mastercons')
@section('Title','updateaccount')
@section('main')
	<header>
	  
	<div class="header-block">
		<div class="logo">
			<p><a href="{{url('home')}}">ConstruXology</a></p>
		</div>        
	
  
	
<form class="frmbody" action="/updateaccount/{{$profile[0]->id_number}}" method="POST">	
	@csrf
<label>First Name:</label> 
<br>
<input type="text" name="fnameUp" value="{{ $profile[0]->fname }}">
<br>
<label>Last Name:</label>
<br>
<input type="text" name="lnameUp" value="{{ $profile[0]->lname }}">
<br>
<label>Username:</label>
<br>
<input type="text" name="emailUp" value="{{ $profile[0]->username }}">
<br>




<label>Change Password</label>

<br>
<label>New Password:</label>
<br>
<input type="text" name="newPass" value="{{ $profile[0]->password }}">
<br>

  

<div class="buttonup">
<button type="submit" name="btnUpdate">Update</button>
</div>
</form>
@if(isset($msg))
          {{ $msg }} 
     @endif



</div>
</header>
<button class='btnBack' name='btnBack'><a href="{{url('home')}}">Back</a></button>
   @endsection