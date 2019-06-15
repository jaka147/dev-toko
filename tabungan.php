<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php
    include ("koneksi.php");   
    include ("menu-utama.php");
    $query= $db->query("SELECT SUM(tambah_tabungan)As total_tabungan,SUM(total_penarikan)AS total_penarikan FROM db_tabungan");
    $data =mysqli_fetch_array($query);

    $tambah_tabungan=$data["total_tabungan"];
    $total_penarikan=$data["total_penarikan"];
    $total_saldo=$tambah_tabungan-$total_penarikan;
    ?>
    <div class="content">
        <div class="row">
            <div class="col-4">
                <div class="tabungan bg-primary">
                    <h3 class="text-light">Tambah Tabungan</h3>
                    <form method="POST" action="proses_nabung.php">
                        <div class="form-group">
                            <br>
                            <input type="number" class="form-control" name="tambah_tabungan" placeholder="Masukan Nominal">
                            <button type="submit" class="btn btn-lg btn-danger">Simpan Tabungan</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-4">
                <div class="tabungan bg-info">
                    <h3 class="text-light">Total Tabungan</h3>
                    <h4>Rp. <?php echo number_format($total_saldo); ?></h4>
                </div>
            </div>
            <div class="col-4">
                <div class="tabungan bg-danger">
                    <h3 class="text-light">Total Penarikan</h3>
                    <form method="POST" action="proses_tarik.php">
                        <div class="form-group">
                            <br>
                            <input type="number" class="form-control" name="total_penarikan" placeholder="Masukan Nominal">
                            <button type="submit" class="btn btn-lg btn-info">Tarik Tabungan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>