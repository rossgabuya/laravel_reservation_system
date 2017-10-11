@extends('layouts.system')

@section('title','Reservations')

@section('content')
<!-- Site wrapper -->
<div class="wrapper">
  @include('includes.navigation')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header row">
      <div class="col-md-6">
        <h3>
          Reservations
        </h3>
      </div>
      <div class="col-md-6">
          <a href="{{ url('customer/reserve/new')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> New Reservation</a>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">List of Reservations</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>OR Code</th>
                  <th>Customer Name</th>
                  <th>Particulars</th>
                  <th>Quantity</th>
                  <th>Total Amount</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($transactions as $transaction)
                 <tr>
                  <td>{{ $transaction->transaction_ref }}</td>
                  <td>{{ $transaction->customer->first_name}} {{$transaction->customer->last_name}}</td>
                  <td>{{ $transaction->package->package_name}} : {{ $transaction->room->room_name}}
                  </td>
                  <td>{{ $transaction->days}} days</td>
                  <td>P {{ $transaction->paid_amount}}</td>
                  @if($transaction->status == 1)
                  <td> <span class="label label-success"> paid </span></td>
                  @elseif($transaction->status == 2)
                  <td> <span class="label label-warning"> pending </span></td>
                  @else
                  <td> <span class="label label-danger"> void </span></td>
                  @endif
                </tr>
                @endforeach
               
                </tbody>
                <tfoot>
                <tr>
                  <th>OR Code</th>
                  <th>Customer Name</th>
                  <th>Particulars</th>
                  <th>Quantity</th>
                  <th>Total Amount</th>
                  <th>Status</th>
                </tr>
                </tfoot>
              </table>
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
