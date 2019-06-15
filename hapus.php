<?php

include 'koneksi.php';

$id =$_GET['id'];
$query = $db->query("DELETE FROM db_inputdata WHERE id='$id'")or die(mysql_error());

header ("location:data.php");
?>