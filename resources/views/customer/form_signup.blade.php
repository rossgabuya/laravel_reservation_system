@extends('layouts.nonavigation')

@section('title','Login')

@section('content')
<div class="container text-center" style="padding-top: 70px;">
	<div class="col-md-4 col-md-offset-4" style="padding: 4em;margin-bottom: 5em;">
	  <div class="row">
	   <div class="" style="position: relative; margin-top: -120px;">
	      <i class="fa fa-user" style="font-size: 5em;color:#5a5a5a;"></i>
	   </div>
	    <h2>Customer</h2>
	    <form class="form-signin" action="{{ url('/') }}" method="POST">
	    	<div class="form-group">
	          <label for="inputFirstName" class="sr-only">First Name</label>
	          <input type="text" id="inputFirstName" class="form-control" placeholder="First Name" required autofocus value="" name="first_name">
	        </div>

	        <div class="form-group">
	          <label for="inputFirstName" class="sr-only">Last Name</label>
	          <input type="text" id="inputLastName" class="form-control" placeholder="Last Name" required name="last_name">
	        </div>

	        <div class="form-group">
	          <label for="inputContactNo" class="sr-only">Contact Number</label>
	          <input type="text" id="inputContactNo" class="form-control" placeholder="Contact Number" required name="contact_no">
	        </div>

	        <div class="form-group">
	          <label for="inputEmail" class="sr-only">Email address</label>
	          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required name="reg_email">
	        </div>
	        <div class="form-group">
	          <label for="inputPassword" class="sr-only">Password</label>
	          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
	        </div>
	        <div class="form-group">
	          <label for="inputPassword" class="sr-only">Confirm Password</label>
	          <input type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" required name="password_confirm">
	        </div>
	        <br>
	        {{ csrf_field() }}
	        <button class="btn btn-lg btn-primary btn-block" type="submit">GET STARTED</button>
	      </form>
	       <br />
	      <p><a style="text-decoration: none !important" href="{{ url('customer/login') }}">Already have an account?</a></p>
	    </div>
	</div>
</div>

@endsection