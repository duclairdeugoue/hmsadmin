<?= $this->extend('layouts/auth') ?>

<?= $this->section('styles') ?>
<style>

</style>
<?= $this->endSection()  ?>


<?= $this->section('content') ?>
<h1 class="mb-3">Register</h1>
<form action="<?= base_url() ?>/auth/login">
  <div class="form-group">
    <input class="form-control" type="text" placeholder="Name">
  </div>
  <div class="form-group">
    <input class="form-control" type="text" placeholder="Email">
  </div>
  <div class="form-group">
    <input class="form-control" type="text" placeholder="Password">
  </div>
  <div class="form-group">
    <input class="form-control" type="text" placeholder="Confirm Password">
  </div>
  <div class="form-group mb-0">
    <button class="btn btn-primary btn-block" type="submit">Register</button>
  </div>
</form>
<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
<div class="social-login"> <span>Register with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div>
<div class="text-center dont-have">Already have an account? <a href="<?= base_url() ?>/auth/login">Login</a> </div>
<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
  console.log("testing");
</script>
<?= $this->endSection()  ?>