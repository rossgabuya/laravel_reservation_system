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
          <i class="fa fa-user" style="font-size: 7em;"></i>
          <h2>Solo Backpacker</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
          </div>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-3 col-sm-6">
          <div class="packageBox">
          <i class="fa fa-heart" style="font-size: 7em;"></i>
          <h2>Couple Sweethearts</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
          </div>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-3 col-sm-6">
          <div class="packageBox">
          <i class="fa fa-group" style="font-size: 7em;"></i>
          <h2>Barkada Goodtime</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
          </div>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-3 col-sm-6">
          <div class="packageBox">
          <i class="fa fa-users" style="font-size: 7em;"></i>
          <h2>Family Vacation</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
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
