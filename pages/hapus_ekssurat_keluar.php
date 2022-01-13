<?php 
  //Lihat data
    $id_ekspedisi_sk = $_GET['id_ekspedisi_sk'];
    $query = "SELECT * FROM ekspedisi_sk where id_ekspedisi_sk=".$id_ekspedisi_sk;
    $row = mysqli_query($link, $query);
    $data = mysqli_fetch_array($row, MYSQLI_ASSOC); 
 
 if(isset($_POST['simpan'])) {
      
      $id_surat_keluar = $_POST['id_ekspedisi_sk'];
      $simpan=$_POST['simpan'];

      if ($simpan){

          $cek = "DELETE FROM ekspedisi_sk WHERE id_ekspedisi_sk='$id_ekspedisi_sk'";
          $query1 = mysqli_query($link, $cek);
            if($query1) { ?>                   
              <script type="text/javascript">
                alert("Data Berhasil dihapus!")
                window.location.href="?page=Ekssurat_keluar&aksi";
              </script>
            
            <?php }

    }
  }

?>

  <div class="row">
    <div class="col-xs-12">
    <!-- Advanced Tables -->
      <div class="box box-danger">
            <div class="box-header">
              <i class="fa fa-warning"></i>
              <h3 class="box-title">Apakah anda yakin akan menghapus data ini?</h3>
            </div>
        
        <div class="box-body chat">
              <form class="form-horizontal" method="POST" >
                <div class="form-group">
                  <label class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text" name="id_ekspedisi_sk" value="<?php echo $data['id_ekspedisi_sk']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                 <label for="nomor_surat" class="col-sm-2 control-label">Nomor Surat</label>
                  <div class="col-sm-10">
                      <?php echo $data['nomor_surat_keluar']; ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nomor_berita" class="col-sm-2 control-label">Nomor Berita</label>
                    <div class="col-sm-10">
                      <?php echo $data['nomor_berita']; ?>
                    </div>
                </div>
                <div class="form-group">
                  <label for="dari" class="col-sm-2 control-label">Dari</label>
                    <div class="col-sm-10">
                      <?php echo $data['dari']; ?>
                    </div>
                </div>
                <div class="form-group">
                  <label for="untuk" class="col-sm-2 control-label">Untuk</label>
                    <div class="col-sm-10">
                      <?php echo $data['untuk']; ?>
                    </div>
                </div>
                <div class="form-group">
                  <label for="nomor_berita" class="col-sm-2 control-label">Via</label>
                    <div class="col-sm-10">
                      <?php echo $data['via']; ?>
                    </div>
                </div>
                <div class="form-group">
                  <label for="tgl_terima" class="col-sm-2 control-label">Tanggal Keluar</label>
                  <div class="col-sm-10">
                      <?php echo $data['tanggal_surat_keluar']; ?>
                 </div>
                </div>
                <div class="form-group">
                <label for="tgl_terima" class="col-sm-2 control-label">Jam Keluar</label>
                  <div class="col-sm-10">
                      <?php echo $data['jam_surat_keluar']; ?>
                 </div>
                </div>
                <div class="form-group">
                  <label for="jumlah_lembar" class="col-sm-2 control-label">Jumlah Lembar</label>
                    <div class="col-sm-10">
                      <?php echo $data['jumlah_lembar']; ?>
                    </div>
                </div>
				        <div class="form-group">
                  <label for="jumlah_lembar" class="col-sm-2 control-label">Jumlah Kirim</label>
                    <div class="col-sm-10">
                      <?php echo $data['jumlah_kirim']; ?>
                    </div>
                </div>
                <div class="form-group">
                  <label for="petugas" class="col-sm-2 control-label">Petugas</label>
                    <div class="col-sm-10">
                      <?php echo $data['petugas']; ?>
                    </div>
                </div>
                
                <div class="box-footer">
                  <div class="col-sm-3">
                      <input type="submit" name="simpan" value="Hapus" class="btn btn-block btn-success btn-lg">
                  </div>
                  <div class="col-sm-3 pull-right">
                    <a href="?page=Ekssurat_keluar&aksi" class="btn btn-danger btn-block btn-lg  ">Batal</a>                  
                  </div>
                </div>
              </form>
              

        </div>
      </div>
    </div>
  </div>

