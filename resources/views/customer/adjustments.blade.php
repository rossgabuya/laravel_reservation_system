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
        <b>Step 3 :</b> Adjust your reservation
      </h1>
    </section>

    <!-- Main content -->
    <section class="container text-center">
      <form action="{{ url('customer/reserve/preview') }}" method="post">
      <div class="col-md-12  reserveBox">
      
        <div class="col-md-3 col-sm-3 col-xs-12">
          <img src="{{ url('src/img/rooms/'.$details->room_image) }}" height="145" width="200">
        </div>
        <div class="col-md-5 col-sm-offset-1 col-sm-8 col-xs-12 ">
          <h4>{{ $details->room_name }}</h4>
          <ul>
            <li>Capacity : {{ $details->capacity }} person(s)</li>
            <li>Price : P <span id="price">{{ $details->price }}</span></li>
            <li>Available : {{ $details->available_units }}</li>
          </ul>
          <div class="alert alert-success">
            <p>This package includes free breakfast meal and room service.</p>
          </div>
        </div>
      </div>

      <div class="col-md-12 reserveBoxDetails">
        <div class="row" style="margin-right: .5em;margin-left: .5em">
          <div class="col-md-6 well" id="arrival_details">

            <h4>Arrival Details</h4>
             <div class="form-group">
                  <label for="total_no_days" class="col-lg-4 control-label"> Number of days :</label>

                  <div class="col-lg-8">
                      <input type='number' class="form-control" id='total_no_days' name="no_days" value="1" />
                  </div>
            </div>
            <div class="form-group">
                  <label for="check_in" class="col-lg-4 control-label"> Check In :</label>

                  <div class="col-lg-8">
                    <div class='input-group date' id='check_in'>
                      <input type='text' class="form-control" id='checkin_date' name="checkin_date" />
                      <span class="input-group-addon">
                          <span class="fa fa-calendar"></span>
                      </span>
                    </div>
                  </div>
            </div>
            <br>
            <br>
            <div class="form-group">
                  <label for="check_out" class="col-lg-4 control-label"> Check Out :</label>

                  <div class="col-lg-8">
                    <div class='input-group date' id='check_out'>
                      <input type='text' class="form-control" id='checkout_date' name='checkout_date' readonly />
                      <span class="input-group-addon">
                          <span class="fa fa-calendar"></span>
                      </span>
                    </div>
                  </div>
            </div>
            <br>
            <br>
            <h4>Payment Details</h4>
            <div class="form-group">
                  <label for="total_amount" class="col-lg-4 control-label"> Total Amount :</label>

                  <div class="col-lg-8">
                    <input type="number" class="form-control" id="total_amount" name="total_amount" value="{{ $details->price }}">
                  </div>
            </div>
            <br>
            <div class="form-group">
              <label class="col-lg-4 control-label"> Payment Method :</label>
              <div class="col-lg-8">
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

          
          </div>
          <div class="col-md-offset-1 col-md-5 well">
          <h4>Amenities</h4>
          <input type="checkbox" name="amenities[]" value="1"> Wifi <br>
          <input type="checkbox" name="amenities[]" value="2"> Television <br>
          <input type="checkbox" name="amenities[]" value="3"> Swimming Pool <br>
          <input type="checkbox" name="amenities[]" value="4"> Videoke Set <br>
          <input type="checkbox" name="amenities[]" value="5"> Bar <br>

            
          </div>
        </div>
        <div class="row" style="margin-right: .5em;margin-left: .5em">
          <div class="col-md-12 well">
          <h4>Additional Remarks :</h4>
          <textarea class="col-md-12 form-control" name="remarks"></textarea>
          
          </div>
        </div>
        
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

</div>

<script type="text/javascript">
    $(function () {
        var no_days = 1;
        var price = $('#price').text();
        var total_price = price;
        $('#check_in').datetimepicker({
          useCurrent : true
        });
        $('#check_out').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#check_in").on("dp.change", function (e) {
            no_days = $('#total_no_days').val();
            total_price = price*no_days;
            $('#check_out').data("DateTimePicker");
            $('#checkout_date').val(e.date.add(no_days,'day').format('MM/DD/YYYY hh:mm A'));
            $('#total_amount').val(total_price);
        });
        
    });
</script>


@endsection
