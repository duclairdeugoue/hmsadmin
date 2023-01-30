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
        <h3 class="page-title mt-5">Add Staff</h3>
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
              <input class="form-control" type="text" value="BKG-0001">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Last Name</label>
              <input class="form-control" type="text" value="BKG-0001">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>User Name</label>
              <input class="form-control" type="text" value="BKG-0001">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Email ID</label>
              <input class="form-control" type="text" value="BKG-0001">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Password</label>
              <input class="form-control" type="text" value="BKG-0001">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Confirm Password</label>
              <input class="form-control" type="text" value="BKG-0001">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Staff ID</label>
              <input class="form-control" type="text" value="BKG-0001">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Joining Date</label>
              <div class="cal-icon">
                <input type="text" class="form-control datetimepicker">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Phone Number</label>
              <input class="form-control" type="text" value="BKG-0001">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Role</label>
              <select class="form-control" id="sel1" name="sellist1">
                <option>Select</option>
                <option>Admin</option>
                <option>Manager</option>
                <option>Staff</option>
                <option>Room Cleaners</option>
                <option>Servants</option>
                <option>Accountant</option>
                <option>Receiptionalist</option>
              </select>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <button type="button" class="btn btn-primary buttonedit ml-2">Add Staff</button>
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