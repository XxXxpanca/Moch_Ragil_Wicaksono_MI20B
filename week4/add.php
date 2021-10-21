<?php

$username = "root" ;
$password = "";
$database = "db_Surat";

//Buat koneksi
$con = mysqli_connect('localhost' , $username , $password , $database);
$result = mysqli_query($con , "SELECT * FROM tbl_surat");


// $row = [];
// while ($data = mysqli_fetch_assoc($result)){
//   $row[] = $data;
// }


?>
<!DOCTYPE html>
<html>
    
    <head>

    <title>add</title>
    <!-- <link rel="stylesheet" href="../asset/css/bootstrap.min.css"> -->

    <link href="asset/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="asset/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>

    <body>
      <div class="container">
        <div class="card">
          <div class="card-header bg-white text-uppercase">
            <div class="h3 text-center">Tambah Surat</div>
          </div>
          <div class="card-body">
              <form action="#" method="post">
              <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                      <small>Nomor Surat</small>
                      <input type="text" name="No_Surat" id="No_Surat" class="form-control" placeholder="SK-2021-09001">
                    </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                       <small>Jenis Surat</small>
                       <select name="Jenis_Surat" id="Jenis_Surat" class="form-control">
                          <option value="">Silahkan Pilih....</option>
                          <option value="1">Surat Keputusan</option>
                          <option value="2">Surat Pernyataan</option>
                          <option value="3">Surat Peminjaman</option>
                      </select>
                    </div>
                </div>
                <div class="col-lg-12 mt-3">
                  <div class="form-group">
                       <small>Tanggal Surat</small>
                        <input type="date" name="Tgl_Surat" id="Tgl_Surat" class="form-control">
                  </div>
                </div>
                <div class="col-lg-12 mt-3">
                  <div class="form-group">
                       <small>Pembuat Surat</small>
                        <input type="text" name="Ttd_Surat" id="Ttd_Surat" class="form-control" placeholder="Nama anda...">
                  </div>
                </div>
                <div class="col-lg-6 mt-3">
                  <div class="form-group">
                       <small>Menyetujui</small>
                        <input type="text" name="Ttd_Menyetujui" id="Ttd_Menyetujui" class="form-control" placeholder="Nama Anda...">
                  </div>
                </div>
                <div class="col-lg-6 mt-3">
                  <div class="form-group">
                       <small>Mengetahui</small>
                        <input type="text" name="Ttd_Mengetahui" id="Ttd_Mengetahaui" class="form-control" placeholder="Tanda Tangan Anda...">
                  </div>
                </div>

                  <div class="col-lg-12 mt-4">
                    <button type="submit" name="submit" class="btn btn-primary text-white">Add </button>
                    <a href="view.php" class="btn btn-danger">Cancel</a>
                  </div>
              </div>
              </form>
          </div>
        </div>
      </div>
  <?php
    if(isset($_POST['submit'])) {
        $No_Surat = $_POST['No_Surat'];
        $Jenis_Surat = $_POST['Jenis_Surat'];
        $Tgl_Surat = $_POST['Tgl_Surat'];
        $Ttd_Surat = $_POST['Ttd_Surat'];
        $Ttd_Menyetui = $_POST['Ttd_Menyetujui'];
        $Ttd_Mengetahui = $_POST['Ttd_Mengetahui'];

        //INSERT USER DATA INTO TABLE 
        $result =mysqli_query($con, "INSERT INTO `tbl_surat` (`id`, `No_Surat`, `Jenis_Surat`, `Tgl_Surat`, `Ttd_Surat`, `Ttd_Mengetahui`, `Ttd_Menyetujui`) VALUES 
        (NULL, '$No_Surat','$Jenis_Surat','$Tgl_Surat','$Ttd_Surat','$Ttd_Menyetui','$Ttd_Mengetahui')");
      

     
     //ECHO MASSAGE WHEN USER ADDED
     echo "User added succesfully. <ahref='view.php'>List Surat </a>";  
    
  }
  ?>



    </body>
    <!-- <script src="asset/js/bootstrap.min.js"></script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
    <script src="asset/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>