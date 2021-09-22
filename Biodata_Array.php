<?php     
 $Biodata = array(
    'Nama' => "Moch Ragil Wicaksono" , 
    'Kelas' => "MI20B" ,
    'Email' => "Jamaika belok kiri"
     );

$Matkul = array('1.Web programming' ,'2.Database ','3.Design Graphic',);
?>
<!DOCTYPE <html>
    <head>
        <title>BIODATA</title>
    </head>
    <body>
            
        <?php 
        
        echo "<h2> BIODATA </h2>";
        echo " Nama : ".$Biodata['Nama'];
        echo "<br>";
        echo " Kelas : ".$Biodata['Kelas'];
        echo "<br>";
        echo " Alamat : ".$Biodata['Email'];
        echo "<br><br>";  
        echo "Saya Mengambil Mata Kuliah Sebagai berikut : <br>";
        ?> 
    <?php
     for($x=0;$x<count($Matkul);$x++){
        echo $Matkul[$x]."<br/>";}
    ?>
    </body>
</html>