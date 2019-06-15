<?php
    ob_start();
    session_start();
    // if(isset($_SESSION['username'])) header("location:menu-utama.php");
    include "koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
   
     $sql_login = $db->query("SELECT * FROM db_login WHERE username = '$username' AND password = '$password'");
    if(mysqli_num_rows($sql_login)>0){
        $row_registrasi = mysqli_fetch_array($sql_login);
        $_SESSION['id'] = $row_registrasi['id'];
        $_SESSION['username'] = $row_registrasi['username'];
        $_SESSION['password'] = $row_registrasi['password'];
    
    header("location:menu-utama.php");
}else{
    header ("location:tampilan-login.php?pesan=gagal");
    echo 1;
    } 
?>