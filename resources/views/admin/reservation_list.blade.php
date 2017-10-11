@extends('layouts.system')

@section('title','Reservations')

@section('content')
<!-- Site wrapper -->
<div class="wrapper">
  @include('includes.navigation')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h3>Reservations</h3>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">List of Pending Reservations</h3>

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
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($transactions) > 0)
                @foreach($transactions as $transaction)
                 <tr>
                  <td>{{ $transaction->transaction_ref }}</td>
                  <td>{{ $transaction->customer->first_name}} {{$transaction->customer->last_name}}</td>
                  <td>{{ $transaction->package->package_name}} : {{ $transaction->room->room_name}}
                  </td>
                  <td>{{ $transaction->days}} days</td>
                  <td>P {{ $transaction->paid_amount}}</td>
                  @if($transaction->status == 2)
                  <td> <a href="{{ url('admin/reserve/confirm/'.$transaction->id.'/'.$transaction->transaction_ref) }}" class="btn btn-info confirm"> <span class="fa fa-check"></span> </a><a href="{{ url('admin/reserve/void/'.$transaction->id.'/'.$transaction->transaction_ref) }}" class="btn btn-danger void"><span class="fa fa-close"></span></a></td>
                  @endif
                </tr>
                @endforeach
                @else

                <tr>
                  <td colspan="6"> <h4> No pending reservations </h4></td>
                </tr>
                @endif
               
                </tbody>
                <tfoot>
                <tr>
                  <th>OR Code</th>
                  <th>Customer Name</th>
                  <th>Particulars</th>
                  <th>Quantity</th>
                  <th>Total Amount</th>
                  <th>Action</th>
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
