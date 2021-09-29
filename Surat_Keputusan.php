
<?php    
    require_once('Connection.php');

    $jenis_Surat = "";

    if($data["Jenis_Surat"] == 1){
        $Jenis_Surat = "Surat Keputusan";
    }
    else if($data["Jenis_Surat"] == 2){
        $Jenis_Surat = "Surat Pernyataan";
    }
    else if($data["Jenis_Surat"] == 3){
        $Jenis_Surat = "Surat Peminjaman";
    }
    else { 
        die('Jenis Surat Tidak terdaftar');
    }


 $Surat = array(
    'Date' => $data ['Tgl_Surat'] , 
    'No' => $data ['No_Surat'] ,
    'kepada' => $data ['Ttd_Surat'] ,
    'Mengetahui' => $data ['Ttd_Mengetahui'],
    'Tgl_Surat' => $data ['Tgl_Surat'],
    'Kota' => "Tasikmalaya" ,
    'Instansi' => array('LP3I ','Kota Tasikmalaya',),
    'Barang' => array('Komputer'),
    'Ttd'=> $data ['Ttd_Menyetujui'],
    'Judul_Surat' => $Jenis_Surat,
    );
    

?>
<!DOCTYPE <html>
    <head>
        <title>SURAT</title>
        <style>
            body {
                padding-left: 350px;
                padding-right: 350px;
            }

            .content {
                padding: 50px;
                padding-bottom: 100px;
                background: #fff;
                box-shadow: 0px 0px 0.1rem 0px grey;
            }

            @media screen {
                body {
                    padding-left: 0px;
                    padding-right: 0px;
                }

                .content {
                    padding: 0px;
                    box-shadow: 0px 0px 0px 0px grey;
                }
            }
        </style>
    </head>
    <body>
       <div class="content">     
        <?php 
    
        echo "<h2><center> ". $Surat ["Judul_Surat"]."</h2>";
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
        echo $data ['Ttd_Surat'] ;
        echo ' Di Tempat <br><br>';
        echo 'Dengan Hormat, <br>';
        echo '<br>';
        echo 'Dalam rangka pelaksanaan kegiatan Pengurus LCC Periode 2021 dan <br>';
        echo 'bertepatan dengan perayaan HUT RI ke 76 yang diadakan oleh LCC untuk mengadakan Lomba PES yang akan disenggarakan pada : <br><br>';
        echo 'Tanggal :' .$data['Tgl_Surat'];
        echo '<br>';
        echo 'Waktu : '  . date ('h:i:s');
        echo '<br>';
        echo 'Tempat : Aula (lantai2)<br><br>';
        echo 'Sehubung dengan kegiatan Tersebut,kami bermaksud <b>Meminjam Komputer</b> untuk digunakan dalam acara tersebut. <br>';
        echo 'Besar Harapan Kami akan di dukung dari Pihak demi kelancaran Kegiatan tersebut. <br><br><br>'; 
        echo '<div style="text-align:right">' .$data['Ttd_Mengetahui'] . ", " .$Surat['Kota']  . '</div>';
      ?> 
    </div>
    </body>
</html>