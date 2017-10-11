@extends('layouts.nosidebar')

@section('title','Choose your Room')

@section('content')
<!-- Site wrapper -->
<div>
  @include('includes.navigation')
  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <section class="container content-header text-center" style="margin-top: 4em;">
      <h1>
        <b>Step 2 :</b> Choose your room
      </h1>
    </section>

    <!-- Main content -->
    <section class="container text-center">
      <form action="{{ url('customer/choose/room') }}" method="post">
      <div class="row col-md-12 btn-group" data-toggle="buttons">
      
      @foreach($rooms as $room)
        <div class="col-lg-3 col-sm-6">
          <div class="packageBox">
          <img src="{{ url('src/img/rooms/'.$room->room_image) }}" height="128" width="175">
          <h2>{{ $room->room_name}}</h2>
          <ul class="text-left">
            <li>Capacity : {{ $room->capacity }}</li>
            <li>Price : P {{ $room->price }} / day</li>
            <li>Available : {{ $room->available_units }} rooms</li>
          </ul>
          
          <label class="btn btn-primary">
            <span class="glyphicon glyphicon-ok"></span>
            <input type="radio" name="room" value="{{ $room->room_name }}"> Select 
          </label>
          </div>
        </div><!-- /.col-lg-3 -->
      @endforeach
      </div>
      {{ csrf_field() }}
      <div class="row" style="margin-bottom: 5em;">
        <div class="col-md-6 col-md-offset-3">
          <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Continue">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

@endsection
