<?php date_default_timezone_set("Asia/Jakarta");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dev-toko";

$conn = mysqli_connect($servername,$username,$password,$dbname) or die 
("Connection failed :" .mysqli_connect_eror());

$db = new mysqli('localhost','root','','dev-toko');

if($db->connect_error){
	die("Connection failed :".$db->connect_error);
}

?>