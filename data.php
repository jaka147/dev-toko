<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        
    </head>
    <body>
        <?php
        include("koneksi.php");
    include ("menu-utama.php");
    ?>
    <div class="content">
        
        <div>
            <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#exampleModal">Input Data Keuangan</button>
                    
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Masukan Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="proses_input.php" method="POST">
                                <div class="form-group">
                                    <label for="tanggal" class="col-form-label">Tanggal:</label>
                                    <input type="date" name="tanggal" class="form-control" id="tanggal">
                                </div>
                                <div class="form-group">
                                    <label for="dana-masuk" class="col-form-label">Dana Masuk</label>
                                    <input  type="number" class="form-control" value="0" name="dana_masuk" id="dana-masuk"></input>
                                </div>
                                <div class="form-group">
                                    <label for="dana-keluar" class="col-form-label">Dana Keluar</label>
                                    <input  type="number" class="form-control" name="dana_keluar" id="dana-Keluar"></input>
                                </div>
                                <div class="modal-footer">
                            
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!--EDIT-->
        <div>
            
                    
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="proses_edit.php" method="POST">
                                <div class="form-group">
                                    <label for="tanggal" class="col-form-label">Tanggal:</label>
                                    <input type="date" name="tanggal" class="form-control" id="tanggal-edit">
                                </div>
                                <div class="form-group">
                                    <label for="dana-masuk" class="col-form-label">Dana Masuk</label>
                                    <input  type="number" class="form-control" name="dana_masuk" id="dana-masuk-edit" >
                                </div>
                                <div class="form-group">
                                    <label for="dana-keluar" class="col-form-label">Dana Keluar</label>
                                    <input  type="number" class="form-control" name="dana_keluar" id="dana-keluar-edit" >
                                </div>
                                <div class="modal-footer">
                                <input type="hidden" class="form-control" name="id" id="id-edit" >
                                
                            <button type="submit" class="btn btn-primary" id='$data[ id]'>Simpan</button>
                        </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!---->
        <table class="table table-striped table-dark">
        <?php $query = $db->query("SELECT * FROM db_inputdata"); ?>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Dana Masuk</th>
                    <th scope="col">Pengeluaran</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
              if(mysqli_num_rows($query) > 0) {
                $no = 1;
                while($data = mysqli_fetch_array($query)){
            
                echo "<tr>
                    <th> ".$no."  </th>
                    <td> ".$data['tanggal']." </td>
                    <td> Rp. ".number_format($data['dana_masuk'])." </td>
                    <td> Rp. ".number_format($data['dana_keluar'])." </td>
                    <td>
                        <button type='button' class='btn-sm btn btn-primary btnedit' data-tanggal='$data[tanggal]' data-id='$data[id]' data-masuk='$data[dana_masuk]' data-keluar='$data[dana_keluar]' data-toggle='modal'>Edit</button>
                        <a href='hapus.php?id=$data[id]'> Hapus</a>
                    </td>

                </tr>";
                
                $no++;  
              }
            }
            ?>
            </tbody>
        </table>
    </div>
    


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
  $(".btnedit").click(function(){   
    $("#tanggal-edit").val($(this).attr("data-tanggal"))
    $("#dana-masuk-edit").val($(this).attr('data-masuk'))
    $("#dana-keluar-edit").val($(this).attr('data-keluar'))
    $("#id-edit").val($(this).attr('data-id'))

    $('#exampleModal1').modal('show')
  });
});
</script>     
</body>
</html>