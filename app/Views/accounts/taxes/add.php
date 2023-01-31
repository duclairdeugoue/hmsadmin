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
        <h3 class="page-title mt-5">Add Tax</h3>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <form>
        <div class="row formtype">
          <div class="col-md-4">
            <div class="form-group">
              <label>Tax Name</label>
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Tax Percentage(%)</label>
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Status</label>
              <select class="form-control" id="sel1" name="sellist1">
                <option>Select</option>
                <option>Pending</option>
                <option>Approved</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>AC/NON-AC</label>
              <select class="form-control" id="sel2" name="sellist1">
                <option>Select</option>
                <option>AC</option>
                <option>NON-AC</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Food</label>
              <select class="form-control" id="sel3" name="sellist1">
                <option>Select</option>
                <option>Free Breakfast</option>
                <option>Free Lunch</option>
                <option>Free Dinner</option>
                <option>Free Breakfast & Dinner</option>
                <option>Free Welcome Drink</option>
                <option>No Free Food</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Bed Count</label>
              <select class="form-control" id="sel4" name="sellist1">
                <option>Select</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Charges For cancellation</label>
              <select class="form-control" id="sel5" name="sellist1">
                <option>Select</option>
                <option>Free</option>
                <option>5% Before 24Hours</option>
                <option>No Cancellation Allow</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Rent</label>
              <input type="text" class="form-control" id="usr">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <button type="button" class="btn btn-primary buttonedit mt-5">Create Tax</button>
</div>
<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
  console.log("testing");
</script>
<?= $this->endSection()  ?>