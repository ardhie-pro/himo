<?= $this->extend('layout/himotemp'); ?>

<?= $this->section('contenthimo'); ?>

<?php
foreach ($page1 as $pg1) {
?>
    <section class="site-hero overlay" style="background-image: url(<?= base_url($pg1['gambar']); ?>);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center" data-aos="fade-up">
                    <span class="custom-caption text-uppercase text-white d-block  mb-3"><?= $pg1['text1']; ?><span class="text-primary"></span>DI HIMOSDA</span>
                    <h1 class="heading"><?= $pg1['text2']; ?></h1>
                </div>
            </div>
        </div>


    </section>
<?php } ?>

<section class="blog_area single-post-area section-padding">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <?php
                    foreach ($event as $pg) { ?>
                        <div class="feature-img">
                            <img class="card-img rounded-0" src="<?= base_url($pg['gambar']); ?>" alt="">
                        </div>
                        <div class="blog_details">
                            <ul class="blog-info-link mb-4">
                                <li style="list-style:none;"><a href=""><i class="bi bi-calendar-week"></i> <?= $pg['text1']; ?> </a></li>
                                <li style="list-style:none;"><a href=""><i class="bi bi-person-lines-fill"></i> Humas HIMOSDA </a></li>
                            </ul>
                            <h2><?= $pg['text2']; ?><h2>
                                    <div style="color: #6c757d;"><?= substr($pg['text3'], 0, 150); ?></div>
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