<body class="hold-transition login-page">






  <div id="try"> <?= rand(0, 100) ?> <?= $this->session->userdata('level') ?></div>



  <div id="login-QR-code">
    <img src="<?= site_url() ?>assets/qr.php" />
  </div>




  <div class=" login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Login</b>test qr</a>
    </div>



    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>


        <div id="errorMessage" class="text-danger text-center mt-2 hold-transition  animate__animated animate__zoomIn animate__faster text-bold" style=" display: none; font-size: 15px;"></div>

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
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" autocomplete="on">
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

  <style>
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
  </style>

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
    $(document).ready(function() {
      setInterval(function() {
        refresh();
      }, 1000);
    });

    // Functions

    function refresh() {
      $('#try').load(location.href + " #try");



    }
  </script>



  <script>
    $(function() {

      $("#doLogin").submit(function(e) { ///form
        e.preventDefault();


        
        $("#btnSubmit").css('display', 'none');
        // $("#submit_preloader").css('display', 'inline');
        $("#errorMessage").html('');

        $.ajax({
          url: "<?= site_url('loginqr/login') ?>",
          data: $(this).serialize(),
          dataType: "json",
          type: "post",

          success: function(data) {

            if (data.response === "true") {

              // $("#doLogin")[0].reset();

              $("#submit_preloader").css('display', 'none');

              $("#errorMessage").css('display', 'block');
              $("#errorMessage").html(data.errors);
              console.log(data);



              window.location.href = '<?= site_url('home') ?>';



            } else {


              // console.log(data.errors);
              // alert("SORRY. " + darors);
              $("#errorMessage").css('display', 'block');
              $("#errorMessage").html(data.errors);



              $("#btnSubmit").css('display', 'block');
              // $("#submit_preloader").css('display', 'none');
              // alert("SORRY. " + darors);

            }

          },

        });
      });

    });
  </script>

  <h1>The Window Location Object</h1>
  <h2>The reload Property</h2>

  <!-- <script>
  setInterval(function() {
    ("#doLogin").location.reload();
  }, 1000);
</script> -->

</body>

</html>