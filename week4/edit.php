<?php
error_reporting(0);
$username = "root" ;
$password = "";
$database = "db_Surat";
$id = $_GET['id'];


//Buat koneksi
$con = mysqli_connect('localhost' , $username , $password , $database);
$result = mysqli_query($con , "SELECT * FROM tbl_surat where id = '$id'");
$data = mysqli_fetch_assoc($result);

if($data["Jenis_Surat"]== '1'){
  $js = "Surat Keputusan";
}
else if($data["Jenis_Surat"]== '2'){
  $js = "Surat Pernyataan";
}
else if($data["Jenis_Surat"]== '3'){
  $js = "Surat Peminjaman";
}else{
  $js = "Kode Bermasalah";
}

// $row = [];
// while ($data = mysqli_fetch_assoc($result)){
//   $row[] = $data;
// }


?>
<!DOCTYPE html>
<html>
    
    <head>

    <title>Edit</title>
    <!-- <link rel="stylesheet" href="../asset/css/bootstrap.min.css"> -->

    <link href="asset/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="asset/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>

    <body>
      <div class="container">
        <div class="card">
          <div class="card-header bg-white text-uppercase">
            <div class="h3 text-center">Edit surat</div>
          </div>
          <div class="card-body">
              <form action="edit.php?id=<?= $val['id'] ?>" method="post">
              <div class="row">
                <div class="col-lg-6">
                  <input type="hidden" value="<?=$data['id']?>" name="id">
                    <div class="form-group">
                      <small>Nomor Surat</small>
                      <input type="text" name="No_Surat" id="No_Surat" class="form-control" placeholder="SK-2021-09001" value="<?= $data['No_Surat']?>">
                    </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                       <small>Jenis Surat</small>
                       <select name="Jenis_Surat" id="Jenis_Surat" class="form-control">
                          <option selected value="<?= $data["Jenis_Surat"]?>"><?= $js?></option>
                          <option value="1">Surat Keputusan</option>
                          <option value="2">Surat Pernyataan</option>
                          <option value="3">Surat Peminjaman</option>
                      </select>
                    </div>
                </div>
                <div class="col-lg-12 mt-3">
                  <div class="form-group">
                       <small>Tanggal Surat</small>
                        <input type="date" name="Tgl_Surat" id="Tgl_Surat" class="form-control" value="<?= $data['Tgl_Surat']?>">
                  </div>
                </div>
                <div class="col-lg-12 mt-3">
                  <div class="form-group">
                       <small>Pembuat Surat</small>
                        <input type="text" name="Ttd_Surat" id="Ttd_Surat" class="form-control" placeholder="Nama anda..."  value="<?= $data['Ttd_Surat']?>">
                  </div>
                </div>
                <div class="col-lg-6 mt-3">
                  <div class="form-group">
                       <small>Menyetujui</small>
                        <input type="text" name="Ttd_Menyetujui" id="Ttd_Menyetujui" class="form-control" placeholder="Nama Anda..." value="<?= $data['Ttd_Menyetujui']?>">
                  </div>
                </div>
                <div class="col-lg-6 mt-3">
                  <div class="form-group">
                       <small>Mengetahui</small>
                        <input type="text" name="Ttd_Mengetahui" id="Ttd_Mengetahaui" class="form-control" placeholder="Tanda Tangan Anda..." value="<?= $data['Ttd_Mengetahui']?>">
                  </div>
                </div>

                  <div class="col-lg-12 mt-4">
                    <button type="submit" name="update" class="btn btn-primary text-white">Update </button>
                    <a href="view.php" class="btn btn-danger">Cancel</a>
                  </div>
              </div>
              </form>
          </div>
        </div>
      </div>
  <?php
    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $No_Surat = $_POST['No_Surat'];
        $Jenis_Surat = $_POST['Jenis_Surat'];
        $Tgl_Surat = $_POST['Tgl_Surat'];
        $Ttd_Surat = $_POST['Ttd_Surat'];
        $Ttd_Menyetui = $_POST['Ttd_Menyetujui'];
        $Ttd_Mengetahui = $_POST['Ttd_Mengetahui'];

      //INSERT USER DATA INTO TABLE 
        $result =mysqli_query($con, "UPDATE tbl_surat SET id= '$id', No_Surat = '$No_Surat', Jenis_Surat = '$Jenis_Surat' , `Tgl_Surat` = '$Tgl_Surat' ,
         Ttd_Surat = '$Ttd_Surat', Ttd_Mengetahui = '$Ttd_Mengetahui', Ttd_Menyetujui = '$Ttd_Menyetui' 
         WHERE id = '$id' ");
      
      header("location:view.php?pesan=success");
     
     //ECHO MASSAGE WHEN USER ADDED
     echo "Surat Update succesfully. <ahref='view.php'>List Surat </a>";  
    
  }
  ?>



    </body>
    <!-- <script src="asset/js/bootstrap.min.js"></script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
    <script src="asset/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>