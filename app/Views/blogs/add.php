<?= $this->extend('layouts/app') ?>

<?= $this->section('styles') ?>
<style>

</style>
<?= $this->endSection()  ?>


<?= $this->section('content') ?>
<div class="content mt-5">
  <div class="page-header">
    <div class="row align-items-center">
      <div class="col">
        <h3 class="page-title mt-2">Add Blog</h3>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-lg-12">
      <form>
        <div class="row formtype">
          <div class="col-md-4">
            <div class="form-group">
              <label>Last Name</label>
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>File Upload</label>
              <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="customFile" name="filename">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Name</label>
              <select class="form-control" id="sel1" name="sellist1">
                <option>Select</option>
                <option>Jennifer Robinson</option>
                <option>Terry Baker</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Name</label>
              <select class="form-control" id="sel2" name="sellist1">
                <option>Select</option>
                <option>Jennifer Robinson</option>
                <option>Terry Baker</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Blog Description</label>
              <textarea cols="30" rows="6" class="form-control"></textarea>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="display-block">Blog Status</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="status" id="blog_active" value="option1" checked>
              <label class="form-check-label" for="blog_active"> Active </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="status" id="blog_inactive" value="option2">
              <label class="form-check-label" for="blog_inactive"> Inactive </label>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-primary buttonedit1 mt-4">Publish Blog</button>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
  
</script>
<?= $this->endSection()  ?>