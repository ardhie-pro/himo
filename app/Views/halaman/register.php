<?= $this->extend('layout/admintemplate'); ?>

<?= $this->section('keuangan'); ?>
<div class="contant-page">
    <!-- Start content -->
    <div class="content">


    </div> <!-- content -->
</div>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Halaman User</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <div class=" text-center">
                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Tambah User</button>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card m-b-20">

                            <?php if ($hasil != null) {
                                foreach ($hasil as $key => $value) { ?>
                                    <div class="p-4">
                                        <form action="<?= base_url('aksiupdateuser') ?>" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Nama Lengkap</label>
                                                    <div>
                                                        <input type="hidden" name="user_id" class="form-control floating-label" value="<?= $value['user_id']; ?>">
                                                        <input type="text" name="nama" class="form-control floating-label" value="<?= $value['nama']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <div>
                                                        <input type="text" name="user" class="form-control floating-label" value="<?= $value['user']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <div>
                                                        <input type="password" name="pass" class="form-control floating-label" value="<?= $value['pass']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        </form>
                                    </div>
                                <?php }
                            } else { ?>

                                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myModalLabel">Tambah User</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url('aksiuser') ?>" method="post" enctype="multipart/form-data">

                                                    <div class="form-group">
                                                        <label>Nama Lengkap</label>
                                                        <div>
                                                            <input type="text" name="nama" class="form-control floating-label">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <div>
                                                            <input type="text" name="user" class="form-control floating-label">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <div>
                                                            <input type="password" name="pass" class="form-control floating-label">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Ulangi Password</label>
                                                        <div>
                                                            <input type="password" name="passu" class="form-control floating-label">
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>


                        </div>

                    </div>

                </div> <!-- end row -->

            </div>
            <!-- end page content-->
            <div class="card m-b-20">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">

                            <div class="card-body">
                                <?php if (session()->get('pass')) : ?>

                                    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                                        <strong>Mohon Maaf,</strong> <?= session()->getFlashdata('pass'); ?>

                                    </div>

                                <?php endif; ?>
                                <?php if (session()->get('nama')) : ?>

                                    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                                        <strong>Berhasil,</strong> <?= session()->getFlashdata('nama'); ?>

                                    </div>

                                <?php endif; ?>

                                <h4 class="mt-0 header-title">User Admin</h4>

                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Menu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($user  as $sw) {
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $sw['nama']; ?></td>
                                                <td><?= $sw['user']; ?></td>
                                                <td><?= $sw['created_at']; ?></td>
                                                <td>
                                                    <a class="btn btn-danger" href="<?= base_url('deleteuser/' . $sw['user_id']); ?>">Hapus</a>
                                                    <a class="btn btn-warning" href="<?= base_url('updateuser/' . $sw['user_id']); ?>">Edit</a>
                                                </td>
                                            </tr>
                                        <?php }  ?>


                                    </tbody>

                                </table>
                            </div>

                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <!-- end col -->
                </div>
            </div>
        </div> <!-- container-fluid -->

    </div> <!-- content -->



</div>

<?= $this->endSection(); ?>