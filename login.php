<?php
if(isset($_POST["submit"])) {
    $pesan_error="";
    $username=htmlentities(strip_tags(trim($_POST["username"])));
    $password=htmlentities(strip_tags(trim($_POST["password_user"])));
    include("connection.php");
    $username=mysqli_real_escape_string($link,$username);
    $password=mysqli_real_escape_string($link,$password);
    $query="SELECT * FROM user WHERE username='$username' AND password_user='$password'";
    $result=mysqli_query($link,$query);
    $data = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0) {

      if ($data['role_user'] == 'admin') {
          session_start();
          $_SESSION['username'] = $data['username'];
          // $data['level'] level digunaan untu memanggil value level dari username yang telah login dan disimpan dalam $_SESSION['level']
          $_SESSION['role_user']    = $data['role_user'];
          echo "<script>alert('Selamat Datang, Admin.');document.location.href='index.php?page=home&aksi'</script>";

      }elseif($data['role_user'] == 'petugas'){
          session_start();
          $_SESSION['username'] = $data['username'];
          // $data['level'] level digunaan untu memanggil value level dari username yang telah login dan disimpan dalam $_SESSION['level']
          $_SESSION['role_user']    = $data['role_user'];
          echo "<script>alert('Selamat Datang, User.');document.location.href='index_user.php?page=home&aksi'</script>";
      }
  }else{
      header("location:index.php");
  }
}
?>


<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="asset/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body style="background-image: url(asset/img/bg.png)" class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <h3><img src="asset/img/logo2.png" width="150px"></h3>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">LOGIN</p>

    <form action="login.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username" >
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password_user" >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
        <button type="submit" class="btn btn-primary btn-block btn" name="submit" >Log In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>




  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
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
