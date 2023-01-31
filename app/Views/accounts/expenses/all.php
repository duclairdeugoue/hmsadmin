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
          <h4 class="card-title float-left mt-2">Expenses</h4>
          <a href="<?= base_url() ?>/accounts/expenses/add" class="btn btn-primary float-right veiwbutton">Add expense</a>
        </div>
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
              <input class="form-control" type="text" value="BKG-0001" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Purchased By</label>
              <select class="form-control" id="sel1" name="sellist1">
                <option>Select</option>
                <option>Loren Gatlin</option>
                <option>Tarash Sorosphire</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Paid By</label>
              <select class="form-control" id="sel3" name="sellist1">
                <option>Select</option>
                <option>Cash</option>
                <option>Cheque</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>From</label>
              <div class="cal-icon">
                <input type="text" class="form-control datetimepicker" />
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>To</label>
              <div class="cal-icon">
                <input type="text" class="form-control datetimepicker" />
              </div>
            </div>
          </div>
          <div class="col-md-4">
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
                  <th>Customer Name</th>
                  <th>Customer ID</th>
                  <th>Item</th>
                  <th>Purchase From</th>
                  <th>Purchase Date</th>
                  <th>Purchase By</th>
                  <th>Amount</th>
                  <th>Paid By</th>
                  <th class="text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Ellen Thill</td>
                  <td>ID-0001</td>
                  <td>Bed</td>
                  <td>Furniture Inc</td>
                  <td>12 Jul 2020</td>
                  <td>Shropshire</td>
                  <td>$3250</td>
                  <td>Cheque</td>
                  <td class="text-right">
                    <div class="dropdown dropdown-action">
                      <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="<?= base_url() ?>/accounts/expenses/edit"><i class="fas fa-pencil-alt m-r-5"></i>
                          Edit</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i>
                          Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Joseph Maglio</td>
                  <td>ID-0001</td>
                  <td>Bed</td>
                  <td>Furniture Inc</td>
                  <td>18 Jul 2020</td>
                  <td>Barbara Kaiser</td>
                  <td>$3250</td>
                  <td>Cheque</td>
                  <td class="text-right">
                    <div class="dropdown dropdown-action">
                      <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="<?= base_url() ?>/accounts/expenses/edit"><i class="fas fa-pencil-alt m-r-5"></i>
                          Edit</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i>
                          Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Richard Calhoun</td>
                  <td>ID-0001</td>
                  <td>Bed</td>
                  <td>Furniture Inc</td>
                  <td>20 Jul 2020</td>
                  <td>Barbara Kaiser</td>
                  <td>$3250</td>
                  <td>Cheque</td>
                  <td class="text-right">
                    <div class="dropdown dropdown-action">
                      <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="<?= base_url() ?>/accounts/expenses/edit"><i class="fas fa-pencil-alt m-r-5"></i>
                          Edit</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i>
                          Delete</a>
                      </div>
                    </div>
                  </td>
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