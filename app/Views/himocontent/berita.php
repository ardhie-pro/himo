    <?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>

    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">


                <div class="col-lg-8 mb-3 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php
                        foreach ($berita as $brt) {
                        ?>

                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <a href="<?= base_url('detailberita/' . $brt['gambar_judul']) ?>">
                                        <img class="card-img rounded-0" src="<?= $brt['berita_gambar']; ?>" alt="">
                                    </a>
                                    <a href="<?= base_url('') ?>" class="blog_item_date">
                                        <h3><?= $brt['tanggal']; ?></h3>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="<?= base_url('detailberita/' . $brt['gambar_judul']) ?>">
                                        <h2><?= $brt['berita_judul']; ?></h2>
                                    </a>
                                    <p><?= substr($brt['berita_isi'], 0, 150); ?>....</p>

                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="bi bi-bookmarks-fill"></i> <?= $brt['kat_berita']; ?></a></li>
                                        <li><a href="#"><i class="bi bi-person-lines-fill"> INFOKOM</i></a></li>
                                    </ul>
                                </div>
                            </article>


                        <?php } ?>


                        <nav class="blog-pagination justify-content-center d-flex">

                        </nav>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">



                            <h3 class="widget_title">Cari Berita</h3>

                            <form action="" method="get">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" name="keyword" class="form-control" placeholder='Search Keyword' autocomplete="off" required>
                                        <div class="input-group-append">
                                            <button class="btn" type="submit"><i class="bi bi-search" style="font-size: 35px;margin-top:auto;"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit"><span style="color: #1fc2d9;">Search</span></button>
                            </form>

                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Kategori Berita</h4>
                            <ul class="list cat-list">

                                <?php
                                foreach ($kategori as $ktgr) {
                                ?>
                                    <li><a href="<?= base_url('berita/' . $ktgr['kategori']); ?>" name="keyword" class="d-flex"><?= $ktgr['kategori']; ?></a></li>

                                <?php } ?>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Postingan Populer</h3>


                            <div class="media post_item">
                                <img width="35%" class="img-fluid" src="IMG/twibon dept/TWIBBON INFOFKOM.png" alt="post">
                                <div class="media-body">
                                    <a href="">
                                        <h3></h3>
                                    </a>
                                    <p></p>
                                </div>
                            </div>


                        </aside>







                    </div>
                </div>

            </div>
        </div>
    </section>



    <?= $this->endSection(); ?>