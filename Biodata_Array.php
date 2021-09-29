<?php     
 $Biodata = array(
    'Nama' => "Moch Ragil Wicaksono" , 
    'Kelas' => "MI20B" ,
    'Email' => "Jamaika belok kiri"
     );

$Matkul = array('Web programming' ,'Database ','Design Graphic',);
?>
<!DOCTYPE <html>
    <head>
        <title>BIODATA</title>
    </head>
    <body>
            
        <?php 
        
        echo "<h2> BIODATA </h2>";
        echo "img sr";
        echo " Nama : ".$Biodata['Nama'];
        echo "<br>";
        echo " Kelas : ".$Biodata['Kelas'];
        echo "<br>";
        echo " Alamat : ".$Biodata['Email'];
        echo "<br><br>";  
        echo "Saya Mengambil Mata Kuliah Sebagai berikut : <br>";
        ?> 
    <?php
     for($i=0;$i < count($Matkul);$i++){
        echo $i + 1. . '. ' . $Matkul[$i]."<br/>"; 
    }
    ?>
    </body>
</html>