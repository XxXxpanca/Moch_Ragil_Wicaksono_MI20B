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
     <h1 class="text-center">LIST SURAT</h1>

      <div class="container">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">No.Surat</th>
      <th scope="col">Jenis Surat</th>
      <th scope="col">Tgl Surat</th>
      <th scope="col">Ttd Surat</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($result as $val){
    ?>
    <tr>
      <th><?=$val['No_Surat']?></th>
      <td><?=$val['Jenis_Surat']?></td>
      <td><?=$val['Tgl_Surat']?></td>
      <td><?=$val['Ttd_Surat']?></td>
    </tr>
    <?php } ?>

  </tbody>
</table>
</div>


    </body>
    <!-- <script src="asset/js/bootstrap.min.js"></script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
    <script src="asset/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>