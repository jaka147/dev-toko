<?php 
include ("koneksi.php");

$total_penarikan=$_POST['total_penarikan'];

$query = $db->query("INSERT INTO db_tabungan (total_penarikan)
VALUE ('$total_penarikan')");
 
 header("location:tabungan.php");


?>