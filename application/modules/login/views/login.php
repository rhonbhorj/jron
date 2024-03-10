<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= site_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= site_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= site_url() ?>assets/dist/css/adminlte.min.css">

</head>

<body class="hold-transition login-page">

  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <?php if (isset($_SESSION['true'])) { ?>

          <div class="alert alert-success text-center" role="alert"><?php echo $_SESSION['true']; ?></div>

        <?php

        } elseif (isset($_SESSION['false'])) { ?>

          <div class="alert alert-danger text-center" role="alert"><?php echo $_SESSION['false']; ?></div>

        <?php

        } elseif (isset($_SESSION['nopass'])) { ?>

          <div class="alert alert-danger text-center" role="alert"><?php echo $_SESSION['nopass']; ?></div>

        <?php

        } ?>


        <form action="<?= site_url('login/auth'); ?>" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="user" id="user" placeholder="Username">
            <div class="input-group-append" id="one">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
            <div class="input-group-append" id="two">
              <div class="input-group-text">
                <span data-toggle="tooltip" data-placement="right" title="Show Password" id="eye" class="fas fa-eye"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>


      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->


  <!-- jQuery -->
  <script src="<?= site_url() ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= site_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= site_url() ?>assets/dist/js/adminlte.min.js"></script>

  <?php
  if (isset($_SESSION['nopass'])) : ?>
    <script>
      $('#pass').css('background-color', '#FFEFF0');
      $('#two').css('background-color', '#FFEFF0');
    </script>
  <?php endif; ?>

  <?php
  if (isset($_SESSION['false'])) : ?>
    <script>
      $('#user').css('background-color', '#FFEFF0');
      $('#one').css('background-color', '#FFEFF0');
    </script>
  <?php endif; ?>

  <script>
    $(document).ready(function() {

      $('#eye').click(function() {
        if ($('#pass').is(':password')) {
          $('#pass').attr('type', 'text');
          $('#eye').removeClass('fa-eye');
          $('#eye').addClass('fa-eye-slash');
        } else {
          $('#pass').attr('type', 'password');
          $('#eye').addClass('fa-eye');
          $('#eye').removeClass('fa-eye-slash');
        }
      });
    });
  </script>



</body>

</html>