<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body><div>
        <?Php
        include ("koneksi.php");
        include ("menu-utama.php"); 
        $query= $db->query("SELECT SUM(dana_masuk)AS total_dana_masuk,SUM(dana_keluar)AS total_dana_keluar FROM db_inputdata");
        $data =mysqli_fetch_array($query);
        $total_dana_masuk=$data["total_dana_masuk"];
        $total_dana_keluar=$data["total_dana_keluar"];
     
        
    $query1= $db->query("SELECT SUM(tambah_tabungan)As total_tabungan,SUM(total_penarikan)AS total_penarikan FROM db_tabungan");
    $data1 =mysqli_fetch_array($query1);

    $tambah_tabungan=$data1["total_tabungan"];
    $total_penarikan=$data1["total_penarikan"];
    $total_saldo=$tambah_tabungan-$total_penarikan;
    $saldo = $total_dana_masuk-$total_dana_keluar-$tambah_tabungan;
        ?></div>
       <div class="content">
           <div class="pt-2">
               <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                   <a class="navbar-brand text-light" href="#">Dasboard</a>
                </nav>
            </div>
            <div class="row">
                <div class="col-4 ">
                    <div class="kotak_dasboard bg-primary">
                        <div class="paddingtop text-light">Total Dana Masuk</div>
                        <div class="padding20px text-light">Rp. <?php echo number_format($total_dana_masuk); ?></div>
                    </div>
                    
                </div>
                <div class="col-4">
                    <div class="">
                        <div class="kotak_dasboard bg-primary">
                            <div class="paddingtop text-light">Total Pengeluaran</div>
                            <div class="padding20px text-light">Rp. <?php echo number_format($total_dana_keluar); ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="">
                        <div class="kotak_dasboard bg-primary">
                            <div class="paddingtop text-light">Total Saldo</div>
                            
                            <div class="padding20px text-light">Rp. <?php echo number_format($saldo); ?></div>
                        </div>
                    </div>    
                </div>
            </div> 
        </div>
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>