<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="<?= base_url('assets/frontend/assets/css/styles.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/assets/css/style2.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/assets/css/core-style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/assets/fontawesome/css/all.css') ?>">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <title>Desserthash.id</title>
    <link rel="icon" href="<?= base_url('assets/frontend/img/logo.jpg') ?>">
</head>

<body>

    <!--========== SCROLL TOP ==========-->
    <!-- <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a> -->
    <!-- <a href="#">

     <div class="chat fixed-bottom end-0 d-flex justify-content-end   m-5">
          <img src="<?= base_url('assets/frontend/img/wa.png'); ?>" alt="" width="40px">
          <small class="mt-2 fw-bold">Hubungi Kami</small>
      </div>
  </a> -->


    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>

    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="#home" class="nav__logo">Desserthash.id</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list ml-3">
                    <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#menu" class="nav__link">Menu</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact us</a></li>
                    <li class="nav__item"><a href="<?= base_url('auth') ?>" class="nav__link">Login</a></li>
                    <li class="nav__item position-relative"><a href="<?= base_url('cart') ?>" class="nav__link">
                            <i class="fas fa-shopping-cart" style="font-size:23px;"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size:10px">
                                <?php $cart = $this->cart->total_items(); ?>
                                <?= $cart ?>
                            </span></a></li>


                    <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>

                </ul>
            </div>



        </nav>
    </header>

    <main class="l-main">
        <!--========== HOME ==========-->
        <section class="home" id="home">
            <div class="home__container bd-container bd-grid">
                <div class="home__data">
                    <h1 class="home__title">Desserthash.id</h1>
                    <h2 class="home__subtitle">Cobalah Menu Terbaik <br> Minggu ini</h2>
                    <a href="#menu" class="button">Lihat Menu</a>
                </div>

                <img src="<?= base_url('assets/frontend/img/pg.png') ?> " alt="" class="home__img">
            </div>
        </section>

        <!--========== ABOUT ==========-->
        <section class="about section bd-container" id="about">
            <div class="about__container  bd-grid">
                <div class="about__data">
                    <span class="section-subtitle about__initial">Tentang kami</span>
                    <h2 class="section-title about__initial">Eat me and you will find Hapiness <br> Desserthash.id</h2>
                    <p class="about__description" style="text-align: justify;">Halo sobat maniezzzz!!!!

                        Perlu hal yang balikin Mood?
                        Mau makan manis tapi ga kemanisan?
                        Butuh makanan yang bisa bikin kalian Bahagia?

                        Tenang kami punya solusi!!!!! Soal harga ga perlu khawatir karena aman di kantong lho, ngeluarin 25k kamu udah bisa dapetin yang BIG!!! dan ukuran KECIL cuma 10k!!!👻👻👻
                        Dessert terbaik di seluruh kota, dengan layanan pelanggan yang sangat baik, makanan terbaik dan dengan harga terbaik, kunjungi kami.</p>
                    <a href="https://www.instagram.com/desserthash.id/" class="button">Explore</a>
                </div>

                <img src="<?= base_url('assets/frontend/img/about.jpg') ?>" alt="" class="about__img">
            </div>
        </section>




        <!--========== MENU ==========-->
        <section class="menu section bd-container" id="menu">
            <span class="section-subtitle">Spesial</span>
            <h2 class="section-title">Menu minggu ini</h2>

            <div class="menu__container bd-grid">
                <?php $i = 1 ?>
                <?php foreach ($produk as $a) : ?>
                    <div class="menu__content">
                        <div class="product-img">
                            <img src="<?= base_url('assets/frontend/img/varian/' . $a->gambar) ?>" alt="" class="menu__img">
                            <div class="product-quicview">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#detail<?= $a->id_produk ?>"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <h6><?= $a->nama_produk ?></h6>
                        <span><?= $a->ukuran ?></span>
                        <span>Rp <?= number_format($a->harga, 0, '.', '.') ?></span>
                        <!--  <div class="quantity">
                            <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                            <input type="text" class="qty-text" id="qty" style="width:30px; text-align:center;" step="1" min="1" max="12" name="quantity" value="1">

                            <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                        </div> -->
                        <!--  <a href="<?= base_url('cart/tambah/' . $a->id_produk) ?>" class="button menu__button"><i class='bx bx-cart'></i></a> -->
                    </div>
                    <?php $i++ ?>
                    <div class="modal fade" id="detail<?= $a->id_produk ?>" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <button type="button" class="close btn" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                                <div class="modal-body">
                                    <div class="quickview_body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 col-lg-5">
                                                    <div class="quickview_pro_img">
                                                        <img src="<?= base_url('assets/frontend/img/varian/' . $a->gambar) ?>" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <div class="quickview_pro_des">
                                                        <h4 class="title"><?= $a->nama_produk ?></h4>
                                                        <div class="top_seller_product_rating mb-15">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                        <h5 class="price">Rp <?= number_format($a->harga, 0, '.', '.') ?></h5>

                                                        <p><?= $a->ukuran ?></p>

                                                    </div>
                                                    <!-- Add to Cart Form -->
                                                    <form class="cart" method="post" action="<?= base_url('cart/tambah/' . $a->id_produk) ?>">
                                                        <div class="quantity">
                                                            <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                                            <input class="form" type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="qty" value="1">

                                                            <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                        </div>
                                                        <button type=" submit" value="5" class="cart-submit">Add to cart</button>


                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>


        </section>


        <!-- ****** Quick View Modal Area Start ****** -->



        <!-- ****** Quick View Modal Area End ****** -->


        <!--========== CONTACT US ==========-->
        <section class="contact section bd-container" id="contact">
            <div class="contact__container bd-grid">
                <div class="contact__data">
                    <span class="section-subtitle contact__initial">Let's talk</span>
                    <h2 class="section-title contact__initial">Contact us</h2>
                    <p class="contact__description">Jika Anda ingin memesan dessert box dari kami, hubungi kami dan kami akan segera melayani Anda, dengan layanan obrolan 24/7 kami.</p>
                </div>

                <div class="contact__button">
                    <a href="#" class="button">Order Now</a>
                </div>
            </div>
        </section>
    </main>

    <!--========== FOOTER ==========-->
    <footer class="footer section bd-container">
        <div class="footer__container bd-grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">Desserthash.id</a>
                <span class="footer__description">Restaurant</span>
                <div>
                    <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                    <a href="https://www.instagram.com/desserthash.id/" class="footer__social"><i class='bx bxl-instagram'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Delivery/COD</h3>
                <ul>
                    <li>Hash</li>
                    <li>Gosend</li>
                    <li>Grab Delivery</li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Information</h3>
                <ul>
                    <li><a href="#contact" class="footer__link">Contact us</a></li>
                    <li><a href="#menu" class="footer__link">Menu</a></li>
                    <li><a href="#about" class="footer__link">About</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Address</h3>
                <ul>
                    <li>Cisarua, Bogor</li>
                    <li>Jawa Barat, Indonesia</li>
                </ul>
            </div>
        </div>
        <!-- <button type="button" class="btn btn-light fixed-bottom">Light
     <img src="<?= base_url('assets/frontend/img/wa.png'); ?>" alt="" width="30px">
 </button> -->


        <p class="footer__copy">
            <marquee>&#169; 2021 Desserthash. Eat me and you will find Hapiness</marquee>
        </p>
    </footer>

    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="<?= base_url('assets/frontend/assets/js/main.js') ?> "></script>
    <script src="<?= base_url('assets/js/wa.js') ?> "></script>
    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>



</body>

</html>

<script type="text/javascript">
    <?php if ($this->session->flashdata('pesan')) : ?>
        $(document).ready(function() {
            swal({
                title: "Done",
                text: "Berhasil Masuk Keranjang",
                timer: 1500,
                showConfirmButton: false,
                type: 'success'
            });
        });
    <?php
        $this->session->unset_userdata('pesan');
    endif; ?>
</script>