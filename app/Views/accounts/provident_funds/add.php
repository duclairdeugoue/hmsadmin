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
        <h3 class="page-title mt-5">Add Provident Fund</h3>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <form>
        <div class="row formtype">
          <div class="col-md-4">
            <div class="form-group">
              <label>Employee Name</label>
              <select class="form-control" id="sel1" name="sellist1">
                <option>Select</option>
                <option>John Doe</option>
                <option>Richard Miles</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Provident fund Type</label>
              <select class="form-control" id="sel2" name="sellist1">
                <option>Select</option>
                <option>Fixed Amount</option>
                <option>Percentage of Basic Salary</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Employee Share(Amount)</label>
              <input type="text" class="form-control" id="usr">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Organization Share(Amount)</label>
              <input type="text" class="form-control" id="usr1">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Employee Share(%)</label>
              <input type="text" class="form-control" id="usr2">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Organization Share(%)</label>
              <input type="text" class="form-control" id="usr3">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <button type="button" class="btn btn-primary buttonedit mt-5">Save</button>
</div>
<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
  console.log("testing");
</script>
<?= $this->endSection()  ?>