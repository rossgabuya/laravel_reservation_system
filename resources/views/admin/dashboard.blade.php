@extends('layouts.system')

@section('title','Dashboard')

@section('content')
<!-- Site wrapper -->
<div class="wrapper">
  @include('includes.navigation')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>6</h3>

              <p>Pending Reservations</p>
            </div>
            <div class="icon">
              <i class="fa fa-files-o"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>80</h3>

              <p>Vacant Rooms</p>
            </div>
            <div class="icon">
              <i class="glyphicon glyphicon-bed"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Coming Soon</h3>

              <p>Special Promos</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row text-center" style="margin: 2em 0;">
        <a href="{{ url('admin/reservations')}}" class="btn btn-lg btn-primary"> View Latest Reservations</a>
      </div>

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Featured Rooms</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-3 col-sm-3 col-xs-12">
                <img src="{{ url('src/img/rooms/solo1.jpg') }}" height="145" width="200">
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12">
                <img src="{{ url('src/img/rooms/couple1.jpg') }}" height="145" width="200">
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12">
                <img src="{{ url('src/img/rooms/barkada1.jpg') }}" height="145" width="200">
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12">
                <img src="{{ url('src/img/rooms/family1.jpg') }}" height="145" width="200">
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

           <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Amenities</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="col-md-offset-3 col-md-6 text-center">
            <label>Wifi</label><br>
            <label>Television</label><br>
            <label>Swimming Pool</label><br>
            <label>Videoke</label><br>
            <label>Bar</label> <br>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

@endsection
