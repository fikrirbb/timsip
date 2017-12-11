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
                 <h4 class="card-title text-white">Data Stok Barang</h4>
               </div>
                </div>
                </div>
               <div class="card-body">
                   <div class="table-responsive">
                       <table id="myTable" class="table table-bordered table-striped">
                           <thead>
                               <tr>
                                 <th>Nama</th>
                                 <th>Harga</th>
                                 <th>Stok</th>
                                 <th>Batas Minimal</th>
                                  <th>Aksi</th>
                               </tr>
                           </thead>
                           <tbody>
                             <?php foreach($barang as $b){ ?>
                             <tr>
                     <td><?php echo $b['brg_nama']; ?></td>
                     <td><?php echo $b['brg_harga']; ?></td>
                     <td><?php echo $b['brg_stok']; ?></td>
                     <td><?php echo $b['brg_min']; ?></td>
                     <td>
                         <a href="<?php echo site_url('CStok/edit/'.$b['brg_id']); ?>" class="btn btn-info"><span class="fa fa-pencil"></span></a>
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
