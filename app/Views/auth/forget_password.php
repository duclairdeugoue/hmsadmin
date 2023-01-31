<?= $this->extend('layouts/auth') ?>

<?= $this->section('styles') ?>
<style>

</style>
<?= $this->endSection()  ?>


<?= $this->section('content') ?>
<h1>Forgot Password?</h1>
<p class="account-subtitle">Enter your email to get a password reset link</p>
<form action="<?= base_url() ?>/auth/login">
  <div class="form-group">
    <input class="form-control" type="text" placeholder="Email">
  </div>
  <div class="form-group mb-0">
    <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
  </div>
</form>
<div class="text-center dont-have">Remember your password? <a href="<?= base_url() ?>/auth/login">Login</a></div>
<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
  console.log("testing");
</script>
<?= $this->endSection()  ?>