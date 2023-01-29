<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>Hotel Dashboard Template</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/assets/img/favicon.png">
  <?= $this->include('layouts/_header_assets') ?>
</head>

<body>
  <div class="main-wrapper">
    <?= $this->include('layouts/_navbar') ?>
    <?= $this->include('layouts/_sidebar') ?>
    <div class="page-wrapper">
      <?= $this->renderSection('content') ?>
    </div>
  </div>
  <?= $this->include('layouts/_footer_assets') ?>
</body>

</html>