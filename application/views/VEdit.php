<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
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
			<div class="card card-outline-info m-t-30">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Edit Barang</h4>
                            </div>
                            <div class="card-body">
                                  <?php echo form_open('CBarang/edit/'.$barang['brg_id']); ?>
                                    <div class="form-body">
                                        <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Nama Barang</label>
                                                  <input type="text" name="brg_nama" required="" class="form-control" placeholder="Roti Manis" value="<?php echo ($this->input->post('brg_nama') ? $this->input->post('brg_nama') : $barang['brg_nama']); ?>">
                                                  <small class="form-control-feedback text-danger"><?php echo form_error('brg_nama');?></small>
                                                </div>
                                          </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Jenis Barang</label>
                                                  <select class="form-control custom-select" required="" name="brg_jenis" >
                                                      <option value="">Pilih</option>
                                                      <?php
                                                      $brg_jenis_values = array(
                                                        'Basah'=>'Basah',
                                                        'Kering'=>'Kering',
                                                      );

                                      								foreach($brg_jenis_values as $value => $display_text)
                                      								{
                                      									$selected = ($value == $barang['brg_jenis']) ? ' selected="selected"' : "";

                                      									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                                      								}
                                      								?>
                                                  </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Harga Barang</label>
                                                  <div class="input-group"> <span class="input-group-addon">Rp</span>
                                          <input type="number" name="brg_harga" required="" class="form-control"  data-validation-required-message="This field is required" value="<?php echo ($this->input->post('brg_harga') ? $this->input->post('brg_harga') : $barang['brg_harga']); ?>"></div>
                                              </div>
                                            </div>
                                            <div class="col-md-6 m-t-30">
                                              <button type="submit" class="btn btn-info waves-effect waves-light m-r-10 col-2">Simpan</button>
                                              <button type="submit" class="btn btn-secondary waves-effect waves-light col-2">Cancel</button>
												                   </div>
                                        </div>

</div>
<?php echo form_close(); ?>

            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                        <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
