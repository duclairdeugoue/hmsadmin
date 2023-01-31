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
        <h3 class="page-title mt-5">Edit Expense</h3>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <form>
        <div class="row formtype">
          <div class="col-md-4">
            <div class="form-group">
              <label>Item Name</label>
              <input class="form-control" type="text" value="Jim machine" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Purchase From</label>
              <input class="form-control" type="text" value="Jim Equipment Inc" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Purchase Date</label>
              <div class="cal-icon">
                <input type="text" class="form-control datetimepicker" />
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Purchased By</label>
              <select class="form-control" id="sel1" name="sellist1">
                <option>Daniel Porton</option>
                <option>Roger Dixon</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Amount</label>
              <input class="form-control" type="text" value="$62480" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Paid By</label>
              <select class="form-control" id="sel2" name="sellist1">
                <option>Cash</option>
                <option>Cheque</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Status</label>
              <select class="form-control" id="sel3" name="sellist1">
                <option>Pending</option>
                <option>Approved</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Attachments</label>
              <input class="form-control" type="file" />
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
  console.log("testing");
</script>
<?= $this->endSection()  ?>