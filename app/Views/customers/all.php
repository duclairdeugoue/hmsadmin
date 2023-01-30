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
          <h4 class="card-title float-left mt-2">Customers</h4> <a href="add-customer.html" class="btn btn-primary float-right veiwbutton">Add Customers</a>
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
                  <th>Booking ID</th>
                  <th>Name</th>
                  <th>Room Type</th>
                  <th>Total Numbers</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Arrival Date</th>
                  <th>Depature Date</th>
                  <th>Email ID</th>
                  <th>Ph.Number</th>
                  <th>Status</th>
                  <th class="text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>BKG-0001</td>
                  <td>
                    <h2 class="table-avatar">
                      <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?= base_url() ?>/assets/img/profiles/avatar-03.jpg" alt="User Image"></a>
                      <a href="profile.html">Tommy Bernal <span>#0001</span></a>
                    </h2>
                  </td>
                  <td>Double</td>
                  <td>10</td>
                  <td>21-03-2020</td>
                  <td>11.00 AM</td>
                  <td>22-03-2020</td>
                  <td>23-03-2020</td>
                  <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1662797b7b6f74736478777a56736e777b667a733875797b">[email&#160;protected]</a></td>
                  <td>631-254-6480</td>
                  <td>
                    <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
                  </td>
                  <td class="text-right">
                    <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                      <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-customer.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>BKG-0002</td>
                  <td>
                    <h2 class="table-avatar">
                      <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?= base_url() ?>/assets/img/profiles/avatar-04.jpg" alt="User Image"></a>
                      <a href="profile.html">Richard Brobst <span>#0002</span></a>
                    </h2>
                  </td>
                  <td>Single</td>
                  <td>8</td>
                  <td>21-03-2020</td>
                  <td>09.00 AM</td>
                  <td>22-03-2020</td>
                  <td>23-03-2020</td>
                  <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aad8c3c9c2cbd8cec8d8c5c8d9deeacfd2cbc7dac6cf84c9c5c7">[email&#160;protected]</a></td>
                  <td>830-468-1042</td>
                  <td>
                    <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Inactive</a> </div>
                  </td>
                  <td class="text-right">
                    <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                      <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-customer.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>BKG-0003</td>
                  <td>
                    <h2 class="table-avatar">
                      <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?= base_url() ?>/assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
                      <a href="profile.html">Ellen Thill <span>#0003</span></a>
                    </h2>
                  </td>
                  <td>Double</td>
                  <td>10</td>
                  <td>21-03-2020</td>
                  <td>08.00 AM</td>
                  <td>22-03-2020</td>
                  <td>23-03-2020</td>
                  <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8eebe2e2ebe0fae6e7e2e2ceebf6efe3fee2eba0ede1e3">[email&#160;protected]</a></td>
                  <td>508-335-5531</td>
                  <td>
                    <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
                  </td>
                  <td class="text-right">
                    <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                      <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-customer.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>BKG-0004</td>
                  <td>
                    <h2 class="table-avatar">
                      <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?= base_url() ?>/assets/img/profiles/avatar-06.jpg" alt="User Image"></a>
                      <a href="profile.html">Corina Kelsey <span>#0004</span></a>
                    </h2>
                  </td>
                  <td>Single</td>
                  <td>15</td>
                  <td>21-03-2020</td>
                  <td>12.00 AM</td>
                  <td>22-03-2020</td>
                  <td>23-03-2020</td>
                  <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="90f3ffe2f9fef1fbf5fce3f5e9d0f5e8f1fde0fcf5bef3fffd">[email&#160;protected]</a></td>
                  <td>262-260-1170</td>
                  <td>
                    <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
                  </td>
                  <td class="text-right">
                    <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                      <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-customer.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>BKG-0005</td>
                  <td>
                    <h2 class="table-avatar">
                      <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?= base_url() ?>/assets/img/profiles/avatar-07.jpg" alt="User Image"></a>
                      <a href="profile.html">Carolyn Lane <span>#0005</span></a>
                    </h2>
                  </td>
                  <td>Double</td>
                  <td>12</td>
                  <td>21-03-2020</td>
                  <td>06.00 AM</td>
                  <td>22-03-2020</td>
                  <td>23-03-2020</td>
                  <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="036062716c6f7a6d6f626d6643667b626e736f662d606c6e">[email&#160;protected]</a></td>
                  <td>570-458-0070</td>
                  <td>
                    <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
                  </td>
                  <td class="text-right">
                    <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                      <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-customer.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>BKG-0006</td>
                  <td>
                    <h2 class="table-avatar">
                      <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?= base_url() ?>/assets/img/profiles/avatar-08.jpg" alt="User Image"></a>
                      <a href="profile.html">David Alvarez <span>#0006</span></a>
                    </h2>
                  </td>
                  <td>Single</td>
                  <td>7</td>
                  <td>21-03-2020</td>
                  <td>10.00 AM</td>
                  <td>22-03-2020</td>
                  <td>23-03-2020</td>
                  <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="402421362924212c362132253a002538212d302c256e232f2d">[email&#160;protected]</a></td>
                  <td>212-414-9510</td>
                  <td>
                    <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Inactive</a> </div>
                  </td>
                  <td class="text-right">
                    <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                      <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-customer.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
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
      <div class="modal-body text-center"> <img src="<?= base_url() ?>/assets/img/sent.png" alt="" width="50" height="46">
        <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
        <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
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