
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/'); ?>img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    <?= $title ?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= base_url('assets/'); ?>css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url('assets/'); ?>demo/demo.css" rel="stylesheet" />
  
</head>

<body class="">
  <div class="wrapper ">
<section class="section">
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        <div class="text-center mb-2">
        </div>

        <div style="border-top:2px solid #f96332;" class="card">
          <div class="card-header">
            <h4>Login</h4>
          </div>
          <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
            <form method="POST" action="<?= base_url('auth/proses_login') ?>" class="needs-validation" novalidate="">
              <div class="form-group">
                <label for="nama">username</label>
                <input id="nama" type="text" class="form-control" value="<?= set_value('nama'); ?>" name="nama" required autofocus>
                <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>'); ?>
                <div class="invalid-feedback">
                  username harus di isi
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                  <div class="float-right">
                    <a href="auth-forgot-password.html" class="text-small">
                      Forgot Password?
                    </a>
                  </div>
                </div>
                <input id="password" type="password" class="form-control" name="password" required>
                <div class="invalid-feedback">
                  Password harus di isi
                </div>
              </div>

              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
                  <label class="custom-control-label" for="remember-me">Remember Me</label>
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="text-white btn btn-primary btn-block">
                  Login
                </button>
              </div>
            </form>
            <div class="text-center mt-4 mb-3">

            </div>
            <div class="row sm-gutters">

            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>
</div>

</div>
<footer class="footer">
  <div class=" container-fluid ">
    <nav>
      <ul>
        <li>
          <a href="https://www.creative-tim.com">
            Creative Tim
          </a>
        </li>
        <li>
          <a href="http://presentation.creative-tim.com">
            About Us
          </a>
        </li>
        <li>
          <a href="http://blog.creative-tim.com">
            Blog
          </a>
        </li>
      </ul>
    </nav>
    <div class="copyright" id="copyright">
      &copy; <script>
        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
      </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
    </div>
  </div>
</footer>
</div>
</div>
<!--   Core JS Files   -->
<script src="<?= base_url('assets/'); ?>js/core/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/core/popper.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/core/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="<?= base_url('assets/'); ?>js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?= base_url('assets/'); ?>js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url('assets/'); ?>js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="<?= base_url('assets/'); ?>demo/demo.js"></script>
<script src="<?= base_url('assets/'); ?>js/app.js"></script>
<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    demo.initDashboardPageCharts();

  });
</script>
</body>

</html>