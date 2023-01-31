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
        <h3 class="page-title mt-5">Edit Invoice</h3>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form>
        <div class="row">
          <div class="col-lg-12">
            <div class="row formtype">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Client *</label>
                  <select class="form-control" id="sel1" name="sellist1">
                    <option>Please Select</option>
                    <option>Charles Ortega</option>
                    <option>Denise Stevens</option>
                    <option>Jenifer Robinson</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Department</label>
                  <select class="form-control" id="sel2" name="sellist1">
                    <option>Select Department</option>
                    <option>Dentists</option>
                    <option>Neurology</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control" type="text" value="charlesortega@example.com" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Tax</label>
                  <select class="form-control" id="sel3" name="sellist1">
                    <option>Select Tax</option>
                    <option>VAT</option>
                    <option>GST</option>
                    <option>No Tax</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Client Address</label>
                  <textarea class="form-control" rows="3">5754 Airport Rd, Coosada, AL, 36020</textarea>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Billing Address</label>
                  <textarea class="form-control" rows="3">5754 Airport Rd, Coosada, AL, 36020</textarea>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Invoice Date</label>
                  <div class="cal-icon">
                    <input type="text" class="form-control datetimepicker" />
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Due Date</label>
                  <div class="cal-icon">
                    <input type="text" class="form-control datetimepicker" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="table-responsive">
              <table class="table table-hover table-white">
                <thead>
                  <tr>
                    <th style="width: 20px">#</th>
                    <th class="col-sm-2">Item</th>
                    <th class="col-md-6">Description</th>
                    <th style="width: 100px">Unit Cost</th>
                    <th style="width: 80px">Qty</th>
                    <th>Amount</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>
                      <input class="form-control" type="text" value="Full body checkup" style="min-width: 150px" />
                    </td>
                    <td>
                      <input class="form-control" type="text" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit" style="min-width: 150px" />
                    </td>
                    <td>
                      <input class="form-control" style="width: 100px" type="text" value="150" />
                    </td>
                    <td>
                      <input class="form-control" style="width: 80px" type="text" value="1" />
                    </td>
                    <td>
                      <input class="form-control form-amt" readonly="" style="width: 120px" type="text" value="150" />
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="text-success font-18" title="Add"><i class="fas fa-plus"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>
                      <input class="form-control" type="text" value="Blood Test" style="min-width: 150px" />
                    </td>
                    <td>
                      <input class="form-control" type="text" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit" style="min-width: 150px" />
                    </td>
                    <td>
                      <input class="form-control" style="width: 100px" type="text" value="12" />
                    </td>
                    <td>
                      <input class="form-control" style="width: 80px" type="text" value="1" />
                    </td>
                    <td>
                      <input class="form-control form-amt" readonly="" style="width: 120px" type="text" value="12" />
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="text-danger font-18" title="Remove"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>
                      <input class="form-control" type="text" value="General checkup" style="min-width: 150px" />
                    </td>
                    <td>
                      <input class="form-control" type="text" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit" style="min-width: 150px" />
                    </td>
                    <td>
                      <input class="form-control" style="width: 100px" type="text" value="100" />
                    </td>
                    <td>
                      <input class="form-control" style="width: 80px" type="text" value="1" />
                    </td>
                    <td>
                      <input class="form-control form-amt" readonly="" style="width: 120px" type="text" value="100" />
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="text-danger font-18" title="Remove"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="table-responsive">
              <table class="table table-hover table-white">
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="text-right">Total</td>
                    <td style="text-align: right; width: 230px">262</td>
                  </tr>
                  <tr>
                    <td colspan="5" style="text-align: right">Tax</td>
                    <td style="text-align: right; width: 230px">
                      <input class="form-control text-right form-amt" value="0" readonly="" type="text" />
                    </td>
                  </tr>
                  <tr>
                    <td colspan="5" style="text-align: right">
                      Discount %
                    </td>
                    <td style="text-align: right; width: 230px">
                      <input class="form-control text-right" value="26.2" type="text" />
                    </td>
                  </tr>
                  <tr>
                    <td colspan="5" style="text-align: right; font-weight: bold">
                      Grand Total
                    </td>
                    <td style="
                                text-align: right;
                                font-weight: bold;
                                font-size: 16px;
                                width: 230px;
                              ">
                      $ 288.2
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Other Information</label>
                  <textarea class="form-control" rows="4"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <button type="button" class="btn btn-primary buttonedit">
    Save Invoice
  </button>
</div>
<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
  console.log("testing");
</script>
<?= $this->endSection()  ?>