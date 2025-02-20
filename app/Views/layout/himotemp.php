<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HIMO | Sidoarjo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">
    <link href="images/logohimoo.png">
    <link rel="stylesheet" href="<?= base_url('himo/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('icon/font/bootstrap-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('himo/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('himo/css/animate.css') ?>">
    <link rel="stylesheet" href="<?= base_url('himo/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('himo/css/aos.css') ?>">
    <link rel="stylesheet" href="<?= base_url('himo/css/bootstrap-datepicker.css') ?>">
    <link rel="stylesheet" href="<?= base_url('himo/css/jquery.timepicker.css') ?>">
    <link rel="stylesheet" href="<?= base_url('himo/css/fancybox.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('himo/fonts/ionicons/css/ionicons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('himo/fonts/fontawesome/css/font-awesome.min.css') ?>">


    <!-- A Simple non functional Pinterest inspired page layout created using only HTML and CSS.
    Created by M. Hassler - Hassified -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

    <!-- Selamat Datang -->
    <!-- 
        ardhie Theme
        link @dhieardhie_
        Personal Company Nurdiangroup Sidoarjo 
        -->
</head>

<body>
    <?= $this->include('layout/navbarhimo'); ?>
    <?= $this->renderSection('contenthimo'); ?>

    <footer class="section footer-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-3 mb-5">
                    <ul class="list-unstyled link text-center">
                        <li>
                            <h4>
                                <a href="<?= base_url('about') ?>">Tentang Kami</a>
                            </h4>
                        </li>
                        <a href="<?= base_url('about') ?>">
                            <img width="200" src="<?= base_url('himo/images/logohimoo.png') ?>" class="rounded" alt="Logo Himo Sda">
                        </a>
                        <p><span class="d-block"></span style="margin-top:-10px;">Himpunan Musyawarah Osis Sidoarjo</span></p>
                    </ul>
                </div>
                <div class="col-md-3 mb-5">
                    <ul class="list-unstyled link">
                        <li>
                            <h4>
                                <a href="">Contact Us</a>
                            </h4>
                        </li>
                        <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span> <span> 198 West 21th Street, <br> Suite 721 New York NY 10016</span></p>
                        <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span> <span> (+1) 435 3533</span></p>
                        <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span> <span> info@domain.com</span></p>
                    </ul>
                </div>
                <div class="col-md-3 mb-5 pr-md-5 contact-info">
                    <ul class="list-unstyled link">
                        <li>
                            <h4>
                                <a href="">Quick Links</a>
                            </h4>
                        </li>
                        <li><a href="<?= base_url('about') ?>">About Us</a></li>
                        <li><a href="<?= base_url('berita') ?>">Berita</a></li>
                        <li><a href="<?= base_url('agenda') ?>">Agenda</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-5">
                    <ul class="list-unstyled link">
                        <li>
                            <h4>
                                <a href="">Subscribe Now</a>
                            </h4>
                        </li>
                    </ul>
                    <p>Menjadi Generasi Hebat Anti Narkoba</p>
                    <form action="#" class="footer-newsletter">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email...">
                            <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row pt-5">
                <p class="col-md-6 text-left">

                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved IT Himo Sidoarjo | Created <i class="icon-heart-o text-danger" aria-hidden="true"></i> by <a href="https://instagram.com/dhieardhie_" target="_blank">Ardhie N.</a>
                    <!-- link Nurdiangroup Ardhie -->
                </p>

                <p class="col-md-6 text-right social">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                        </svg></a>
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="https://instagram.com/dhieardhie_"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg></a>
                </p>
            </div>
        </div>
    </footer>

    <script src="<?= base_url('himo/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('himo/js/jquery-migrate-3.0.1.min.js') ?>"></script>
    <script src="<?= base_url('himo/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('himo/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('himo/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('himo/js/jquery.stellar.min.js') ?>"></script>
    <script src="<?= base_url('himo/js/jquery.fancybox.min.js') ?>"></script>


    <script src="<?= base_url('himo/js/aos.js') ?>"></script>

    <script src="<?= base_url('himo/js/bootstrap-datepicker.js') ?>"></script>
    <script src="<?= base_url('himo/js/jquery.timepicker.min.js') ?>"></script>



    <script src="<?= base_url('himo/js/main.js') ?>"></script>

    <script>
        $(".grida").imagesLoaded(function() {
            $(".grida").masonry({
                itemSelector: ".grida-item"
            });
        });
    </script>
</body>

</html>