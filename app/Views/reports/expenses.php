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
        <div class="mt-5">
          <h4 class="card-title float-left mt-2">Expense Report</h4>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <form>
        <div class="row formtype">
          <div class="col-md-3">
            <div class="form-group">
              <label>Purchased By</label>
              <select class="form-control" id="sel1" name="sellist1">
                <option>Select Buyer</option>
                <option>Loren Gatlin</option>
                <option>Tarah Shrosphire</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>From</label>
              <div class="cal-icon">
                <input type="text" class="form-control datetimepicker" />
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>To</label>
              <div class="cal-icon">
                <input type="text" class="form-control datetimepicker" />
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Search</label>
              <a href="#" class="btn btn-success btn-block mt-0 search_button">
                Search
              </a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="datatable table table-stripped">
              <thead>
                <tr>
                  <th>Item</th>
                  <th>Purchased From</th>
                  <th>Purchased Date</th>
                  <th>Amount</th>
                  <th>Paid By</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Digitized Bi-Directional</td>
                  <td>Dibbert-Langworth</td>
                  <td>20 Jun 2020</td>
                  <td>$2000</td>
                  <td>Tommy Bernal</td>
                  <td>cheque</td>
                </tr>
                <tr>
                  <td>Zeroadministration Hub</td>
                  <td>Rohan-Carter</td>
                  <td>2 Jun 2020</td>
                  <td>$1800</td>
                  <td>Richard Brobst</td>
                  <td>cheque</td>
                </tr>
                <tr>
                  <td>Transitional Product</td>
                  <td>Beier-Jakubowski</td>
                  <td>15 Jun 2020</td>
                  <td>$4000</td>
                  <td>Ellen Thill</td>
                  <td>cheque</td>
                </tr>
                <tr>
                  <td>Static Attitude</td>
                  <td>Weissnat Inc</td>
                  <td>12 Jun 2020</td>
                  <td>$3200</td>
                  <td>Corina Kelsey</td>
                  <td>cheque</td>
                </tr>
                <tr>
                  <td>Multimedia Encryption</td>
                  <td>Klocko Inc</td>
                  <td>16 Jun 2020</td>
                  <td>$2500</td>
                  <td>Carolyn Lane</td>
                  <td>cheque</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
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