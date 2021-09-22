<?php     
 $Biodata = array(
    'Nama' => 'Moch Ragil Wicaksono' , 
    'Kelas' => 'MI20B' ,
    'NIK' => '202002077' ,
    'Alamat' => 'Jl.Tajur indah' ,

    );
  
?>
<html>
    <head>
    
    </head>
    <body>
        <div style ="text-align :center">
        
        <?php 
       echo "BIODATA";
       echo "<br><br>";
       echo "Nama : " . "<b>" . $Biodata["Nama"] . "</b>";
       echo "<br>";
       echo "Kelas : " . "<b>" . $Biodata["Kelas"] . "</b>";
       echo "<br>";
       echo "NIK : " . "<b>" . $Biodata["NIK"] . "</b>";
       echo "<br>";
       echo "Email : " . "<b>" . $Biodata["Email"] . "</b>";

        ?>        
    
        </div>
       
    </body>
</html>