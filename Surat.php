<?php     
 $Surat = array(
    'Date' => date('d F Y') , 
    'No' => '123',
    'Kota' => "Tasikmalaya" ,
    'Instansi' => array('LP3I ','Kota Tasikmalaya',),
    'Barang' => array('Komputer'),
    'Ttd'=> 'Moch Ragil Wicaksono',
    );
    

?>
<!DOCTYPE <html>
    <head>
        <title>SURAT</title>
        
    </head>
    <body>
            
        <?php 
        
        echo "<h2><center> SURAT PEMINJAMAN </h2>";
        echo '<center>';
        for($i=0; $i < count($Surat['Instansi']); $i++){
            echo $Surat['Instansi'][$i]; }
        echo '</center>';
        echo'<hr>';
        echo '<div style="text-align:right">' .$Surat['Kota'] . ", " .$Surat['Date'] . '</div>';
        echo '<br>';
        echo 'No : '. $Surat['No'];
        echo '<br>';
        echo 'Lampiram : - ';
        echo '<br>';
        echo 'Perihal : <b>Permohonan Peminjaman Komputer</b>';
        echo '<br><br>';
        echo 'Yth';
        echo '<br>';
        echo '<b>Kepala Kampus</b> <br>';
        echo '<b>LP3I KAMPUS KOTA TASIKMALAYA</b> <br>';
        echo 'Di Tempat <br><br>';
        echo 'Dengan Hormat, <br>';
        echo '<br>';
        echo 'Dalam rangka pelaksanaan kegiatan Pengurus LCC Periode 2021 dan <br>';
        echo 'bertepatan dengan perayaan HUT RI ke 76 yang diadakan oleh LCC untuk mengadakan Lomba PES yang akan disenggarakan pada : <br><br>';
        echo 'Tanggal :' .$Surat['Date'];
        echo '<br>';
        echo 'Waktu : '  . date ('h:i:s');
        echo '<br>';
        echo 'Tempat : Aula (lantai2)<br><br>';
        echo 'Sehubung dengan kegiatan Tersebut,kami bermaksud <b>Meminjam Komputer</b> untuk digunakan dalam acara tersebut. <br>';
        echo 'Besar Harapan Kami akan di dukung dari Pihak demi kelancaran Kegiatan tersebut. <br><br><br>'; 
        echo '<div style="text-align:right">' .$Surat['Ttd'] . ", " .$Surat['Kota']  . '</div>';
      
      ?> 
    <?php

    ?>
    </body>
</html>