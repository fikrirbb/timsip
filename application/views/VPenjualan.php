<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Animation</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">pages</li>
                <li class="breadcrumb-item active">Animation</li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
              <div class="card">
                  <div class="card-body">
                    <h3>Transaksi</h3>
                    <div class="row">
                      <div class="col-lg-2 m-t-10">
                        <div class="form-group">
                            <label>No Faktur</label>
                            <div class="input-group">
                                <input type="text" name="faktur" class="form-control" value="#00891" readonly> </div>
                        </div>
                      </div>
                      <div class="col-lg-4 m-t-10">
                        <div class="form-group">
                            <label>Pilih Barang</label>
                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                <option>Nama Barang</option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </optgroup>
                            </select>
                        </div>
                        </div>
                        <div class="col-lg-2 m-t-10">
                          <div class="form-group">
                              <label>Banyak Barang</label>
                              <div class="input-group">
                                  <input type="number" name="onlyNum" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false" placeholder="Qty"> </div>
                          </div>
                        </div>
                        <div class="col-lg-2 m-t-40">
                          <button type="submit" class="btn btn-info">Tambah</button>
                        </div>
                        <div class="col-lg-2 m-t-10">
                          <div class="form-group">
                              <label>Tanggal</label>
                              <div class="input-group">
                                  <input type="text" name="tgl" class="form-control" aria-invalid="false" readonly value="<?php echo date('d/m/Y');?>"> </div>
                          </div>
                        </div>
                    </div>

                    <div class="table-responsive">
<table class="table table-bordered color-bordered-table info-bordered-table">
<thead>
<tr>
    <th>#</th>
    <th>Nama Barang</th>
    <th>Qty</th>
    <th>Harga @</th>
    <th>Sub Total</th>
</tr>
</thead>
<tbody>
<tr>
    <td>1</td>
    <td>ROTI SUWIR</td>
    <td>3</td>
    <td>3.000</td>
    <td>9.000</td>
</tr>
</tbody>
<tfoot>
<tr>
<th colspan="4" class="text-right">T O T A L</th>
<th>9.000</th>
</tr>
</tfoot>
</table>
</div>

                  </div>
              </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
