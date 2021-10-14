
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  {{-- <script>
    var key=localStorage.getItem('logout_item');
    if(key =='expired'){
      window.history.forward();
    }
    </script> --}}
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GIP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="/vendor/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/vendor/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/vendor/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/vendor/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="/vendor/css/skin-blue.min.css">
 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="/vendor/css/ionicons.min.css">
 
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      {{-- <span class="logo-lg"><b>Admin</b>LTE</span> --}}
    <h5>Welcome, </h5>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
     
      <div class="navbar-custom-menu" style="margin-right:5px;margin-top:10px;margin-left:5px">
          <ul class="nav navbar-nav">
         
               {{-- Activities Due (Schedule) --}}
                
              <li>
                <a href="/logout" style="color:white" id="logout"><i class="fa fa-sign-out"></i> Logout</a>
              </li>
          </ul>
          
       
      </div>
    </nav>
  </header>


  @yield('content')

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
     
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; {{date("Y")}} .</strong> All rights reserved.
  </footer>

 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="/vendor/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/vendor/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/vendor/js/adminlte.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="/vendor/js/price.js"></script>
<script src="/vendor/js/conversation.js"></script>
<script src="/vendor/js/profile.js"></script>
<script>
  $(document).ready(function() {
      $('.select2').select2();
  });
  </script>
 
 
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
     <script>

     </script>
</body>
</html>