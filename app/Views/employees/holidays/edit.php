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
        <h3 class="page-title mt-5">Edit Holiday</h3>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <form>
        <div class="row formtype">
          <div class="col-md-4">
            <div class="form-group">
              <label>Holiday Name</label>
              <input class="form-control" type="text" value="New Year" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Holiday Date</label>
              <div class="cal-icon">
                <input type="text" class="form-control datetimepicker" />
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>No Of Holidays</label>
              <input class="form-control" type="text" value="30" />
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <button type="button" class="btn btn-primary buttonedit">
    Edit Holiday
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