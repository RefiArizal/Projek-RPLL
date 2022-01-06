<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="<?= base_url('assets/frontend/assets/css/styles.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/assets/fontawesome/css/all.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/assets/css/cart.css') ?>">

    <!--
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="<?= base_url('assets/frontend/assets/css/styles.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/assets/fontawesome/css/all.css') ?>"> -->



    <title>Desserthash.id</title>
</head>

<body>

    <!--========== SCROLL TOP ==========-->
    <a href="#">
        <div class="chat fixed-bottom end-0 d-flex justify-content-end   m-5">
            <img src="<?= base_url('assets/frontend/img/wa.png'); ?>" alt="" width="40px">
            <small class="mt-2 fw-bold">Hubungi Kami</small>
        </div>
    </a>


    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="#" class="nav__logo">Desserthash.id</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list ml-3">
                    <li class="nav__item"><a href="<?= base_url('home') ?>" class="nav__link ">Home</a></li>
                    <li class="nav__item"><a href="<?= base_url('home') ?>#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="<?= base_url('home') ?>#menu" class="nav__link">Menu</a></li>
                    <li class="nav__item"><a href="<?= base_url('home') ?>#contact" class="nav__link">Contact us</a></li>
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

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main mb-5">
        <!--========== HOME ==========-->
        <section class="menu section bd-container" id="menu">
            <div class="d-flex justify-content-start">
                <h2 class="home-title ms-5">Desserthash.id | </h2>
                <h2>&nbsp; Checkout </h2>

            </div>
            <br><br>






            <div class="card">
                <div class="row">
                    <div class="col-md-12 cart">
                        <div class="title">
                            <div class="row">
                                <div class="col d-flex justify-content-start">
                                    <i class="fas fa-info-circle active-link" style="font-size: 24px;">&ensp;</i>
                                    <h4 style="color:#069c54;"><b>Rincian Pesanan</b></h4>
                                </div>
                                <div class="col align-self-center text-right text-muted">
                                    <?= $this->cart->total_items(); ?> Item
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-evenly  mb-4 mt-4 fw-bold">
                            <div class="px-lg-5 mr-lg-5" id="produc">Produk</div>
                            <div class="px-lg-5 ml-lg-1" id="quantity">Jumlah</div>
                            <div class="px-lg-5 ml-lg-5" id="prc">Harga</div>
                        </div>


                        <?php foreach ($this->cart->contents() as $a) : ?>
                            <div class="row border-top border-bottom">
                                <div class=" row main align-items-center ">
                                    <div class="col-2">
                                        <img class="img-fluid" src="<?= base_url('assets/frontend/img/varian/' . $a['gambar']) ?>" />

                                    </div>
                                    <div class="col-4">
                                        <div class="row "><?= $a['name'] ?></div>
                                        <?php if ($this->cart->has_options($a['rowid']) == TRUE) : ?>

                                            <?php foreach ($this->cart->product_options($a['rowid']) as $option_name => $option_value) : ?>
                                                <div class="row text-muted"><?= $option_value ?></div>
                                            <?php endforeach; ?>

                                        <?php endif; ?>
                                    </div>
                                    <div class="col ">
                                        <!-- <a href="#">-</a><a href="#" class="border">1</a
										><a href="#">+</a> -->
                                        <div class="row"><?= $a['qty'] ?></div>
                                    </div>
                                    <div class="col ">
                                        Rp <?= number_format($a['price'], 0, '.', '.') ?>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>

                        <br>

                        <!-- <div class="col d-flex justify-content-end">
                                        <h6>Subtotal</h6>
                                   </div>

                                   <div class="col d-flex justify-content-end mb-3">
                                        <h3>Rp <?= number_format($this->cart->total(), 0, '.', '.'); ?></h3>
                                   </div>

                                   <div class="col d-flex justify-content-between">
                                   <a href="<?= base_url('home') ?>#menu"  class="text-muted">&leftarrow; Back to shop</a>
                                   </div> -->


                    </div>



        </section>


        <div class="card mb-4">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col d-flex justify-content-start">
                                <i class="fas fa-map-marker-alt active-link" style="font-size: 24px;">&ensp;</i>
                                <h4 style="color:#069c54;"><b>Alamat Pengiriman</b></h4>
                            </div>

                            <?php
                            $no_order = date('Ymd') . strtoupper(random_string('alnum', 8));
                            ?>

                            <form class="row g-3" action="<?= base_url('cart/sukses') ?>" method="post" target="_blank">

                                <?php
                                $i = 1;
                                foreach ($this->cart->contents() as $ih) {
                                    echo form_hidden('qty' . $i++, $ih['qty']);
                                }
                                ?>

                                <div class="col-md-6">
                                    <input type="hidden" value="<?= $no_order ?>" name="no_order">
                                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="inputPassword2" placeholder="Nomor telepon" name="no_telp">
                                </div>

                                <div class="mb-1">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Nama Jalan, Gedung, No. Rumah" name="alamat"></textarea>
                                </div>


                                <!-- <button type="button" class="btn btn-success">Simpan</button> -->


                        </div>
                    </div>
                </div>

                <div class="col-md-4 summary" style="background-color: #f0f0f0;">
                    <div class="col d-flex justify-content-start">
                        <i class="far fa-credit-card active-link" style="font-size: 24px;">&ensp;</i>
                        <h4 class="text-center" style="color:#069c54;"><b> Pembayaran</b></h4>
                    </div>
                    <hr>



                    <div class="list mb-3">
                        <span>Total Item</span>
                        <span style="float: right;"><?= $this->cart->total_items(); ?></span>
                    </div>
                    <?php foreach ($this->cart->contents() as $a) : ?>
                        <div class="list mb-2">
                            <span><?= $a['name'] ?></span>
                            <?php if ($this->cart->has_options($a['rowid']) == TRUE) : ?>

                                <span style="float: right;"> Rp <?= number_format($a['price'], 0, '.', '.') ?></span>
                                <?php foreach ($this->cart->product_options($a['rowid']) as $option_name => $option_value) : ?>
                                    <div class="row text-muted"><?= $option_value ?></div>
                                <?php endforeach; ?>

                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>

                    <hr>
                    <div class="list text-end">
                        <h6>Total Pembayaran</h6>
                        <h4 style="float: right; color:#069c54;">Rp <?= number_format($this->cart->total(), 0, '.', '.'); ?></h4>
                    </div>
                    <button type="submit" class="btn btn-success col-md-12 mt-1">Buat Pesanan</button>
                </div>

                </form>
            </div>
        </div>
    </main>
</body>

</html>


<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src=""></script>
<script type="text/javascript" src=""></script>
<script type="text/Javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<!--
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-5">
                <table class="table" style="float:left">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Quantity</th>
                        <th>Ukuran</th>
                        <th>Subtotal</th>

                    </tr>

                    <?php $i = 1 ?>
                    <?php foreach ($this->cart->contents() as $a) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $a['name'] ?></td>
                            <td>Rp <?= number_format($a['price'], 0, '.', '.') ?></td>
                            <td><?= $a['qty'] ?></td>
                            <?php if ($this->cart->has_options($a['rowid']) == TRUE) : ?>

                                <?php foreach ($this->cart->product_options($a['rowid']) as $option_name => $option_value) : ?>
                                    <td><?= $option_value ?></td>
                                <?php endforeach; ?>

                            <?php endif; ?>
                            <td>Rp <?= number_format($a['subtotal'], 0, '.', '.') ?></td>

                        </tr>

                    <?php endforeach; ?>


                </table>
                <h1>Alamat Pengiriman</h1>
                <hr>
                <?php
                $no_order = date('Ymd') . strtoupper(random_string('alnum', 8));
                ?>
                <form action="<?= base_url('cart/sukses') ?>" method="post" target="_blank">
                    <?php
                    $i = 1;
                    foreach ($this->cart->contents() as $ih) {
                        echo form_hidden('qty' . $i++, $ih['qty']);
                    }
                    ?>
                    <input type="hidden" value="<?= $no_order ?>" name="no_order">
                    <input class="form-control" type="text" name="nama" Placeholder="Nama Penerima">
                    <hr>
                    <input class="form-control" type="text" name="no_telp" Placeholder="No Telp">
                    <hr>
                    <textarea name="alamat" id="" cols="30" rows="10" class="form-control">
                    </textarea>

                    <br>
            </div>
            <div class="col-3 total shadow" style="margin-left:120px;height:20vh">
                <h2 class="title" style="font-size:30px">Ringkasan Belanja</h2>
                <hr>
                <div class="list">
                    <span>Total Item</span>
                    <span style="float: right;"><?= $this->cart->total_items(); ?></span>
                </div>
                <div class="list">
                    <span>Total Pembayaran</span>
                    <span style="float: right;">Rp <?= number_format($this->cart->total(), 0, '.', '.'); ?></span>
                </div>
                <button type="submit">Pembayaran</button>
            </div>
            </form>
        </div>
    </div>
    </div> -->
</body>