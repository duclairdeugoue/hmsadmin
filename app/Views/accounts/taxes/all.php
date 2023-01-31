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
          <h4 class="card-title float-left mt-2">Taxes</h4>
          <a href="<?= base_url() ?>/accounts/taxes/add" class="btn btn-primary float-right veiwbutton">Add Tax</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="card card-table">
        <div class="card-body booking_card">
          <div class="table-responsive">
            <table class="datatable table table-stripped table table-hover table-center mb-0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Tax Name</th>
                  <th>Tax Percentage(%)</th>
                  <th>Status</th>
                  <th class="text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>VAT</td>
                  <td>14%</td>
                  <td>
                    <div class="actions">
                      <a href="#" class="btn btn-sm bg-success-light mr-2">
                        Active
                      </a>
                    </div>
                  </td>
                  <td class="text-right">
                    <div class="dropdown dropdown-action">
                      <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="<?= base_url() ?>/accounts/taxes/edit"><i class="fas fa-pencil-alt m-r-5"></i>
                          Edit</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i>
                          Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>GST</td>
                  <td>30%</td>
                  <td>
                    <div class="actions">
                      <a href="#" class="btn btn-sm bg-success-light mr-2">
                        Active
                      </a>
                    </div>
                  </td>
                  <td class="text-right">
                    <div class="dropdown dropdown-action">
                      <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="<?= base_url() ?>/accounts/taxes/edit"><i class="fas fa-pencil-alt m-r-5"></i>
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
<div id="delete_asset" class="modal fade delete-modal" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center">
        <img src="<? base_url() ?>/assets/img/sent.png" alt="" width="50" height="46" />
        <h3 class="delete_class">
          Are you sure want to delete this Asset?
        </h3>
        <div class="m-t-20">
          <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
          <button type="submit" class="btn btn-danger">Delete</button>
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