
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DreamBricks Realty</title>
  <META Http-Equiv="Pragma" Content="no-cache">
    <META Http-Equiv="Expires" Content="0">
    <META Http-Equiv="Cache-Control" Content="no-cache">
  <!-- iCheck -->
  <link rel="stylesheet" href="/css/blue.css">

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
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>User Login</b> 
  </div>
  <!-- /.login-logo -->

  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    @if (session('danger'))
    <div class="alert alert-danger" role="alert">
      {{ session('danger') }}
    </div>
    
  @endif
    <form action="/admin-login" method="post">
      
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="fa fa-lock form-control-feedback"></span>
      </div>
      <div class="row">
        @csrf
       {{-- {{sha1(base64_encode(123456789))}}  --}}
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
      
    </form>

   
    <!-- /.social-auth-links -->
<br>
    <a href="/password-reset">Change password</a>
    {{-- <a href="/register" class="text-center">Register a new membership</a> --}}

  </div>
  <!-- /.login-box-body -->
</div>

<!-- /.login-box -->
<!-- jQuery 3 -->
<script src="/vendor/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/vendor/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/vendor/js/adminlte.min.js"></script>


<!-- iCheck -->
<script src="/vendor/js/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
