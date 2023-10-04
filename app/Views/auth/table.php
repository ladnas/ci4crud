<?= $this->extend('template/header'); ?>

<?= $this->section('content'); ?>

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
        <!-- column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Basic Table</h4>
                    <h6 class="card-subtitle">Add class <code>.table</code></h6>
                    <div class="table-responsive">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >tambah</button>
                        <table class="table user-table no-wrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Id</th>
                                    <th class="border-top-0">Nama tanaman</th>
                                    <th class="border-top-0">jumlah tanaman</th>
                                    <th class="border-top-0">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($plant as $pt) : ?>
                                    <tr>

                                        <td><?= $i++; ?></td>
                                        <td><?= $pt['nama_tnm']; ?></td>
                                        <td><?= $pt['jml_tnm']; ?></td>
                                        
                                        <td><a type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModaledit<?= $pt['id_tnm']; ?>" style="margin-right: -50px">Edit</a>
                                        <td> 
                                            <form action="/Cr_item/delete/<?= $pt['id_tnm']; ?>" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger" style="margin-left: -50px">Hapus</button>
                                        </form>
                                        </td>
                                        
                                    </tr>
                                <?php endforeach;  ?>
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
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Button trigger modal -->

<!-- Modal tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               
                    <form action="/Cr_item/create" method="POST" enctype='multipart/form-data'>
                        <?php csrf_field(); ?>
                        <div class="form-group">
                            <label >Nama tanaman</label>
                            <input type="text" name="nama_tnm" class="form-control" required="true">
                        </div>
                        <div class="form-group">
                            <label >Jumlah tanaman</label>
                            <input type="number" name="jml_tnm" class="form-control" required="true">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal edit-->
 <?php foreach ($plant as $pt) : ?>
<div class="modal fade" id="exampleModaledit<?= $pt['id_tnm']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
              
            <div class="modal-body">
             
                    <form action="/Cr_item/update/<?= $pt['id_tnm']; ?>" method="POST" enctype='multipart/form-data'>
                        <?php csrf_field(); ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama tanaman</label>
                            <input type="text"  class="form-control" name="nama_tnm" id="exampleInputEmail1" value="<?= $pt['nama_tnm']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Jumlah tanaman</label>
                            <input type="text" class="form-control" name="jml_tnm" id="exampleInputPassword1" value="<?= $pt['jml_tnm']; ?>">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                   </form>  
            </div>
            
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<?php endforeach;  ?>
<!-- footer -->
<!-- ============================================================== -->
<?= $this->endSection(); ?>