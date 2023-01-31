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
        <h3 class="page-title mt-5">Edit Employee</h3>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <form>
        <div class="row formtype">
          <div class="col-md-4">
            <div class="form-group">
              <label>First Name</label>
              <input class="form-control" type="text" value="Cristina " />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Last Name</label>
              <input class="form-control" type="text" value="Groves" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>User Name</label>
              <input class="form-control" type="text" value="Cristina " />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Email ID</label>
              <input class="form-control" type="text" value="cristina@example.com" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Password</label>
              <input class="form-control" type="text" value="" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Confirm Password</label>
              <input class="form-control" type="text" value="" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Employee ID</label>
              <input class="form-control" type="text" value="EMP-001 " />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Joining Date</label>
              <div class="cal-icon">
                <input type="text" class="form-control datetimepicker" />
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Phone Number</label>
              <input class="form-control" type="text" value="987654321" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Role</label>
              <select class="form-control" id="sel1" name="sellist1">
                <option>Managers</option>
                <option>Staff</option>
                <option>Room Cleaners</option>
                <option>Servants</option>
                <option>Accountant</option>
                <option>Receptionist</option>
              </select>
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