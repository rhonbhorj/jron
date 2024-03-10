<body class="hold-transition login-page">

  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Login</b>test</a>
    </div>



    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>


        <div id="errorMessage" class="text-danger text-center mt-2 hold-transition  animate__animated animate__zoomIn animate__faster text-bold" style=" display: none; font-size: 15px;"> </div>

        <form id="doLogin" method="post">



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

            <div class="col-4">
              <button type="submit" id="btnSubmit" class="btn btn-primary btn-block">Sign In</button>
            </div>

          </div>
        </form>


      </div>

    </div>
  </div>



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




  <script>
    $(function() {

      $("#doLogin").submit(function(e) { ///form
        e.preventDefault();



        $("#btnSubmit").css('display', 'none');
        // $("#submit_preloader").css('display', 'inline');
        $("#errorMessage").html('');

        $.ajax({
          url: "<?= site_url('loginajax/login') ?>",
          data: $(this).serialize(),
          dataType: "json",
          type: "post",

          success: function(data) {

            if (data.response == "true") {

              // $("#doLogin")[0].reset();

              $("#submit_preloader").css('display', 'none');
  
              $("#errorMessage").css('display', 'block');
              $("#errorMessage").html(data.errors);

              window.location.href = '<?= site_url('home') ?>';







            } else {


              $("#errorMessage").css('display', 'block');
              $("#errorMessage").html(data.errors);

              // alert("SORRY. " + data.errors);

              $("#btnSubmit").css('display', 'block');
              $("#submit_preloader").css('display', 'none');


            }

          },

        });
      });

    });
  </script>



</body>

</html>