<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body><div>
        <?Php
        include ("menu-utama.php");
        ?></div>
       <div class="content">
           <div class="pt-2">
               <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                   <a class="navbar-brand text-light" href="#">Dasboard</a>
                </nav>
            </div>
            <div class="row">
                <div class="col-4 ">
                    <div class="kotak_dasboard bg-primary">
                        <div class="paddingtop text-light">Total Dana Masuk</div>
                        <div class="progress lebarprogres progres3">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            70%
                            </div>
                        </div>
                    <div class="padding20px text-light">Rp.33.000.000</div>
                    </div>
                
            </div>
            <div class="col-4">
                <div class="kotak_dasboard">
                <div class="kotak_dasboard bg-primary">
                        <div class="paddingtop text-light">Total Pengeluaran</div>
                        <div class="progress lebarprogres progres3">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            70%
                            </div>
                        </div>
                    <div class="padding20px text-light">Rp.33.000.000</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="kotak_dasboard">
                <div class="kotak_dasboard bg-primary">
                        <div class="paddingtop text-light">Total Saldo</div>
                        <div class="progress lebarprogres progres3">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            70%
                            </div>
                        </div>
                    <div class="padding20px text-light">Rp.33.000.000</div>
                    </div>
                </div>    
            </div>
        </div> 
        <?php
            include ("chart.php");
        ?>
    </div>
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>