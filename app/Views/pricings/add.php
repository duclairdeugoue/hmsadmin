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
        <h3 class="page-title mt-5">Add Pricing</h3>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <form>
        <div class="row formtype">
          <div class="col-md-4">
            <div class="form-group">
              <label>Pricing Name</label>
              <input class="form-control" type="text" value="single">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Pricing Amount</label>
              <input type="text" class="form-control" id="usr">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Pricing Amount</label>
              <input type="text" class="form-control" id="usr1">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Pricing Amount</label>
              <input type="text" class="form-control" id="usr2">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Pricing Amount</label>
              <input type="text" class="form-control" id="usr3">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Pricing Description</label>
              <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <button type="button" class="btn btn-primary buttonedit mt-5">Publish Pricing</button>
</div>
<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
  	$(function() {
		$('#datetimepicker3').datetimepicker({
			format: 'LT'
		});
	});
</script>
<?= $this->endSection()  ?>