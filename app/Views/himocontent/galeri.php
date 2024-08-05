<?= $this->extend('layout/himotemp'); ?>

<?= $this->section('contenthimo'); ?>

<section class="site-hero inner-page overlay" style="background-image: url(images/IMG_8981.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3">Galery</h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="<?= base_url('/') ?>">Halaman Utama</a></li>
                    <li>&bullet;</li>
                    <li>Galery</li>
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

<div class="gallery mt-5">
    <?php
    $no = 1;
    foreach ($gambar  as $sw) {
    ?>
        <div class="gallery-item">
            <figure>
                <img src="<?= base_url($sw['gambar']); ?>" alt="dog" />
                <figcaption>Picture of a few dogs having a rest and sleeping.</figcaption>
            </figure>
            <p>OMG, seriously how cute are these dogs?</p>
        </div>
    <?php }  ?>
</div>

<?= $this->endSection(); ?>