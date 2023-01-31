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
          <h4 class="card-title float-left mt-2">Pricing</h4>
          <a href="<?= base_url() ?>/pricings/add" class="btn btn-primary float-right veiwbutton">Add Pricing</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <section class="pricing py-5">
        <div class="container">
          <div class="row mt-5">
            <div class="col-lg-3">
              <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">
                    Single
                  </h5>
                  <h6 class="card-price text-center mt-3">
                    $15<span class="period"></span>
                  </h6>
                  <hr />
                  <ul class="fa-ul">
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Free Breakfast
                    </li>
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Free Wifi
                    </li>
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Air Conditioning
                    </li>
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Laundry
                    </li>
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Parking
                    </li>
                  </ul>
                  <a href="<?= base_url()?>/pricings/edit" class="btn btn-block btn-primary text-uppercase">Edit</a>
                </div>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">
                    Double
                  </h5>
                  <h6 class="card-price text-center mt-3">
                    $25<span class="period"></span>
                  </h6>
                  <hr />
                  <ul class="fa-ul">
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Free Breakfast
                    </li>
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Free Wifi
                    </li>
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Air Conditioning
                    </li>
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Laundry
                    </li>
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Parking
                    </li>
                  </ul>
                  <a href="<?= base_url()?>/pricings/edit" class="btn btn-block btn-primary text-uppercase">Edit</a>
                </div>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">
                    Family
                  </h5>
                  <h6 class="card-price text-center mt-3">
                    $35<span class="period"></span>
                  </h6>
                  <hr />
                  <ul class="fa-ul">
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Free Breakfast
                    </li>
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Free Wifi
                    </li>
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Air Conditioning
                    </li>
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Laundry
                    </li>
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Parking
                    </li>
                  </ul>
                  <a href="<?= base_url()?>/pricings/edit" class="btn btn-block btn-primary text-uppercase">Edit</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">
                    Double
                  </h5>
                  <h6 class="card-price text-center mt-3">
                    $25<span class="period"></span>
                  </h6>
                  <hr />
                  <ul class="fa-ul">
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Free Breakfast
                    </li>
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Free Wifi
                    </li>
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Air Conditioning
                    </li>
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Laundry
                    </li>
                    <li>
                      <span class="fa-li"><i class="fas fa-check"></i></span>Parking
                    </li>
                  </ul>
                  <a href="<?= base_url()?>/pricings/edit" class="btn btn-block btn-primary text-uppercase">Edit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
  console.log("testing");
</script>
<?= $this->endSection()  ?>