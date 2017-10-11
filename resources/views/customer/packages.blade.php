@extends('layouts.nosidebar')

@section('title','Choose a Package')

@section('content')
<!-- Site wrapper -->
<div>
  @include('includes.navigation')
  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <section class="container content-header text-center" style="margin-top: 4em;">
      <h1>
        <b>Step 1 :</b> Choose your room package
      </h1>
    </section>

    <!-- Main content -->
    <section class="container text-center">

      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="packageBox">
          <img src="{{ url('src/img/icons/backpack.png') }}" class="img-circle">
          <h2>Solo Backpacker</h2>
          <p>Relax yourself and take some time for reflection.</p>
          <p><a class="btn btn-primary" href="{{ url('customer/reserve/new/1')}}" role="button">View details »</a></p>
          </div>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-3 col-sm-6">
          <div class="packageBox">
          <img src="{{ url('src/img/icons/newlyweds.png') }}" class="img-circle">
          <h2>Couple Sweethearts</h2>
          <p>Spend quality time with your special someone.</p>
          <p><a class="btn btn-primary" href="{{ url('customer/reserve/new/2')}}" role="button">View details »</a></p>
          </div>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-3 col-sm-6">
          <div class="packageBox">
          <img src="{{ url('src/img/icons/beer.png') }}" class="img-circle" height="128" width="128">
          <h2>Barkada Goodtime</h2>
          <p>Have fun and create awesome moments with your friends.</p>
          <p><a class="btn btn-primary" href="{{ url('customer/reserve/new/3')}}" role="button">View details »</a></p>
          </div>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-3 col-sm-6">
          <div class="packageBox">
          <img src="{{ url('src/img/icons/family.png') }}" class="img-circle">
          <h2>Family Vacation</h2>
          <p>Great bonding with family members.</p>
          <p><a class="btn btn-primary" href="{{ url('customer/reserve/new/4')}}" role="button">View details »</a></p>
          </div>
        </div><!-- /.col-lg-3 -->
      </div>
  
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

@endsection
