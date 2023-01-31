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
        <h3 class="page-title mt-5">New Expense</h3>
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
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Purchase From</label>
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Purchase Date</label>
              <div class="cal-icon">
                <input type="text" class="form-control datetimepicker">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Purchased By</label>
              <select class="form-control" id="sel1" name="sellist1">
                <option>Select</option>
                <option>Daniel Porter</option>
                <option>Terry Baker</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Amount</label>
              <input class="form-control" type="text" value="$50">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Paid By</label>
              <select class="form-control" id="sel2" name="sellist1">
                <option>Select</option>
                <option>Cash</option>
                <option>Cheque</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Status</label>
              <select class="form-control" id="sel3" name="sellist1">
                <option>Select</option>
                <option>Pending</option>
                <option>Approved</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>File Upload</label>
              <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="customFile" name="filename">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <button type="button" class="btn btn-primary buttonedit mt-5">Create Expense</button>
</div>
<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
  console.log("testing");
</script>
<?= $this->endSection()  ?>