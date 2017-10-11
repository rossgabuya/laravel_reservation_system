<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Reservation Slip</title>
    <link rel="stylesheet" href="{{asset('src/css/bootstrap.css')}}">
    <style media="screen">
    .table th, .table td {
     border-top: none !important;
    }
    </style>
  </head>

  <body>
    <div class="container">
      <div class="row">
        <table class="table">
          <tr>
            <td colspan="2"></td>
            <td class="text-right"><strong>Hotel Reservation</strong></td>
          </tr>
        </table>

      </div>
      <br>

      <div class="row">
          <table class="table">
            <tr>
              <td rowspan="3">Invoiced to :<br>
                <br>{{ $transactions->customer->first_name }} {{ $transactions->customer->last_name }}
                <br><i>{{$transactions->customer->email }}</i>
                <br>
              </td>
                <td rowspan="3" class="text-right">Invoice Date : {{ $transactions->date_printed}}<br>
                </td>
                <td rowspan="3">
                </td>

              </tr>

          </table>
      </div>

      
      <!-- / end client details section -->
      <div class="row">
      <table class="table">
        <tbody>
          <tr>
            <td><strong>Transaction Reference ID </strong></td>
            <td class="text-right"><strong>{{ $transactions->transaction_ref}} </strong></td>
          </tr>
          <tr>
            <td><strong>Paid through </strong>{{ ucfirst($transactions->payment_method)}}</td>
            <td class="text-right"><strong>Php {{number_format($transactions->paid_amount,2,'.',',')}} </strong></td>
          </tr>
          <tr>
            <td><strong>Package</strong></td>
            <td class="text-right">{{ $transactions['package_detail']->package_name}}</td>
          </tr>
          <tr>
            <td><strong>Room</strong></td>
            <td class="text-right">{{ $transactions['room_detail']->room_name}}</td>
          </tr>
          <tr>
            <td><strong>Check In</strong></td>
            <td class="text-right">{{ $transactions->start_date}}</td>
          </tr>
          <tr>
            <td><strong>Check Out</strong></td>
            <td class="text-right">{{ $transactions->end_date}}</td>
          </tr>
          <tr>
            <td><strong>Amount billed</strong></td>
            <td class="text-right"><strong>Php {{ $transactions->paid_amount }}</strong></td>
          </tr>
        </tbody>
      </table>
      </div>
<br><br><br><br><br><br><br><br>
      <table>
        <tr>
          <td style="border-top:solid #282828;">
            Report was computer-generated and is valid without the signature and seal.<i> </i>
          </td>
        </tr>
      </table>
    </div><!-- /Container -->
  </body>
</html>