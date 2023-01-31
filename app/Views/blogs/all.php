<?= $this->extend('layouts/app') ?>

<?= $this->section('styles') ?>
<style>

</style>
<?= $this->endSection()  ?>


<?= $this->section('content') ?>
<div class="content container-fluid">
  <div class="page-header">
    <div class="row align-items-center">
      <div class="col">
        <div class="mt-5">
          <h4 class="card-title float-left mt-2">Blog</h4> <a href="<?= base_url() ?>/blogs/add" class="btn btn-primary float-right veiwbutton">Add Blog</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card"> <img class="card-img" src="<?= base_url() ?>/assets/img/product/product-01.jpg" alt="">
        <div class="card-img-overlay"> <a href="#" class="btn btn-light btn-sm">Hotel</a> </div>
        <div class="card-body">
          <h4 class="card-title">adipiscing elit, sed do eiusmod?</h4>
          <p class="card-text mt-3">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor incididunt ut labore etmis dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit laboris. </p> <a href="#" class="btn btn-info">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card"> <img class="card-img" src="<?= base_url() ?>/assets/img/product/product-02.jpg" alt="">
        <div class="card-img-overlay"> <a href="#" class="btn btn-light btn-sm">Hotel</a> </div>
        <div class="card-body">
          <h4 class="card-title">quis nostrud exercitation ullamco?</h4>
          <p class="card-text mt-3">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor incididunt ut labore etmis dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit laboris. </p> <a href="#" class="btn btn-info">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card"> <img class="card-img" src="<?= base_url() ?>/assets/img/product/product-03.jpg" alt="">
        <div class="card-img-overlay"> <a href="#" class="btn btn-light btn-sm">Hotel</a> </div>
        <div class="card-body">
          <h4 class="card-title">sed do eiusmod tempor incididunt?</h4>
          <p class="card-text mt-3">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor incididunt ut labore etmis dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit laboris. </p> <a href="#" class="btn btn-info">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
  console.log("testing");
</script>
<?= $this->endSection()  ?>