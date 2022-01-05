<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Produk</h1>
    <?php $this->view('pesan'); ?>
    <a href="<?= base_url('admin/tambahdata/') ?>" class="btn btn-primary ml-5">Tambah Produk</a>
    <br>
    <br>
    <div class="row text-center">

        <?php foreach ($produk as $a) : ?>
            <div class="card ml-5 mb-3 " style="width: 16rem;">
                <img src="<?= base_url('assets/backend/img/varian/' . $a->gambar) ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $a->nama_produk ?></h5>
                    <h6 class="card-text"><?= $a->ukuran ?></h6>
                    <span class="badge bg-gradient-success card-text text-white">Rp. <?= number_format($a->harga, 0, ',', '.') ?></span><br><br>
                    <a href="<?= base_url('admin/editdata/' . $a->id_produk) ?>" class="btn btn-primary">Edit</a>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#hapusModal<?= $a->id_produk; ?>">Hapus</a>
                </div>

            </div>
            <div class=" modal fade" id="hapusModal<?= $a->id_produk; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Apakah anda yakin ingin menghapus <?= $a->nama_produk ?>?</p>
                        </div>
                        <div class="modal-footer">
                            <button type=" button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <a href="<?= base_url('admin/hapusproduk/' . $a->id_produk) ?>" class="btn btn-danger">Yakin</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


</div>
<!-- /.container-fluid -->

</div>