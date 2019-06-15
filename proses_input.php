<?php
include 'koneksi.php';
$tanggal=$_POST['tanggal'];
$dana_masuk=$_POST['dana_masuk'];
$dana_keluar=$_POST['dana_keluar'];
    // menyiapkan query
    $query = $db->query("INSERT INTO db_inputdata (tanggal,dana_masuk,dana_keluar)
    VALUES ('$tanggal','$dana_masuk','$dana_keluar')");
    
echo $query;
    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
     header("Location: data.php" );
?>