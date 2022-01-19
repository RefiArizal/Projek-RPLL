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
                                        <a class="btn btn-danger" data-toggle="modal" data-target="#hapusModal<?= $ih['no_order']; ?>">Hapus</a>
                                    </td>

                                </tr>
                                <?php $i++ ?>
                                <div class="modal fade" id="hapusModal<?= $ih['no_order']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span>&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah anda yakin ingin menghapus orderan dengan nama <?= $ih['nama'] ?>?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type=" button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <a href="<?= base_url('admin/hapus/' . $ih['no_order']) ?>" class="btn btn-danger">Yakin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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