<?php
    //DATABASE PERTAMA
    $username = "root" ;
    $password = "";
    $database = "db_Surat";

    //BUAT KONEKSI NYA
    $con = mysqli_connect('localhost' , $username , $password , $database);
    $result = mysqli_query($con , "SELECT * FROM tbl_surat WHERE id='2'");

    $data = mysqli_fetch_assoc($result);
    

?>