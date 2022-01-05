<div class="container-fluid">
    <div class="card card-info">
        <div class="card-header" style="color:#fff; background-color:#069c54">
            <h3 class="card-title">
                <i class="fa fa-fw fa-table"></i> Detail Data
            </h3>
        </div>

        <!-- Page Heading -->

        <?= form_open_multipart('admin/editdata_aksi') ?>
        <div class="card-body">

            <div class="form-group row">
                <label class="col-sm-3 col-form-label"><b>Nama Produk</b></label>
                <div class="col-sm-5">
                    <input type="hidden" name="id_produk" id="id_produk" value="<?= $produk['id_produk'] ?>">
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= $produk['nama_produk'] ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"><b>Ukuran</b></label>
                <div class="col-sm-5">
                    <select name="ukuran" id="ukuran" class="form-control">
                        <option <?= $produk['ukuran'] == 'Small' ? 'selected' : '' ?>value="Small">Small</option>
                        <option <?= $produk['ukuran'] == 'Big' ? 'selected' : '' ?>value="Big">Big</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"><b>Harga</b></label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="harga" name="harga" value="<?= $produk['harga'] ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Gambar Produk</label>
                <div class="col-sm-5">
                    <input type="hidden" name="gambarlama" value="<?= $produk['gambar'] ?>">
                    <img src="<?= base_url('assets/backend/img/varian/') . $produk['gambar'] ?>" height="100px">
                    <input type="file" id="gambar" name="gambar" value="<?= $produk['gambar'] ?>">
                </div>
            </div>
            <div class=" card-footer">

                <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
                <a href="<?= base_url('admin/produk') ?>" title="Kembali" class="btn btn-secondary">Batal</a>
            </div>
            <?= form_close() ?>


        </div>
        <!-- /.container-fluid -->

    </div>
</div>
</div>