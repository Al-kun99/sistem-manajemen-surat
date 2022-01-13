<?php  
include './connection.php';
$filename = "Rekap_Ekspedisi_Surat_Keluar-(".date('d-m-Y').").xls";

header("Content-type: application/vnd-ms-excel");
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=$filename");

?>

<h2>Data Ekspedisi Surat Keluar</h2>

<table border="1">
    <tr>
      <th>No.</th>
      <th>Nomor Surat Keluar</th>                           
      <th>Nomor Berita</th>
      <th>Dari</th>                
      <th>Untuk</th>
      <th>Via Pengiriman</th>
      <th>Tanggal Keluar</th>
      <th>Jam Keluar</th>
      <th>Jumlah Lembar</th>  
      <th>Jumlah Kirim</th>
      <th>Petugas</th>
      
    </tr>

                <?php  
                  $no=1;
                  $bulan = date('n');
                $tahun = date('y');
                  $query  = "SELECT * FROM ekspedisi_sk ORDER BY id_ekspedisi_sk DESC";  
                  $result = mysqli_query($link, $query);
                
                if(!$result){
                    die ("Query Error: ".mysqli_errno($link).
                        " - ".mysqli_error($link));
                }
                
                while($data = mysqli_fetch_assoc($result)) {
                 ?>
                  <tr>  
                    <td><?php echo $no++; ?></td>                                  
                    <td><?php echo "KKB/".$data['nomor_surat_keluar']."/SAN/".$bulan."/".$tahun; ?></td>  
                    <td><?php echo $data['nomor_berita']; ?></td>                
                    <td><?php echo $data['dari']; ?></td>
                    <td><?php echo $data['untuk']; ?></td>  
                    <td><?php echo $data['via']; ?></td>
                    <td><?php echo $data['tanggal_surat_keluar']; ?></td>
                    <td><?php echo $data['jam_surat_keluar']; ?></td>
                    <td><?php echo $data['jumlah_lembar']; ?></td>
                    <td><?php echo $data['jumlah_kirim']; ?></td>
                    <td><?php echo $data['petugas']; ?></td>                 
                   </tr>
                
                <?php
                }
                
                ?>



</table>