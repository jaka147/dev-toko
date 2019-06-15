<?php 
include ("koneksi.php");

$tambah_tabungan=$_POST['tambah_tabungan'];

$query = $db->query("INSERT INTO db_tabungan (tambah_tabungan)
VALUE ('$tambah_tabungan')");
 
 header("location:tabungan.php");


?>