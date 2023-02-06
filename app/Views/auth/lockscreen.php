<?= $this->extend('layouts/auth') ?>

<?= $this->section('styles') ?>
<style>

</style>
<?= $this->endSection()  ?>


<?= $this->section('content') ?>
<div class="lock-user">
  <img class="rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="User Image" />
  <h4>John Doe</h4>
</div>

<form action="<?= base_url() ?>/dashboard">
  <div class="form-group">
    <input class="form-control" type="text" placeholder="Password" />
  </div>
  <div class="form-group mb-0">
    <button class="btn btn-primary btn-block" type="submit">
      Enter
    </button>
  </div>
</form>

<div class="text-center dont-have">
  Sign in as a different user? <a href="<?= base_url() ?>/">Login</a>
</div>
<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
  console.log("testing");
</script>
<?= $this->endSection()  ?>