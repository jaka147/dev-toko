<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
            echo "<script>alert('Gagal !!Password ATAU Username anda salah');history.go(-1);</script>";
		}else if($_GET['pesan'] == "logout"){
            echo "<script>alert('ANDA BERHASIL LOG OUT');history.go(-1);</script>";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
       
        <div class="kotak_login">
            <h3 class="padding30px "> Manajamen Minang Jaya</h3>
        <form action="proses_login.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" name="username"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            
            <button type="submit" class="btn btn-primary">Masuk</button>
        </form>
        </div>
    </body>
</html>