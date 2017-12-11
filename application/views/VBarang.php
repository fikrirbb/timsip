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
                  <div class="row">
               <div class="col-6">
                 <h3 class="card-title text-white">Data Barang</h3>
               </div>
               <div class="col-6 text-right">
                  <a href="<?php echo site_url('/CBarang/tambah') ?>" class="btn btn-secondary col-6"><i class="mdi mdi-plus-circle"></i> Tambah</a>
               </div>
                </div>
                </div>
               <div class="card-body">
                   <div class="table-responsive">
                       <table id="myTable" class="table table-bordered table-striped">
                           <thead>
                               <tr>
                                 <th>ID</th>
                                 <th>Jenis</th>
                                 <th>Nama</th>
                                 <th>Harga</th>
                                  <th>Aksi</th>
                               </tr>
                           </thead>
                           <tbody>
                             <?php foreach($barang as $b){ ?>
                             <tr>
                     <td><?php echo $b['brg_id']; ?></td>
                     <td><?php echo $b['brg_jenis']; ?></td>
                     <td><?php echo $b['brg_nama']; ?></td>
                     <td><?php echo $b['brg_harga']; ?></td>
                     <td>
                         <a href="<?php echo site_url('CBarang/edit/'.$b['brg_id']); ?>" class="btn btn-info"><span class="fa fa-pencil"></span></a>
                         <a href="<?php echo site_url('CBarang/hapus/'.$b['brg_id']); ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                                 </td>
                             </tr>
                             <?php } ?>
                           </tbody>
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
