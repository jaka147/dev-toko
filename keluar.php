<?php 
    session_start();

    session_destroy();

    header ("location:tampilan-login.php");
    echo"Anda berhasil keluar";
?>