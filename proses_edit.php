<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
 $tanggal = $_POST['tanggal'];
$dana_masuk = $_POST['dana_masuk'];
$dana_keluar = $_POST['dana_keluar'];

$query = $db->query("UPDATE `db_inputdata` SET `tanggal`='$tanggal',`dana_masuk`=$dana_masuk,`dana_keluar`=$dana_keluar WHERE id=$id");

header("location:data.php");
?>