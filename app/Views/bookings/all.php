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
                    <h4 class="card-title float-left mt-2">Bookings</h4>
                    <a href="add-booking.html" class="btn btn-primary float-right veiwbutton ">Add Booking</a>
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
                                    <th>Customer ID</th>
                                    <th>Room Category ID</th>
                                    <th>Total Members</th>
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
                                <?php foreach($bookingsData as $booking): ?>
                                <tr>
                                    <td>BKG- <?= $booking['id']?></td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <!-- <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?= base_url() ?>/assets/img/profiles/avatar-03.jpg" alt="User Image"></a> -->
                                            <a href="profile.html"> <span>#<?= $booking['customer_id']?></span></a>
                                        </h2>
                                    </td>
                                    <td><?= $booking['roomcategory_id']?></td>
                                    <td><?= $booking['total_members']?></td>
                                    <td><?= $booking['date']?></td>
                                    <td><?= $booking['time']?></td>
                                    <td><?= $booking['arival_date']?></td>
                                    <td><?= $booking['departure_date']?></td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2652494b4b5f44435448474a66435e474b564a430845494b">[email&#160;protected]</a></td>
                                    <td>631-254-6480</td>
                                    <td>
                                        <?php if($booking['status'] == 'active'): ?>
                                        <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2"><?= $booking['status']?></a> </div>
                                        <?php else: ?>
                                        <div class="actions"> <a href="#" class="btn btn-sm bg-danger-light mr-2"><?= $booking['status']?></a> </div>
                                        <?php endif?>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="<?= base_url('bookings/edit') ?>"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach?>
                                
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