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
                <i class="fa fa-fw fa-table"></i> Data Pesanan
            </h3>
        </div>
        <br>
        <div style="width:20%;margin-left:2%">
            <?php $this->view('pesan') ?>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div>

                    <table class="table table-bordered table-striped table-hover" cellpadding="10" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No_Order</th>
                                <th>Tanggal Order</th>
                                <th>Nama Penerima</th>
                                <th>No Telp</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($pesanan as $ih) : ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $ih['no_order'] ?></td>
                                    <td><?= $ih['tanggal_pesan'] ?></td>
                                    <td><?= $ih['nama'] ?></td>
                                    <td><?= $ih['no_telp'] ?></td>
                                    <td><?= $ih['alamat'] ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/detail/' . $ih['no_order']) ?>" class="btn btn-warning">Detail</a>

                                    </td>

                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>

                        </tbody>


                    </table>


                    <!-- /.container-fluid -->

                </div>

            </div>

        </div>

    </div>

</div>
</div>