<?php
    //DATABASE PERTAMA
    $username = "root" ;
    $password = "";
    $database = "db_Surat";

    //BUAT KONEKSI NYA
    $con = mysqli_connect('localhost' , $username , $password , $database);
    $result = mysqli_query($con , "SELECT * FROM tbl_surat");

    $data_arr = [];

    while ($data = mysqli_fetch_assoc($result)) {
        $data_arr[] = $data;
    }

    echo json_encode($data_arr);
    die;

    if($con){
        echo 'Konek cuk';
    } else {
        echo 'Failed Connect';
    }


?>