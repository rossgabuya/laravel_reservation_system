
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title') | Hotel Reservation System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ url('src/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('src/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url('src/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('src/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ url('src/css/skin-black.css')}}">
  <link rel="stylesheet" href="{{ url('src/css/carousel.css')}}">

  <link rel="stylesheet" href="{{ url('src/css/dataTables.bootstrap.css')}}">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-black">

@yield('content')
<!-- jQuery 2.2.3 -->
<script src="{{ url('src/js/jquery.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ url('src/js/bootstrap.min.js')}}"></script>

<script src="{{ url('src/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('src/js/dataTables.bootstrap.js')}}"></script>

<!-- SlimScroll -->
<script src="{{ url('src/js/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ url('src/js/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ url('src/js/app.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>

</body>
</html>