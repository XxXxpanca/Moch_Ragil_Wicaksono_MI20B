<?php

$username = "root" ;
$password = "";
$database = "db_Surat";

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

    <title>View</title>
    <!-- <link rel="stylesheet" href="../asset/css/bootstrap.min.css"> -->

    <link href="asset/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="asset/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>

    <body>
      <div class="container">
        <div class="card">
          <div class="card-header bg-white text-uppercase">
            <div class="h3 text-center">LIST MAHASISWA</div>
          </div>
          <div class="card-body">

      <table class="table table-striped w-100">
  <thead>
    <tr>
      <th scope="col">No.Surat</th>
      <th scope="col">Jenis Surat</th>
      <th scope="col">Tgl Surat</th>
      <th scope="col">Ttd Surat</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($result as $val){
    ?>
    <?php
    if($val["Jenis_Surat"]== '1'){
      $js = "Surat Keputusan";
    }
    else if($val["Jenis_Surat"]== '2'){
      $js = "Surat Pernyataan";
    }
    else if($val["Jenis_Surat"]== '3'){
      $js = "Surat Peminjaman";
    }else{
      $js = "Kode Bermasalah";
    }
    ?>

    <tr>
      <th><?=$val['No_Surat']?></th>
      <td><?=$js ?></td>
      <td><?=$val['Tgl_Surat']?></td>
      <td><?=$val['Ttd_Surat']?></td>
      <td>
        <a href="edit.php?id=<?= $val['id'] ?>" class="badge bg-primary text-white p-2 text-decoration-none" >Edit</a>
        <a href="#" class="badge bg-danger text-white p-2 text-decoration-none" >Delete</a>
     </td>
    </tr>
    <?php } ?>

  </tbody>
</table>
</div>
</div>
</div>


    </body>
    <!-- <script src="asset/js/bootstrap.min.js"></script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
    <script src="asset/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>