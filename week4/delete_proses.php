<?php

$username = "root" ;
$password = "";
$database = "db_Surat";

$con = mysqli_connect('localhost' , $username , $password , $database);
$id = $_POST['id'];
$delete = "DELETE FROM tbl_surat WHERE id = $id";
$result = $con ->query($delete);

if ($result) {
 header("Location:view.php");   
} else {
    echo "failed delete data"; 
}
?>