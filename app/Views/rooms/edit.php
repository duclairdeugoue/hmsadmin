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
                <h3 class="page-title mt-5">Edit Room</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form>
                <div class="row formtype">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Room Number</label>
                            <input class="form-control" type="text" value="BKG-0001">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Room Type</label>
                            <select class="form-control" id="sel1" name="sellist1">
                                <option>Select</option>
                                <option>Single</option>
                                <option>Double</option>
                                <option>Quad</option>
                                <option>King</option>
                                <option>Suite</option>
                                <option>Villa</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>AC/NON-AC</label>
                            <select class="form-control" id="sel2" name="sellist1">
                                <option>Select</option>
                                <option>AC</option>
                                <option>NON-AC</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Food</label>
                            <select class="form-control" id="sel3" name="sellist1">
                                <option>Select</option>
                                <option>Free Breakfast</option>
                                <option>Free Lunch</option>
                                <option>Free Dinner</option>
                                <option>Free Breakfast & Dinner</option>
                                <option>Free Welcome Drink</option>
                                <option>No Free Food</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Bed Count</label>
                            <select class="form-control" id="sel" name="sellist1">
                                <option>Select</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Charges For cancellation</label>
                            <select class="form-control" id="sel4" name="sellist1">
                                <option>Select</option>
                                <option>Free</option>
                                <option>5% Before 24Hours</option>
                                <option>No Cancellation Allow</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control" id="usr">
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
                        <div class="">
                            <button type="button" class="btn btn-primary buttonedit mt-4 ml-4">Save</button>
                            <button type="button" class="btn btn-primary buttonedit mt-4">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
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