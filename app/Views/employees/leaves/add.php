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
        <h3 class="page-title mt-5">Add Leave</h3>
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
                <option value=""> Select </option>
                <option value="Casual Leave"> Casual Leave </option>
                <option value="Medical leave"> Medical Leave </option>
                <option value="loss of pay"> Loss of Pay </option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>From</label>
              <div class="cal-icon">
                <input type="text" class="form-control datetimepicker">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>To</label>
              <div class="cal-icon">
                <input type="text" class="form-control datetimepicker">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Number Of Days</label>
              <input type="text" class="form-control" id="usr">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Remaining Days</label>
              <input type="text" class="form-control" id="usr1">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Leave Reason</label>
              <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <button type="button" class="btn btn-primary buttonedit mt-5">Send Leave Request</button>
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