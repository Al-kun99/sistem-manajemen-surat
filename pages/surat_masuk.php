  <a href="?page=surat_masuk&aksi=tambahsurat_masuk" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
  <a href="rekapsurat_masuk_EX.php" class="btn btn-default"><i class="fa fa-print"></i>Export To Excel </a>
  </br>

  <div class="row">
    <div class="col-xs-12">
    <!-- Advanced Tables -->
      <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Data Surat Masuk</h3>
            </div>
        
        <div class="box-body">
          
            <table class="table table-bordered table-striped" id="example1">
              <thead>
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
                  <th>File</th>
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
                <?php 
                $bulan = date('n');
                $tahun = date('y');
                  $no=1;
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
                    <td><?php echo $data['file_surat_masuk']; ?></td>                  
                    <td>
                      <a href="?page=surat_masuk&aksi=editsurat_masuk&id_surat_masuk=<?php echo $data['id_surat_masuk']; ?>" class = 'btn btn-info btn-xs' style="width: 70px">Edit </a>
                      <a href="?page=surat_masuk&aksi=hapussurat_masuk&id_surat_masuk=<?php echo $data['id_surat_masuk']; ?>" class = 'btn btn-danger btn-xs' style="width: 70px">Hapus</a>
                      <a href="?page=surat_masuk&aksi=cetaksurat_masuk&id_surat_masuk=<?php echo $data['id_surat_masuk']; ?>" class = 'btn btn-warning btn-xs' style="width: 70px">Cetak</a>
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