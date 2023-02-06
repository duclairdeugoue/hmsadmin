<?= $this->extend('layouts/auth') ?>

<?= $this->section('styles') ?>
<style>

</style>
<?= $this->endSection()  ?>


<?= $this->section('content') ?>
<h1>Login</h1>
<p class="account-subtitle">Access to our dashboard</p>
<form action="<?= base_url() ?>/dashboard">
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

<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
  
</script>
<?= $this->endSection()  ?>