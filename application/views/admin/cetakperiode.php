<?php
require "application/koneksi/koneksi.php";

$tgl1 = $_POST["Tanggal1"];
$tgl2 = $_POST["Tanggal2"];
?>
<!-- <?php
        $data = $conn->query("SELECT SUM(total) as tot_masuk  from pesanan where tanggal_pesan BETWEEN '$tgl1' AND '$tgl2'");
        while ($sql = $data->fetch_assoc()) {
            $masuk = $sql['tot_masuk'];
        }
        ?> -->
<!DOCTYPE html>
<html lang="en">
<div class="container">


    <head>
        <title>Laporan Pemasukan</title>
    </head>

    <body>
        <center>
            <h2>Laporan Rekap Pemasukan</h2>
            <h3>Desserthash.Id</h3>
            <p>Tanggal : <?php $a = $tgl1;
                            echo date("d-M-Y", strtotime($a)) ?> s/d
                <?php $b = $tgl2;
                echo date("d-M-Y", strtotime($b)) ?>


            <table border="1" cellspacing="0" class="table table-bordered table-striped table-hover" width="200">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>No order</th>
                        <th>Total</th>

                    </tr>
                </thead>
                <tbody>
                    <?php

                    if (isset($_POST["CetakPeriode"])) {

                        $data = "select * from pesanan where tanggal_pesan BETWEEN '$tgl1' AND '$tgl2' order by tanggal_pesan asc";
                    }
                    $query = mysqli_query($conn, $data);
                    $no = 1;

                    while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {

                    ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?php $tgl = $data['tanggal_pesan'];
                                echo date("d M Y", strtotime($tgl)) ?></td>
                            <td><?= $data['no_order'] ?></td>
                            <td align="left">Rp <?= number_format($data['total'], 0, ',', '.'); ?></td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
                <tr>

                    <td colspan="3">Total Pemasukan</td>
                    <td>Rp <?= number_format($masuk, 0, ',', '.') ?></td>

                </tr>
            </table>
        </center>

        <script>
            window.print();
        </script>
    </body>

</html>
</div>
</div>