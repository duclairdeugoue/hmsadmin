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
          <h4 class="card-title float-left mt-2">Payments</h4>
        </div>
      </div>
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
                  <th>Invoice ID</th>
                  <th>Customer Name</th>
                  <th>Customer Age</th>
                  <th>Payment Type</th>
                  <th>Paid Date</th>
                  <th>Paid Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="invoice-view.html">#INV-0001</a></td>
                  <td>Charles Ortega</td>
                  <td>50</td>
                  <td>Paypal</td>
                  <td>5-5-2020</td>
                  <td>$320,000</td>
                </tr>
                <tr>
                  <td><a href="invoice-view.html">#INV-0002</a></td>
                  <td>Jason Cripps</td>
                  <td>63</td>
                  <td>Paypal</td>
                  <td>10-5-2020</td>
                  <td>$170,750</td>
                </tr>
                <tr>
                  <td><a href="invoice-view.html">#INV-0003</a></td>
                  <td>Silvia Ryan</td>
                  <td>66</td>
                  <td>Payer</td>
                  <td>12-5-2020</td>
                  <td>$86,000</td>
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
  console.log("testing");
</script>
<?= $this->endSection()  ?>