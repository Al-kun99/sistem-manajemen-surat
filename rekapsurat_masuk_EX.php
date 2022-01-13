<?php  
include './connection.php';
$filename = "Rekap_Surat_Masuk-(".date('d-m-Y').").xls";

header("Content-type: application/vnd-ms-excel"); 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=$filename");

?>

<h2>Data Surat Masuk</h2>

<table border="1">
	<tr>
      <th>No.</th>
      <th>Nomor Surat</th>                           
      <th>Tanggal Terima</th>                
      <th>Pengirim</th>
      <th>Kepada</th>
      <th>Nomor Berita</th>
      <th>Perihal</th>
      <th>Jumlah Lembar</th>  
      <th>Petugas</th>
      <th>Keterangan</th>
    </tr>

    <?php  
      $no=1;
      $bulan = date('n');
      $tahun = date('y');
      $query  = "SELECT * FROM surat_masuk ORDER BY id_surat_masuk DESC";  
      $result = mysqli_query($link, $query);
    
    if(!$result){
        die ("Query Error: ".mysqli_errno($link).
            " - ".mysqli_error($link));
    }
    
    while($data = mysqli_fetch_assoc($result)) {
     ?>
      <tr>  
        <td><?php echo  $no++; ?></td>                                  
        <td><?php echo "MKB/".$data['nomor_surat_masuk']."/SAN/".$bulan."/".$tahun; ?></td>                  
        <td><?php echo $data['tanggal_surat_masuk']; ?></td>
        <td><?php echo $data['pengirim']; ?></td>  
        <td><?php echo $data['kepada']; ?></td> 
        <td><?php echo $data['nomor_berita']; ?></td>
        <td><?php echo $data['perihal']; ?></td>
        <td><?php echo $data['jumlah_lembar']; ?></td>
        <td><?php echo $data['petugas']; ?></td>
        <td><?php echo $data['keterangan']; ?></td>                 
      </tr>
    
    <?php
    }
    
    ?>



</table>