<style>
    h3 {
        font-size: large;
        text-align: justify;
    }

    .card-header {
        padding-bottom: 0.8px;
    }
</style>
<div class="container-fluid">
    <div class="card card-info">
        <div class="card-header bg-primary" style="color:#fff">
            <h3 class="card-title">
                <i class="fa fa-fw fa-print"></i> Cetak Pemasukan
            </h3>
        </div>
        <form action="<?= base_url('admin/cetakperiode') ?>" method="post" enctype="multipart/form-data" target="_blank">
            <div class="card-body">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Awal</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="Tanggal1" name="Tanggal1">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Akhir</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="Tanggal2" name="Tanggal2">
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info" name="CetakPeriode" target="_blank">Cetak Periode</button>

                <a href="<?= base_url('admin/penjualan'); ?>" class="btn btn-secondary" style="text-decoration: none;color:#fff;">Batal</a></button>
            </div>
        </form>
    </div>
</div>
</div>