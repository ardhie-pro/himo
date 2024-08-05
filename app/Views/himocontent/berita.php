<?= $this->extend('layout/himotemp'); ?>

<?= $this->section('contenthimo'); ?>


<section class="site-hero inner-page overlay" style="background-image: url(images/IMG_8981.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3">Berita</h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="<?= base_url('/') ?>">Halaman Utama</a></li>
                    <li>&bullet;</li>
                    <li>Berita</li>
                </ul>
            </div>
        </div>
    </div>

    <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
            <span class="mouse-wheel"></span>
        </div>
    </a>
</section>
<!-- END section -->

<section class="blog_area section-padding">
    <div class="container">
        <div class="row">


            <div class="col-lg-8 mb-3 mb-lg-0">
                <div class="blog_left_sidebar">

                    <?php
                    foreach ($event as $pg) { ?>

                        <article class="blog_item post">
                            <div class="blog_item_img">
                                <a href="<?= base_url('detailberita/' . $pg['gambar_judul']) ?>">
                                    <img class="card-img rounded-0" src="<?= base_url($pg['gambar']); ?>" alt="">
                                </a>
                                <a href="<?= base_url('detailberita/' . $pg['gambar_judul']) ?>" class="blog_item_date">
                                    <h3><?= $pg['text1']; ?></h3>
                                </a>
                            </div>

                            <div class="media media-custom mt-3 d-block h-100">
                                <div class="media-body">
                                    <!-- <span class="meta-post"></span> -->
                                    <h2 class="mt-0 mb-3"><a href=""><?= $pg['text2']; ?></a></h2>
                                    <div class="row brt-uyy">
                                        <p><?= substr($pg['text3'], 0, 150); ?>.....</p>
                                    </div>
                                </div>
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