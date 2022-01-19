<style>
    h3 {
        font-size: large;
        text-align: justify;
    }

    .card-header {
        padding-bottom: 0.8px;
    }

    a {
        color: grey;
    }

    a:hover {
        text-decoration: none;
    }
</style>


<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Pesanan</h1>

    <div class="card card-info">
        <div class="card-header" style="color:#fff; background-color:#069c54">
            <h3 class="card-title">

                <i class="fa fa-fw fa-table"></i> Data Pemasukan

            </h3>
        </div>
        <br>
        <div style="width:20%;margin-left:2%">
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div>
                    <a href="<?= base_url('admin/print'); ?>" class="btn btn-primary mb-3" style="background-color:#069c54"><i class="fa fa-print mr-2"></i>Cetak</a>
                    <table class="table table-bordered table-striped table-hover" cellpadding="10" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No_Order</th>
                                <th>Tanggal Pemesanan</th>
                                <th>Total</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($pesanan as $ih) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><a href="<?= base_url('admin/detail/' . $ih['no_order']) ?>"><?= $ih['no_order'] ?></a></td>
                                    <td><?= $ih['tanggal_pesan'] ?></td>
                                    <td>Rp <?= number_format($ih['total'], 0, '.', '.'); ?></td>
                                </tr>

                            <?php endforeach; ?>
                        </tbody>
                        <tr>
                            <td colspan="3">Total Pemasukan</td>
                            <td>Rp <?= number_format($sum['total'], 0, '.', '.'); ?></td>

                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>