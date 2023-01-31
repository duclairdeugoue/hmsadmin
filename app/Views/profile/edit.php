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
        <h3 class="page-title mt-5">Edit Profile</h3>
      </div>
    </div>
  </div>
  <div class="box inform_css">
    <p class="card-title title_menu">Basic Informations</p>
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
                <label>Birth Date</label>
                <div class="cal-icon">
                  <input type="text" class="form-control datetimepicker" />
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Gender</label>
                <select class="form-control" id="sel1" name="sellist1">
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="box inform_css mt-3">
    <p class="card-title title_menu">Contact Informations</p>
    <div class="row">
      <div class="col-lg-12">
        <form>
          <div class="row formtype">
            <div class="col-md-12">
              <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" value="4487 Snowbird Lane" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>State</label>
                <input class="form-control" type="text" value="New York" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Country</label>
                <input class="form-control" type="text" value="united States" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Pincode</label>
                <input class="form-control" type="text" value="10523" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Phone Number</label>
                <input class="form-control" type="text" value="631-889-3206" />
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="box inform_css mt-3">
    <p class="card-title title_menu">Educational Informations</p>
    <div class="row">
      <div class="col-lg-12">
        <form>
          <div class="row formtype">
            <div class="col-md-4">
              <div class="form-group">
                <label>Institution</label>
                <input class="form-control" type="text" value="Oxford university" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Subject</label>
                <input class="form-control" type="text" value="Computer Science" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Starting Date</label>
                <div class="cal-icon">
                  <input type="text" class="form-control datetimepicker" />
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Complete Date</label>
                <div class="cal-icon">
                  <input type="text" class="form-control datetimepicker" />
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Degree</label>
                <input class="form-control" type="text" value="BE Computer Science" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Grade</label>
                <input class="form-control" type="text" value="Grade A" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Gender</label>
                <select class="form-control" id="sel2" name="sellist1">
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="box inform_css mt-3">
    <p class="card-title title_menu">Experience Informations</p>
    <div class="row">
      <div class="col-lg-12">
        <form>
          <div class="row formtype">
            <div class="col-md-4">
              <div class="form-group">
                <label>Company Name</label>
                <input class="form-control" type="text" value="Digital Devlopment Inc" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Location</label>
                <input class="form-control" type="text" value="United States" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Job Position</label>
                <input class="form-control" type="text" value="Web Developer" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Period From</label>
                <div class="cal-icon">
                  <input type="text" class="form-control datetimepicker" />
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Period To</label>
                <div class="cal-icon">
                  <input type="text" class="form-control datetimepicker" />
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <button type="button" class="btn btn-primary buttonedit mt-3">
    Save
  </button>
</div>
<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
  console.log("testing");
</script>
<?= $this->endSection()  ?>