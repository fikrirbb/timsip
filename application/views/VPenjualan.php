<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
  <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
              <div class="card card-outline-info m-t-30">
                <div class="card-header">
                 <h3 class="card-title text-white">Transaksi</h3>
                </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-2">
                        <div class="form-group">
                            <label>No Faktur</label>
                            <div class="input-group">
                                <input type="text" name="faktur" class="form-control" value="#00891" readonly> </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label>Pilih Barang</label>
                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                <optgroup label="Nama Barang">
                                 <?php foreach($barang as $b){ ?>
                                    <option value="<?php echo $b['brg_id']; ?>"><?php echo $b['brg_nama']; ?></option>
                                     <?php } ?>
                                </optgroup>
                            </select>
                        </div>
                        </div>
                        <div class="col-lg-2">

                        </div>
                        <div class="col-lg-4">
                          <button type="submit" class="btn btn-block btn-lg btn-info">Bayar Rp 13,000</button>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-2">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <div class="input-group">
                                <input type="text" name="tgl" class="form-control" aria-invalid="false" readonly value="<?php echo date('d/m/Y');?>"> </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="form-group">
                            <label>Banyak Barang</label>
                            <div class="input-group">
                                <input type="number" name="qty" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false" placeholder="Qty"> </div>
                        </div>
                      </div>
                      <div class="col-lg-2 m-t-30">
                        <button type="submit" class="btn btn-info">Tambah</button>
                      </div>
                    </div>

                    <div id="cart_details">
                      <h3 align="center">Cart is Emty</h3>
                    </div>

                  <!--  <div class="table-responsive">
<table class="table table-bordered color-bordered-table info-bordered-table">
<thead>
<tr>
    <th>#</th>
    <th>Nama Barang</th>
    <th>Qty</th>
    <th>Harga @</th>
    <th>Sub Total</th>
    <th><button onclick="hapusSemua()" class="btn btn-default hapus-semua">Hapus Semua</button>
</tr>
</thead>
<tbody>
  <?php /*foreach ($this->cart->contents() as $items){ ?>
    <tr>
      <td><?= $items['id'] ?></td>
      <td><?= $items['name'] ?></td>
      <td><?= $items['qty'] ?></td>
      <td><?= $items['price'] ?></td>
      <td><?= $total = $items['price']*$items['qty'] ?></td>
      <td><a onClick='delete_row("<?= $items['rowid'] ?>")'>Hapus</a></td>
    </tr>
  <?php
  }
  */?>
</tbody>
</table>
</div> -->

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
