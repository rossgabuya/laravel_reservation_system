@extends('layouts.system')

@section('title','Settings')

@section('content')
<!-- Site wrapper -->
<div class="wrapper">
  @include('includes.navigation')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Settings
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">General</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="" class="form-horizontal col-lg-8 col-lg-offset-2">
              <div class="form-group">
                <label for="first_name" class="col-lg-3 control-label"> First Name :</label>

                <div class="col-lg-6">
                  <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                </div>
              </div>
              <div class="form-group">
                <label for="last_name" class="col-lg-3 control-label"> Last Name :</label>

                <div class="col-lg-6">
                  <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                </div>
              </div>
              <div class="form-group">
                <label for="birthday" class="col-lg-3 control-label"> Birthday :</label>

                <div class="col-lg-6">
                  <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Birthday">
                </div>
              </div>
              <div class="form-group">
                <label for="address" class="col-lg-3 control-label"> Address :</label>

                <div class="col-lg-6">
                  <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                </div>
              </div>

              <div class="col-lg-offset-3 col-lg-6">
                <input type="submit" value="Submit" class="btn btn-primary pull-right">
              </div>
            </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Billing</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="" class="form-horizontal col-lg-8 col-lg-offset-2">
            <div class="form-group">
              <label class="col-lg-3 control-label"> Payment Method :</label>
              <div class="col-lg-6">
                  <div class="radio">
                    <label>
                      <input type="radio" name="payment_method" id="paypal" value="paypal" checked="">
                      Paypal
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="payment_method" id="credit_card" value="credit_card">
                        Credit Card
                    </label>
                  </div>
              </div>
            </div>

              <div class="col-lg-offset-3 col-lg-6">
                <input type="submit" value="Submit" class="btn btn-primary pull-right">
              </div>

          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

        <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Account</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="" class="form-horizontal col-lg-8 col-lg-offset-2">
             <div class="form-group">
                <label for="contact_no" class="col-lg-3 control-label"> Contact Number :</label>

                <div class="col-lg-6">
                  <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Contact Number">
                </div>
              </div>
              <div class="form-group">
                <label for="last_name" class="col-lg-3 control-label"> Email :</label>

                <div class="col-lg-6">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="verify_password" class="col-lg-3 control-label">Password verify :</label>

                <div class="col-lg-6">
                  <input type="password" class="form-control" id="verify_password" name="verify_password" placeholder="Verify Password">
                </div>
              </div>
              <div class="col-lg-offset-3 col-lg-6">
                <input type="submit" value="Submit" class="btn btn-primary pull-right">
              </div>
              </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

        <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Change Password</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="" class="form-horizontal col-lg-8 col-lg-offset-2">
             <div class="form-group">
                <label for="current_password" class="col-lg-3 control-label"> Current Password :</label>

                <div class="col-lg-6">
                  <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Current Password">
                </div>
              </div>
              <div class="form-group">
                <label for="new_password" class="col-lg-3 control-label"> New Password :</label>

                <div class="col-lg-6">
                  <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New Password">
                </div>
              </div>
              <div class="form-group">
                <label for="retype_password" class="col-lg-3 control-label">Re-type Password :</label>

                <div class="col-lg-6">
                  <input type="password" class="form-control" id="retype_password" name="password_confirmation" placeholder="Re-type Password">
                </div>
              </div>
              <div class="col-lg-offset-3 col-lg-6">
                <input type="submit" value="Submit" class="btn btn-primary pull-right">
              </div>
              </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

@endsection
