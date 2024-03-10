<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lucky 8 Star Quest Inc. | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= site_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= site_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= site_url() ?>assets/dist/css/adminlte.min.css">




</head>




<div id="login-box">
  <div id="login-box-sub">
    <div id="login-box-sub-sub">
      <h3>Welcome back!</h3>
      <p>We are so excited to see you again!</p>
      <form id="doLogin">



        <div class="input-group mb-3">
          <input type="text" class="form-control" name="user" id="user" placeholder="Username">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
          <div class="input-group-append" id="two">
            <!-- <div class="input-group-text"> -->
            <span data-toggle="tooltip" data-placement="right" title="Show Password" id="eye" class="fas fa-eye passcode"></span>
            <!-- </div> -->
          </div>
        </div>
        <a>Forgot your password?</a>
        <button id="login-btn">Login</button>
      </form>
      <p id="login-register">Need an account? <a href="./register">Register</a></p>
    </div>
    <div id="login-box-sub-sub-2">
      <div id="login-QR-code">
        <img src=<?= site_url('assets/qr.php') ?> />
      </div>
      <h3>Login with QR code</h3>
      <p>Scan this with <b>mobile app</b> to log in instantly.</p>
    </div>
  </div>
</div>`


</html>

<!-- jQuery -->
<script src="<?= site_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= site_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= site_url() ?>assets/dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function() {

    $('#eye').click(function() {
      if ($('#pass').is(':password')) {
        $('#pass').attr('type', 'text');
        $('#eye').removeClass('fa-eye ');
        $('#eye').addClass('fa-eye-slash');
      } else {
        $('#pass').attr('type', 'password');
        $('#eye').addClass('fa-eye');
        $('#eye').removeClass('fa-eye-slash');
      }
    });
  });
</script>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@600&display=swap');

  #login-box {
    /* background-image: url(../Images//discord_login_background.png); */
    background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    justify-content: center;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  }

  #login-box-sub {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    background-color: rgb(40, 40, 40);
    color: white;
    border-radius: 1rem;
    padding: 0.5rem 1rem;
  }

  #login-box-sub-sub {
    display: flex;
    flex-direction: column;
    width: 16rem;
    padding: 1rem 0.5rem;
  }

  #login-box-sub-sub h3 {
    font-family: 'Heebo', sans-serif;
    font-size: 2rem;
  }

  #login-box-sub-sub p {
    color: rgb(2305, 235, 235);
    font-size: 0.8rem;
  }

  #login-box-sub-sub label {
    font-family: 'Heebo', sans-serif;
    font-size: 1rem;
  }

  #login-QR-code {
    background-color: white;
    width: 10rem;
    height: 10rem;
    border-radius: 1rem;
  }

  #login-QR-code img {
    width: 9rem;
    height: 9rem;
    margin: 0.5rem;
  }

  #login-box-sub-sub a {
    color: #00b7ff;
    font-size: 0.85rem;
    cursor: pointer;
  }

  #login-box-sub-sub a:hover {
    text-decoration: underline;
  }

  #login-box-sub-sub input {
    background-color: rgb(60, 60, 60);
    border: none;
    outline: none;
    color: white;
    font-family: 'Heebo', sans-serif;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    height: 1.7rem;
  }

  #login-btn {
    background-color: rgb(78, 78, 255);
    font-family: 'Heebo', sans-serif;
    border-radius: 1rem;
    border: none;
    height: 2.5rem;
    color: white;
    cursor: pointer;
    margin-top: 2rem;
    margin-bottom: 1rem;
    margin-right: 0.4rem;
    margin-left: 0.4rem;
    transition: 0.5s;
    font-size: 1.15rem;
  }

  #login-btn:hover {
    transform: scale(1.1);
  }

  #doLogin {
    margin-top: 1.5rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  #login-box-sub-sub-2 {
    width: 16rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  #login-box-sub-sub-2 h3 {
    margin: 1rem 0;
  }

  #login-register a {
    text-decoration: none;
  }
</style>