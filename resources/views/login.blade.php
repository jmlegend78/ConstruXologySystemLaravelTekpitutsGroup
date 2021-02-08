@extends('layout.masterlogin')
@section('Title','ConstruXology')
@section('main')
<header>
	<div class="header-block">
		<div class="logo">
			<p><a href="login">ConstruXology</a></p>
		</div>
		

	<div class="fblogin">
          <form class="frmbody" method="POST" action="{{url('home')}}">
          	{{ csrf_field() }}
		<div class="email">
		<label>Username</label><br>
		<input type="text" name="username" required/>
		</div>
		<div class="password">
		<label>Password</label><br>
		<input type="password" name="password" required/>
			
		</div>
		<div class="loginbutton">
               <button type="submit" name="login">Log In</button>
		</div>
          </form>
@if(isset($msg))
          {{ $msg }} 
     @endif


         
	</div>
</div>
</header>


@endsection