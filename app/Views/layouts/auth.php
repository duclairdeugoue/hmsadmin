<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>Hotel Dashboard Template</title>
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