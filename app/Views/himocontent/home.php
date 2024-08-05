<?= $this->extend('layout/himotemp'); ?>

<?= $this->section('contenthimo'); ?>

<?php
foreach ($page1 as $pg) {
?>
    <div class="mb-5">
        <section class="site-hero overlay" style="background-image: url(<?= base_url($pg['gambar']); ?>)" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row site-hero-inner justify-content-center align-items-center">
                    <div class="col-md-10 text-center" data-aos="fade-up">
                        <span class="custom-caption text-uppercase text-white d-block  mb-3"><?= $pg['text1']; ?><span class="text-primary"></span>DI HIMOSDA</span>
                        <h1 class="heading"><?= $pg['text2']; ?></h1>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php } ?>
<!-- END section -->
<?php
foreach ($page2 as $pg) {
?>
    <section class="section bg-light pb-0 mt-5">
        <div class="container">

            <div class="row check-availabilty" id="next">
                <div class="block-32" data-aos="fade-up" data-aos-offset="-200">
                    <div class="row">
                        <div class="col-md-8 mb-3 mb-lg-0 col-lg-3">
                            <h3 for="checkin_date" class="font-weight-bold text-black">Visit Our Medsos</h3>
                            <div class="text-left">
                                <a href="#"><span class="fa fa-youtube m-2"></span></a>
                                <a href="#"><span class="fa fa-facebook m-2"></span></a>
                                <a href="#"><span class="fa fa-twitter m-2"></span></a>
                            </div>
                            <a href="<?= $pg['text2']; ?>"><button type="submit" class="btn btn-dark mt-3 mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                        <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                                    </svg> HIMOSDA</button></a>
                        </div>

                        <div class="col-md-12 m-2 mb-md-0 col-lg-4 shadow">
                            <iframe loading="lazy" src="https://instagram.com/p/<?= $pg['text3']; ?>/embed/" frameborder="0" width="100%" height="500px" scrolling="no" allowtransparency="true"></iframe>
                        </div>
                        <div class="col-md-12 m-2 mb-md-0 col-lg-4 shadow">
                            <iframe loading="lazy" src="https://instagram.com/p/<?= $pg['text4']; ?>/embed/" frameborder="0" width="100%" height="560px" scrolling="no" allowtransparency="true"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php
foreach ($page3 as $pg) { ?>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
                    <figure class="img-absolute">
                        <img src="<?= base_url('himo/images/logohimoo.png') ?>" alt="Image" class="img-fluid">
                    </figure>
                    <img src="<?= base_url($pg['gambar']); ?>" alt="Image" class="img-fluid rounded">
                </div>
                <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
                    <h2 class="heading"><?= $pg['text1']; ?></h2>
                    <p class="mb-4"><?= $pg['text2']; ?></p>
                    <p><a href="#" class="btn btn-primary text-white py-2 mr-3">Lihat Struktur Kami</a> <span class="mr-3 font-family-serif"></p>
                </div>

            </div>
        </div>
    </section>
<?php } ?>

<section class="section blog-post-entry ">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Berita Terkini</h2>
                <p data-aos="fade-up">Himpunan Musyawarah Osis Sidoarjo</p>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($event as $pg) { ?>
                <a href="<?= base_url('detailberita/' . $pg['gambar_judul']) ?>" class="mb-4 d-block">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">
                        <div class="media media-custom d-block mb-4 h-100">
                            <a href="<?= base_url('detailberita/' . $pg['gambar_judul']) ?>" class="mb-4 d-block"><img src="<?= base_url($pg['gambar']); ?>" alt="Image placeholder" class="img-fluid"></a>
                            <div class="media-body">
                                <span class="meta-post"><?= $pg['text1']; ?></span>
                                <h2 class="mt-0 mb-3" style="text-decoration:none;"><a href="<?= base_url('detailberita/' . $pg['gambar_judul']) ?>"><?= $pg['text2']; ?></a></h2>
                                <div style="color: #6c757d;"><?= substr($pg['text3'], 0, 150); ?></div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php } ?>
            <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
                <div class="media media-custom d-block mb-4 h-100">
                    <a href="#" class="mb-4 d-block"><img src="<?= base_url('himo/images/DSCF2216.JPG') ?>" alt="Image placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <span class="meta-post">February 26, 2018</span>
                        <h2 class="mt-0 mb-3"><a href="#">5 Job Types That Aallow You To Earn As You Travel The World</a></h2>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
                <div class="media media-custom d-block mb-4 h-100">
                    <a href="#" class="mb-4 d-block"><img src="<?= base_url('himo/images/IMG_7442.jpg') ?>" alt="Image placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <span class="meta-post">February 26, 2018</span>
                        <h2 class="mt-0 mb-3"><a href="#">30 Great Ideas On Gifts For Travelers</a></h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. t is a paradisematic country, in which roasted parts of sentences.</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>


<section class="section slider-section bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Galery</h2>
                <p data-aos="fade-up" data-aos-delay="100">Dokumentasi berikut merinci aktivitas kami selama periode bertugas serta berbagai event yang telah kami organisir.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
                    <?php
                    foreach ($gambar as $pg) {
                    ?>
                        <div class="slider-item">
                            <a href="<?= base_url('galeri') ?>" data-fancybox="images" data-caption="Caption for this image"><img src="<?= base_url($pg['gambar']) ?>" alt="Image placeholder" class="img-fluid"></a>
                        </div>
                    <?php } ?>
                    <!-- <div class="slider-item">
                        <a href="images/DSC04537.JPG" data-fancybox="images" data-caption="Caption for this image"><img src="<?= base_url('himo/images/DSC04537.JPG') ?>" alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="images/DSC04519.JPG" data-fancybox="images" data-caption="Caption for this image"><img src="<?= base_url('himo/images/DSC04519.JPG') ?>" alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="images/IMG_8981.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="<?= base_url('himo/images/IMG_8981.jpg') ?>" alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="images/IMG_7442.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="<?= base_url('himo/images/IMG_7442.jpg') ?>" alt="Image placeholder" class="img-fluid"></a>
                    </div> -->
                </div>
                <!-- END slider -->
            </div>

        </div>
    </div>
</section>
<!-- END section -->


<section class="section bg-image overlay" style="background-image: url(<?= base_url('himo/images/DSCF2214.JPG') ?>);">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading text-white" data-aos="fade">Agenda Kami</h2>
                <p class="text-white" data-aos="fade" data-aos-delay="100">Rancangan atau daftar kegiatan, tugas, atau acara yang akan <br>dilakukan HIMOSDA dalam periode 2024 - 2025.</p>
            </div>
        </div>
        <div class="food-menu-tabs" data-aos="fade">
            <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active letter-spacing-2" id="harian-tab" data-toggle="tab" href="#harian" role="tab" aria-controls="harian" aria-selected="true">Harian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link letter-spacing-2" id="bulanan-tab" data-toggle="tab" href="#bulanan" role="tab" aria-controls="bulanan" aria-selected="false">Bulanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link letter-spacing-2" id="tahunan-tab" data-toggle="tab" href="#tahunan" role="tab" aria-controls="tahunan" aria-selected="false">Tahunan</a>
                </li>
            </ul>
            <div class="tab-content py-5" id="myTabContent">


                <div class="tab-pane fade show active text-left" id="harian" role="tabpanel" aria-labelledby="harian-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="food-menu mb-5">
                                <span class="d-block text-primary h4 mb-3">tanggal(17 june 2007)</span>
                                <h3 class="text-white"><a href="#" class="text-white">(Judul) tanggal lahir web developer</a></h3>
                                <p class="text-white text-opacity-7">(descripsi)Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="food-menu mb-5">
                                <span class="d-block text-primary h4 mb-3">tanggal(17 june 2007)</span>
                                <h3 class="text-white"><a href="#" class="text-white">(Judul) tanggal lahir web developer</a></h3>
                                <p class="text-white text-opacity-7">(descripsi)Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>


                </div> <!-- .tab-pane -->

                <div class="tab-pane fade text-left" id="bulanan" role="tabpanel" aria-labelledby="bulanan-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="food-menu mb-5">
                                <span class="d-block text-primary h4 mb-3">tanggal(17 june 2007)</span>
                                <h3 class="text-white"><a href="#" class="text-white">(Judul) tanggal lahir web developer</a></h3>
                                <p class="text-white text-opacity-7">(descripsi)Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="food-menu mb-5">
                                <span class="d-block text-primary h4 mb-3">tanggal(17 june 2007)</span>
                                <h3 class="text-white"><a href="#" class="text-white">(Judul) tanggal lahir web developer</a></h3>
                                <p class="text-white text-opacity-7">(descripsi)Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- .tab-pane -->
                <div class="tab-pane fade text-left" id="tahunan" role="tabpanel" aria-labelledby="tahunan-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="food-menu mb-5">
                                <span class="d-block text-primary h4 mb-3">tanggal(17 june 2007)</span>
                                <h3 class="text-white"><a href="#" class="text-white">(Judul) tanggal lahir web developer</a></h3>
                                <p class="text-white text-opacity-7">(descripsi)Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="food-menu mb-5">
                                <span class="d-block text-primary h4 mb-3">tanggal(17 june 2007)</span>
                                <h3 class="text-white"><a href="#" class="text-white">(Judul) tanggal lahir web developer</a></h3>
                                <p class="text-white text-opacity-7">(descripsi)Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- .tab-pane -->
            </div>
        </div>
    </div>
</section>

<!-- END section -->
<section class="section testimonial-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Sponsor Kami</h2>
            </div>
        </div>
        <div class="row">
            <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">

                <div class="testimonial text-center slider-item">
                    <div class="author-image mb-3">
                        <img src="<?= base_url('himo/images/logohimoo.png') ?>" alt="Image placeholder" class="mx-auto">
                    </div>

                </div>
                <div class="testimonial text-center slider-item">
                    <div class="author-image mb-3">
                        <img src="<?= base_url('himo/images/logoosis.png') ?>" alt="Image placeholder" class="mx-auto">
                    </div>

                </div>
                <div class="testimonial text-center slider-item">
                    <div class="author-image mb-3">
                        <img src="<?= base_url('himo/images/logosidoarjo.png') ?>" alt="Image placeholder" class="mx-auto">
                    </div>

                </div>
                <div class="testimonial text-center slider-item">
                    <div class="author-image mb-3">
                        <img src="<?= base_url('himo/images/logohimoo.png') ?>" alt="Image placeholder" class="mx-auto">
                    </div>

                </div>
                <div class="testimonial text-center slider-item">
                    <div class="author-image mb-3">
                        <img src="<?= base_url('himo/images/logohimoo.png') ?>" alt="Image placeholder" class="mx-auto">
                    </div>

                </div>
            </div>
            <!-- END slider -->
        </div>

    </div>
</section>



<section class="section bg-image overlay" style="background-image: url(<?= base_url('himo/images/DSC04521.JPG') ?>);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
                <h2 class="text-white font-weight-bold">Ada Yang Kamu Tanyakan. Gabung Sekarang!</h2>
            </div>
            <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
                <a href="" class="btn btn-outline-white-primary py-3 text-white px-5">Subscribe Now</a>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>