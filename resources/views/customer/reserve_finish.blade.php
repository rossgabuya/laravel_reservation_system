@extends('layouts.nosidebar')

@section('title','Reservation Finish')

@section('content')
<!-- Site wrapper -->
<div>
  @include('includes.navigation')
  <!-- Content Wrapper. Contains page content -->
  <div>
    <section class="container text-center">

      <div class="row">
        <div class="col-md-offset-4 col-md-4 text-center" style="margin-top:5em;">
          <span class="fa fa-check-circle" style="font-size: 12em"></span>
          <br><br>
          <p>Your reservation has been added.</p>
          <p>Please check your email to confirm your reservation.</p>
          <p>You may also print your reservation slip for your reference</p>
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-md-offset-3 col-md-3">
          <a href="{{url('customer/dashboard')}}" class="btn btn-default btn-block">Go to Dashboard</a>
        </div>
        <div class="col-md-3">
          <a href="{{ url('customer/reserve/slip/'.$trans_ref) }}" class="btn btn-primary btn-block"> Print Reservation Slip </a>
        </div>
      </div>
  
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

@endsection
