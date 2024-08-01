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
                        <h4 class="page-title">Halaman Page 4</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <div class=" text-center">
                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Buat Title</button>
                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModalevent">Buat Event</button>
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

                            <?php if ($hasilevent != null) {
                                foreach ($hasilevent as $key => $value) { ?>
                                    <div class="p-4">
                                        <form action="<?= base_url('aksiupdateevent') ?>" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <div>
                                                        <input type="hidden" name="event_id" class="form-control floating-label" value="<?= $value['event_id']; ?>">
                                                        <input type="text" name="text1" class="form-control floating-label" value="<?= $value['text2']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Deskripsi</label>
                                                    <div>
                                                        <textarea id="elm1" name="text3"><?= $value['text3']; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal</label>
                                                    <div>
                                                        <input type="text" name="text3" class="form-control floating-label" value="<?= $value['text1']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Gambar</label>
                                                    <div>
                                                        <input type="file" name="gambar" class="form-control floating-label" value="<?= $value['gambar']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        </form>
                                    </div>
                                <?php }
                            } else { ?>

                                <div id="myModalevent" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myModalLabel">Event</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url('aksievent') ?>" method="post" enctype="multipart/form-data">


                                                    <div class="form-group">
                                                        <label>Judul Berita</label>
                                                        <div>
                                                            <input type="text" name="text2" class="form-control floating-label">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Tanggal</label>
                                                        <div>
                                                            <input type="date" name="text1" class="form-control floating-label">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Isi Berita</label>
                                                        <div>
                                                            <textarea id="elm1" name="text3"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Gambar</label>
                                                        <div>
                                                            <input type="file" name="gambar" class="form-control floating-label">
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                </form>
                                            </div>
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
                                        <th>Title</th>
                                        <th>Deskripsi</th>
                                        <th>Tanggal</th>
                                        <th>Gambar Event</th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($page4  as $sw) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $sw['text1']; ?></td>
                                            <td><?= $sw['text2']; ?></td>
                                            <td>null</td>
                                            <td>null</td>
                                            <td>
                                                <a class="btn btn-danger" href="<?= base_url('deletepage4/' . $sw['page4_id']); ?>">Hapus</a>
                                                <a class="btn btn-warning" href="<?= base_url('updatepage4/' . $sw['page4_id']); ?>">Edit</a>
                                            </td>
                                        </tr>
                                    <?php }  ?>

                                    <?php
                                    $no = 1;
                                    foreach ($event  as $sw) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $sw['text1']; ?></td>
                                            <td><?= $sw['text2']; ?></td>
                                            <td><?= $sw['text3']; ?></td>
                                            <td><img src="<?= base_url($sw['gambar']); ?>" alt="" width="100" height="100  "> </td>
                                            <td>
                                                <a class="btn btn-danger" href="<?= base_url('deleteevent/' . $sw['event_id']); ?>">Hapus</a>
                                                <a class="btn btn-warning" href="<?= base_url('updateevent/' . $sw['event_id']); ?>">Edit</a>
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