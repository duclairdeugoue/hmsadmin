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
  <div class="main-wrapper">
    <!-- Navbar -->
    <?= $this->include('layouts/_navbar') ?>

    <!-- Sidebar -->
    <?= $this->include('layouts/_sidebar') ?>

    <div class="page-wrapper">

      <!-- Main content -->
      <?= $this->renderSection('content') ?>
    </div>
  </div>
  <!-- Footer assets (external libraries) -->
  <?= $this->include('layouts/_footer_assets') ?>

  <!-- Scripts -->
  <?= $this->renderSection('scripts') ?>
</body>

</html>