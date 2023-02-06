<?= $this->extend('layouts/auth') ?>

<?= $this->section('styles') ?>
<style>

</style>
<?= $this->endSection()  ?>


<?= $this->section('content') ?>
<h1>Login</h1>
<p class="account-subtitle">Access to our dashboard</p>
<form action="<?= base_url() ?>/dashboard/dashboard">
  <div class="form-group">
    <input class="form-control" type="email" placeholder="Email">
  </div>
  <div class="form-group">
    <input class="form-control" type="password" placeholder="Password">
  </div>
  <div class="form-group">
    <button class="btn btn-primary btn-block" type="submit">Login</button>
  </div>
</form>
<!-- <div class="text-center forgotpass"><a href="<?= base_url() ?>/auth/forget_password">Forgot Password?</a> </div>
<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
<div class="social-login">
  <span>Login with</span>
  <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
  <a href="#" class="google"><i class="fab fa-google"></i></a>
</div>
<div class="text-center dont-have">Don’t have an account? <a href="<?= base_url() ?>/auth/register">Register</a></div> -->
<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
  
</script>
<?= $this->endSection()  ?>