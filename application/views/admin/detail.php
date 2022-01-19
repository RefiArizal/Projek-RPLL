<style>
    h3 {
        font-size: large;
        text-align: justify;
    }

    .card-header {
        padding-bottom: 0.8px;
    }
</style>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Pesanan</h1>

    <div class="card card-info">
        <div class="card-header" style="color:#fff; background-color:#069c54">
            <h3 class="card-title">
                <?php foreach ($nama as $nm) : ?>
                    <i class="fa fa-fw fa-table"></i> Data Pesanan <?= $nm['nama'] ?>
                <?php endforeach; ?>
            </h3>
        </div>
        <br>
        <div style="width:20%;margin-left:2%">
            <?php $this->view('pesan') ?>
        </div>
        <div class="card-body">
            <div class="table-responsive">


                <table class="table table-bordered table-striped table-hover" cellpadding="10" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>

                            <th>Nama Produk yang Dipesan</th>
                            <th>Ukuran</th>
                            <th>Banyak Produk yang Dipesan</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($rincian as $ih) : ?>
                            <tr>
                                <td><?= $i++ ?></td>

                                <td><?= $ih['nama_produk'] ?></td>
                                <td><?= $ih['ukuran'] ?></td>
                                <td><?= $ih['qty'] ?></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>

                </table>
            </div>


            <!-- /.container-fluid -->

        </div>
        <div class="card-footer">
            <a href="<?= base_url('admin/pesanan') ?>" title="Kembali" class="btn btn-secondary">Kembali</a>
        </div>




    </div>
</div>