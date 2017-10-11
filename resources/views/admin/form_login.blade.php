@extends('layouts.nonavigation')

@section('title','Login')

@section('content')
<div class="container text-center" style="padding-top: 70px;">
	<div class="col-md-4 col-md-offset-4" style="padding: 4em;margin-bottom: 5em;">
	  <div class="row">
	   <div class="" style="position: relative; margin-top: -120px;">
	      <i class="fa fa-building" style="font-size: 5em;color:#5a5a5a;"></i>
	   </div>
	    <h2>Administrator</h2>
	    <form class="form-signin" action="{{ route('admin.signin') }}" method="POST">
	        <div class="form-group">
	          <label for="inputEmail" class="sr-only">Email address</label>
	          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus value="" name="login_email">
	        </div>
	        <div class="form-group">
	          <label for="inputPassword" class="sr-only">Password</label>
	          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
	        </div>
	        <br>
	        {{ csrf_field() }}
	        <button class="btn btn-lg btn-primary btn-block" type="submit">LOGIN</button>
	      </form>
	       <br />
	      <p><a style="text-decoration: none !important" href="{{ url('password/reset') }}">Forgot your password?</a></p>
	    </div>
	</div>
</div>

@endsection