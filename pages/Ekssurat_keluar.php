  <a href="rekap_Ekssurat_keluar_EX.php" class="btn btn-default"><i class="fa fa-print"></i>Export To Excel </a>

  </br>

  <div class="row">
    <div class="col-xs-12">
    <!-- Advanced Tables -->
      <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Ekspedisi Surat Keluar</h3>
            </div>
        
        <div class="box-body">
          
            <table class="table table-bordered table-striped" id="example1">
              <thead>
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
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
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
                    <td>
                      <a href="?page=Ekssurat_keluar&aksi=edit_ekssurat_keluar&id_ekspedisi_sk=<?php echo $data['id_ekspedisi_sk']; ?>" class = 'btn btn-info btn-sm' style="width: 70px">Edit </a>
                      <a href="?page=Ekssurat_keluar&aksi=hapus_ekssurat_keluar&id_ekspedisi_sk=<?php echo $data['id_ekspedisi_sk']; ?>" class = 'btn btn-danger btn-sm' style="width: 70px">Hapus</a>
                    </td>
                   </tr>
                
                <?php
                }
                
                ?>

              </tbody>

            </table>
          
        </div>
      </div>
    </div>
  </div>