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
        <h3 class="page-title mt-5">Edit Pricing</h3>
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
              <input class="form-control" type="text" value="Single" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Pricing Amount</label>
              <input class="form-control" type="text" value="$15" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Pricing Description</label>
              <textarea cols="30" rows="6" class="form-control"></textarea>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="display-block">Pricing Status</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="pricing_active" value="option1" checked />
                <label class="form-check-label" for="pricing_active">
                  Active
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="pricing_inactive" value="option2" />
                <label class="form-check-label" for="pricing_inactive">
                  Inactive
                </label>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <button type="button" class="btn btn-primary buttonedit">
    Save Changes
  </button>
</div>
<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
  $(function() {
    $("#datetimepicker3").datetimepicker({
      format: "LT",
    });
  });
</script>
<?= $this->endSection()  ?>