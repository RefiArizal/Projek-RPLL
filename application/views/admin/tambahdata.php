<div class="container-fluid">
    <div class="card card-info">
        <div class="card-header" style="color:#fff;background-color:#069c54">
            <h3 class="card-title">
                <i class="fa fa-fw fa-table"></i> Tambah Data Produk
            </h3>
        </div>
        <?= form_open_multipart('admin/tambahdataproduk_aksi') ?>

        <div class="card-body">

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Produk</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk">

                </div>
            </div>



            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Ukuran</label>
                <div class="col-sm-6">
                    <select name="ukuran" id="" class="form-control" required>
                        <option value="">--Pilih--</option>
                        <option value="Big">Big</option>
                        <option value="Small">Small</option>
                    </select>

                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Harga</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">

                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Gambar Produk</label>
                <div class="col-sm-6">
                    <input type="file" class="" id="gambar" name="gambar" placeholder="Pilih Gambar">
                </div>
            </div>
        </div>

        <div class="card-footer">

            <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
            <a href="<?= base_url('admin/produk') ?>" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
        <?= form_close(); ?>
    </div>
</div>
</div>