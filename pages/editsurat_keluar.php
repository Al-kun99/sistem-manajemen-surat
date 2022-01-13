<?php 
    $id_surat_keluar = $_GET['id_surat_keluar'];
    $query = "SELECT * FROM surat_keluar where id_surat_keluar=".$id_surat_keluar;
    $row = mysqli_query($link, $query);
    $data = mysqli_fetch_array($row, MYSQLI_ASSOC); 
    $num = mysqli_num_rows($row);

 if(isset($_POST['simpan'])) {
      //$nomor=htmlentities(strip_tags(trim($_ POST["nomor"])));
      $nomor_surat_keluar=htmlentities(strip_tags(trim($_POST['nomor_surat_keluar'])));
      $dari=htmlentities(strip_tags(trim($_POST['dari'])));     
      $untuk=htmlentities(strip_tags(trim($_POST['untuk'])));
      $nomor_berita=htmlentities(strip_tags(trim($_POST['nomor_berita']))); 
      $tanggal_surat_keluar=htmlentities(strip_tags(trim($_POST['tanggal_surat_keluar'])));
      $jam_surat_keluar=htmlentities(strip_tags(trim($_POST['jam_surat_keluar'])));    
      $jumlah_lembar=htmlentities(strip_tags(trim($_POST['jumlah_lembar'])));
      $jumlah_kirim=htmlentities(strip_tags(trim($_POST['jumlah_kirim'])));
      $petugas=htmlentities(strip_tags(trim($_POST['petugas'])));     

      $simpan=$_POST['simpan'];

      if ($simpan && $num > 0){

      $query = $link->query("UPDATE surat_keluar SET nomor_surat_keluar='$nomor_surat_keluar', dari='$dari', untuk='$untuk', nomor_berita='$nomor_berita', tanggal_surat_keluar='$tanggal_surat_keluar', jam_surat_keluar='$jam_surat_keluar', jumlah_lembar='$jumlah_lembar', jumlah_kirim='$jumlah_lembar', petugas='$petugas' WHERE id_surat_keluar='$id_surat_keluar'");
            if($query) { ?>                   
              <script type="text/javascript">
                alert("Data Berhasil Diubah")
                window.location.href="?page=surat_keluar&aksi";
              </script>
            
            <?php }

    }
  }

?>

  <div class="row">
    <div class="col-xs-12">
    <!-- Advanced Tables -->
      <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Edit Data Surat Keluar</h3>
            </div>
        
        <div class="box-body chat">
              <form class="form-horizontal" method="POST" >
                <div class="form-group">
                 <label for="nomor_surat" class="col-sm-2 control-label">Nomor Surat</label>
                  <div class="col-sm-10">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-envelope-square" ></i>
                      </div>
                      <input type="text" class="form-control" placeholder="nomor surat" id="nomor_surat_keluar" name="nomor_surat_keluar" value="<?php echo $data['nomor_surat_keluar']; ?>" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="dari" class="col-sm-2 control-label">Dari</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="dari" placeholder="Dari" name="dari" value="<?php echo $data['dari']; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="untuk" class="col-sm-2 control-label">Untuk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="untuk" placeholder="Untuk" name="untuk" value="<?php echo $data['untuk']; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="nomor_berita" class="col-sm-2 control-label">Nomor Berita</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nomor_berita" placeholder="Nomor Berita" name="nomor_berita" value="<?php echo $data['nomor_berita']; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="tgl_terima" class="col-sm-2 control-label">Tanggal Keluar</label>
                  <div class="col-sm-10">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar" ></i>
                      </div>
                      <input type="date" class="form-control pull-right" id="tgl_terima" name="tanggal_surat_keluar" value="<?php echo $data['tanggal_surat_keluar']; ?>" required>
                   </div>
                 </div>
                </div>
                <div class="form-group">
                <label for="tgl_terima" class="col-sm-2 control-label">Jam Keluar</label>
                  <div class="col-sm-10">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-time" ></i>
                      </div>
                      <input type="time" class="form-control pull-right" id="tgl_terima" name="jam_surat_keluar" value="<?php echo $data['jam_surat_keluar']; ?>" required>
                   </div>
                 </div>
                </div>
                <div class="form-group">
                  <label for="jumlah_lembar" class="col-sm-2 control-label">Jumlah Lembar</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="jumlah_lembar" name="jumlah_lembar" placeholder="Jumlah Lembar" value="<?php echo $data['jumlah_lembar']; ?>" required>
                    </div>
                </div>
				        <div class="form-group">
                  <label for="jumlah_lembar" class="col-sm-2 control-label">Jumlah Kirim</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="jumlah_kirim" name="jumlah_kirim" placeholder="Jumlah Kirim" value="<?php echo $data['jumlah_kirim']; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="petugas" class="col-sm-2 control-label">Petugas</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="petugas" name="petugas" placeholder="Petugas" value="<?php echo $data['petugas']; ?>" required>
                    </div>
                </div>
                
                <div class="box-footer">
                  <div class="col-sm-3">
                      <input type="submit" name="simpan" value="Update" class="btn btn-block btn-success btn-lg">
                  </div>
                  <div class="col-sm-3 pull-right">
                    <a href="?page=surat_keluar&aksi" class="btn btn-danger btn-block btn-lg  ">Batal</a>                  
                  </div>
                </div>
              </form>
              

        </div>
      </div>
    </div>
  </div>

