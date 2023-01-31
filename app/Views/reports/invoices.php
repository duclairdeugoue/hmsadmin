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
          <h4 class="card-title float-left mt-2">Invoice Report</h4>
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
              <label>Customer</label>
              <select class="form-control" id="sel1" name="sellist1">
                <option>Select Customer</option>
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
                  <th>Sn.no</th>
                  <th>Invoice Number</th>
                  <th>Client</th>
                  <th>Created Date</th>
                  <th>Due Date</th>
                  <th>Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>#INV-0001</td>
                  <td>Dibbert-Langworth</td>
                  <td>1 Jul 2020</td>
                  <td>7 Jul 2020</td>
                  <td>$3200</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>#INV-0002</td>
                  <td>Rohan-Carter</td>
                  <td>5 Jul 2020</td>
                  <td>10 Jul 2020</td>
                  <td>$2500</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>#INV-0003</td>
                  <td>Beier-Jakubowski</td>
                  <td>2 Jul 2020</td>
                  <td>8 Jul 2020</td>
                  <td>$3000</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>#INV-0004</td>
                  <td>Langosh-Bergstrom</td>
                  <td>5 Jul 2020</td>
                  <td>10 Jul 2020</td>
                  <td>$55888</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>#INV-0005</td>
                  <td>Klocko Inc</td>
                  <td>3 Jul 2020</td>
                  <td>5 Jul 2020</td>
                  <td>$2542</td>
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