<!doctype html>
<html lang="en">
    
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
    include ("koneksi.php");
    ?>
        
    </head>
    <body>
    <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['username']==""){
		header("location:tampilan-login.php");
	}
 
	?>

    <?php $query = $db->query("SELECT * FROM db_login"); ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed">
            <a class="navbar-brand" href="#">
                <img src="picture/logo-m.png" width="30" height="30" class="d-inline-block align-top mr-2">Minang Jaya</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                
            <?php $data = mysqli_fetch_array($query) ?>
            <div class="navbar-collapse collapse order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">

                        <b><a class="mr-3 kata"><?php echo $_SESSION["username"];?></a></b>
                    </li>
                </ul>
            </div>
        </nav>
        <!--SIDEBAR-->

        <div class="sidebar">
            <a class="fas fa-tachometer-alt" href="dasboard.php">
                Dasboard
            </a>
     
            <a class="fas fa-database" href="data.php">Data Harian</a>
            <a class="fas fa-piggy-bank" href="tabungan.php">Tabungan</a>
            <a class ="fas fa-sign-out-alt"href="keluar.php">Keluar</a>
        </div>
        
        
            
      
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>
</html>