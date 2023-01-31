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
        <h3 class="page-title mt-5">Edit Provident Fund</h3>
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
                <option>John Doe (FT-001)</option>
                <option>Richard Miles (FT-0002)</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Provident Fund Type</label>
              <select class="form-control" id="sel2" name="sellist1">
                <option>Fixed Amount</option>
                <option>Percentage of basic salary</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Employee Share(Amount)</label>
              <input class="form-control" type="text" value="" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Organization Share(Amount)</label>
              <input class="form-control" type="text" value="" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Employee Share (%)</label>
              <input class="form-control" type="text" value="2%" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Organization Share (%)</label>
              <input class="form-control" type="text" value="2%" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control"></textarea>
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