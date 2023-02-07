<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>Hotel Authentication</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/assets/img/favicon.png">

  <!-- Header assets (external libraries) -->
  <?= $this->include('layouts/_header_assets') ?>

  <!-- Styles -->
  <?= $this->renderSection('styles') ?>

</head>

<body>
  <div class="main-wrapper login-body">
    <div class="login-wrapper">
      <div class="container">
        <div class="loginbox">
          <div class="login-left"> <img class="img-fluid" src="<?= base_url() ?>/assets/img/logo.png" alt="Logo"> </div>
          <div class="login-right">
            <div class="login-right-wrap">
              <?= $this->renderSection('content') ?>
              <?php if (url_is('/auth')) : ?>
                <div class="text-center forgotpass"><a href="<?= base_url() ?>/auth/forget_password">Forgot Password?</a> </div>
              <?php endif ?>

              <?php if (url_is('/auth') || url_is('/auth/register')) : ?>
                <div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
                <div class="social-login">
                  <span>Login with</span>
                  <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="google"><i class="fab fa-google"></i></a>
                </div>
              <?php endif ?>

              <?php if (url_is('/auth/forget_password')) : ?>
                <div class="text-center dont-have">Remember your password? <a href="<?= base_url() ?>/auth">Login</a></div>
              <?php endif ?>

              <?php if (url_is('/auth/register')) : ?>
                <div class="text-center dont-have">Already have an account? <a href="<?= base_url() ?>/auth">Login</a> </div>
              <?php endif ?>

              <?php if (url_is('/auth')) : ?>
                <div class="text-center dont-have">Don’t have an account? <a href="<?= base_url() ?>/auth/register">Register</a></div>
              <?php endif ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer assets (external libraries) -->
  <?= $this->include('layouts/_footer_assets') ?>

  <!-- Scripts -->
  <script>
    $(function() {

      $('#datetimepicker3').datetimepicker({
        format: 'LT'
      });
    });
  </script>
  <?= $this->renderSection('scripts') ?>
</body>

</html>