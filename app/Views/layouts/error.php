<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>Hotel Dashboard Template</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/assets/img/favicon.png">
  <?= $this->include('layouts/_header_assets') ?>
</head>

<body class="error-page">
  <div class="main-wrapper">
    <div class="error-box">
      <?= $this->renderSection('content')?>
    </div>
  </div>


  <?= $this->include('layouts/_footer_assets') ?>
</body>

</html>