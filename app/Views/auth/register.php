<?= $this->extend('layouts/auth') ?>

<?= $this->section('styles') ?>
<style>

</style>
<?= $this->endSection()  ?>


<?= $this->section('content') ?>
<h1 class="mb-3">Register</h1>
<form action="<?= base_url() ?>/auth">
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
<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
  console.log("testing");
</script>
<?= $this->endSection()  ?>