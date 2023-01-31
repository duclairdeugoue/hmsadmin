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
        <h3 class="page-title mt-5">Edit Leave</h3>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <form>
        <div class="row formtype">
          <div class="col-md-4">
            <div class="form-group">
              <label>Leave Type</label>
              <select class="form-control" id="sel1" name="sellist1">
                <option>Select Leave Type</option>
                <option>Casual Leave 12 days</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>From</label>
              <div class="cal-icon">
                <input type="text" class="form-control datetimepicker" />
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>To</label>
              <div class="cal-icon">
                <input type="text" class="form-control datetimepicker" />
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Number Of Days</label>
              <input class="form-control" type="text" value="2" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Remaining Leaves</label>
              <input class="form-control" type="text" value="12" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Leave Reason <span class="text-danger">*</span></label>
              <textarea rows="4" cols="5" class="form-control">Going to hospital</textarea>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <button type="button" class="btn btn-primary buttonedit">Save</button>
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