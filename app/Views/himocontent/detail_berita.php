<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<section class="blog_area single-post-area section-padding">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <?php
                    foreach ($berita as $brt) {
                    ?>
                        <div class="feature-img">
                            <img class="card-img rounded-0" src="<?= $brt['berita_gambar']; ?>" alt="">
                        </div>
                        <div class="blog_details">
                            <h2><?= $brt['berita_judul']; ?></h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="bi bi-bookmarks-fill"></i> <?= $brt['kat_berita']; ?> </a></li>
                                <li><a href="#"><i class="bi bi-person-lines-fill"></i> INFOCOM </a></li>
                            </ul>
                            <p><?= $brt['berita_isi']; ?></p>



                        </div>
                    <?php } ?>
                </div>




            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">



                        <h3 class="widget_title">Cari Berita</h3>

                        <form action="" method="get">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" name="keyword" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'" autocomplete="off" required>
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


                            <li><a href="" class="d-flex">hahoh</a></li>
                            <li><a href="" class="d-flex">hahoh</a></li>
                            <li><a href="" class="d-flex">hahoh</a></li>



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