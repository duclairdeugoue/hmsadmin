<?= $this->extend('layouts/app') ?>

<?= $this->section('styles') ?>
<style>

</style>
<?= $this->endSection()  ?>


<?= $this->section('content') ?>
<div class="content mt-5">
  <div class="row">
    <div class="col-sm-12">
      <h4 class="page-title">Activities</h4>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-12">
      <div class="activity">
        <div class="activity-box">
          <ul class="activity-list">
            <li class="activity-list_li">
              <div class="activity-user">
                <a href="profile.html" title="Lesley Grauer" data-toggle="tooltip" class="avatar">
                  <img alt="Lesley Grauer" src="<?= base_url() ?>/assets/img/profiles/avatar-01.jpg" class="img-fluid rounded-circle" />
                </a>
              </div>
              <div class="activity-content">
                <div class="timeline-content">
                  <a href="profile.html" class="name">Lesley Grauer</a>
                  added new work
                  <a href="activities.html">For Staff</a>
                  <span class="time">4 mins ago</span>
                </div>
              </div>
              <a class="activity-delete" href="" title="Delete">&times;</a>
            </li>
            <li class="activity-list_li">
              <div class="activity-user">
                <a href="profile.html" title="Lesley Grauer" data-toggle="tooltip" class="avatar">
                  <img alt="Lesley Grauer" src="<?= base_url() ?>/assets/img/profiles/avatar-02.jpg" class="img-fluid rounded-circle" />
                </a>
              </div>
              <div class="activity-content">
                <div class="timeline-content">
                  <a href="profile.html" class="name">Lesley Grauer</a>
                  added new work
                  <a href="activities.html">For Staff</a>
                  <span class="time">4 mins ago</span>
                </div>
              </div>
              <a class="activity-delete" href="" title="Delete">&times;</a>
            </li>
            <li class="activity-list_li">
              <div class="activity-user">
                <a href="profile.html" title="Catherine Manseau" data-toggle="tooltip" class="avatar">
                  <img alt="Catherine Manseau" src="<?= base_url() ?>/assets/img/profiles/avatar-03.jpg" class="img-fluid rounded-circle" />
                </a>
              </div>
              <div class="activity-content">
                <div class="timeline-content">
                  <a href="profile.html" class="name">Catherine Manseau</a>
                  completed
                  <a href="activities.html">Room booking with payment gateway</a>
                  <span class="time">12 mins ago</span>
                </div>
              </div>
              <a class="activity-delete" href="" title="Delete">&times;</a>
            </li>
            <li class="activity-list_li">
              <div class="activity-user">
                <a href="#" title="Bernardo Galaviz" data-toggle="tooltip" class="avatar">
                  <img alt="Bernardo Galaviz" src="<?= base_url() ?>/assets/img/profiles/avatar-04.jpg" class="img-fluid rounded-circle" />
                </a>
              </div>
              <div class="activity-content">
                <div class="timeline-content">
                  <a href="profile.html" class="name">Bernardo Galaviz</a>
                  changed the Room<a href="activities.html">For available
                  </a>
                  <span class="time">1 day ago</span>
                </div>
              </div>
              <a class="activity-delete" href="" title="Delete">&times;</a>
            </li>
            <li class="activity-list_li">
              <div class="activity-user">
                <a href="profile.html" title="Mike Litorus" data-toggle="tooltip" class="avatar">
                  <img alt="Mike Litorus" src="<?= base_url() ?>/assets/img/profiles/avatar-05.jpg" class="img-fluid rounded-circle" />
                </a>
              </div>
              <div class="activity-content">
                <div class="timeline-content">
                  <a href="profile.html" class="name">Mike Litorus</a>
                  booking new room for
                  <a href="activities.html"> video conferencing</a>
                  <span class="time">2 days ago</span>
                </div>
              </div>
              <a class="activity-delete" href="" title="Delete">&times;</a>
            </li>
            <li class="activity-list_li">
              <div class="activity-user">
                <a href="profile.html" title="Jeffery Lalor" data-toggle="tooltip" class="avatar">
                  <img alt="Jeffery Lalor" src="<?= base_url() ?>/assets/img/profiles/avatar-06.jpg" class="img-fluid rounded-circle" />
                </a>
              </div>
              <div class="activity-content">
                <div class="timeline-content">
                  <a href="profile.html" class="name">Jeffery Lalor</a>
                  added
                  <a href="profile.html" class="name">Jeffrey Warden</a>
                  and
                  <a href="profile.html" class="name">Bernardo Galaviz</a>
                  to the villa <a href="activities.html">Private </a>
                  <span class="time">7 days ago</span>
                </div>
              </div>
              <a class="activity-delete" href="" title="Delete">&times;</a>
            </li>
          </ul>
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