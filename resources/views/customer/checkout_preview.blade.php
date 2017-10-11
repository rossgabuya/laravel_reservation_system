@extends('layouts.nosidebar')

@section('title','Adjustments')

@section('content')
<!-- Site wrapper -->
<div>
  @include('includes.navigation')
  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <section class="container content-header text-center" style="margin-top: 4em;">
      <h1>
        Payment Preview
      </h1>
    </section>

    <!-- Main content -->
    <section class="container">
      <div class="reserveBoxDetails">
        <div class="row">
          <div class="col-md-6 text-left">
            <p>Paid through <strong>{{$details['payment_method']}}</strong></p>
            <p>Package</p>
            <p>Room</p>
            <p>Check In</p>
            <p>Check Out</p>
            <p>Amenities</p>
            <p> 
            @if(count($details['amenities']) > 0)
              <ul style="margin-left: 50px;">
                @foreach($details['amenities'] as $amenity)
                  <li>{{ $amenity->name }}</li>
                @endforeach
              </ul>
            @else
             (no chosen amenity)
            @endif
            </p>
          </div>
          <div class="col-md-6 text-right">
            <p>P {{ $details['total_amount']}}</p>
            <p>{{ $details['package']->package_name }}</p>
            <p>{{ $details['room']->room_name }}</p>
            <p>{{ $details['check_in'] }}</p>
            <p>{{ $details['check_out'] }}</p>
            <p>
             
            </p>
          </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-md-6 text-left">
        <p><strong>Amount Billed :</strong></p>
        </div>
        <div class="col-md-6 text-right">
        <p><strong>P {{$details['total_amount'] }}</strong></p>
        </div>
        </div>
          
      </div>

       <div class="alert alert-warning text-center" style="border-radius: 0px;"><strong>Note:</strong>This is only a preview of your invoice once you completed the transaction.<br/>To continue,click <strong>"Confirm"</strong>. If you want to make some changes,click <strong>"Go Back"</strong>.<br/>No funds have been transferred at this point.</div>

      
      <div class="row" style="margin-bottom: 5em;">
        <div class="col-md-offset-3 col-md-3">
          <a href="" class="btn btn-lg btn-default btn-block"> Go back</a>
        </div>
        <div class="col-md-3">
          <a href="{{ url('customer/reserve/finish') }}" class="btn btn-lg btn-primary btn-block"> Confirm </a>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

@endsection
