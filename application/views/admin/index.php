<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

</div>
<div class="container">
    <div class="row">
        <div class="col-xl-4 col-md-4">
            <div class="card mb-4">
                <div class="card-body-icon" style="position:absolute;z-index:0;top:-3px;right:15px;font-size:90px;opacity:0.7;color:black">
                    <i class="fas fa-boxes"></i>
                </div>
                <h1 style="font-size: large; margin-top: 10px;margin-left:15px;color: #4e4e4e;">Total Produk</h1>
                <div class="card-body" style="font-size:25px;font-weight:bolder;color:#4e4e4e;"><?= $count_produk ?></div>
                <div class="card-footer d-flex align-items-center justify-content-between bg-gradient-success">
                    <a class="small text-white" style="margin-left:170px;text-decoration:none;" href="<?= base_url('admin/produk') ?>">Selengkapnya <i class="fas fa-chevron-circle-right"></i></a>

                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-4">
            <div class="card mb-4">
                <div class="card-body-icon" style="position:absolute;z-index:0;top:-3px;right:15px;font-size:90px;opacity:0.7;color:black">
                    <i class='bx bxs-cart'></i>
                </div>
                <h1 style="font-size: large; margin-top: 10px;margin-left:15px;color: #4e4e4e;">Total Pesanan</h1>
                <div class="card-body" style="font-size:25px;font-weight:bolder;color:#4e4e4e;"><?= $count_pesanan ?></div>
                <div class="card-footer d-flex align-items-center justify-content-between bg-gradient-danger">
                    <a class="small text-white" style="margin-left:170px;text-decoration:none;" href="<?= base_url('admin/pesanan') ?>">Selengkapnya <i class="fas fa-chevron-circle-right"></i></a>

                </div>
            </div>

        </div>
        <div class="col-xl-4 col-md-4">
            <div class="card mb-4">
                <div class="card-body-icon" style="position:absolute;z-index:0;top:-3px;right:15px;font-size:90px;opacity:0.7;color:black">
                    <i class='bx bxs-spreadsheet'></i>
                </div>
                <h1 style="font-size: large; margin-top: 10px;margin-left:15px;color: #4e4e4e;">Total Pemasukan</h1>
                <div class="card-body" style="font-size:25px;font-weight:bolder;color:#4e4e4e;">Rp <?= number_format($total['total'], 0, ',', '.') ?></div>
                <div class="card-footer d-flex align-items-center justify-content-between bg-gradient-primary">
                    <a class="small text-white" style="margin-left:170px;text-decoration:none;" href="<?= base_url('admin/penjualan') ?>">Selengkapnya <i class="fas fa-chevron-circle-right"></i></a>

                </div>
            </div>

        </div>
    </div>
</div>
</div>
<!-- End of Main Content -->