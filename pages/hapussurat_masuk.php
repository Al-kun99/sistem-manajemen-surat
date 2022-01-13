<?php
   //Lihat data
   	$id_surat_masuk = $_GET['id_surat_masuk'];
    $query = "SELECT * FROM surat_masuk where id_surat_masuk=".$id_surat_masuk;
    $row = mysqli_query($link, $query);
    $data = mysqli_fetch_array($row, MYSQLI_ASSOC); 

 if(isset($_POST['simpan'])) {
// echo "jjj";
//       die();
      $id_surat_masuk=$_POST['id_surat_masuk'];
      $simpan=$_POST['simpan'];

      	if ($simpan){
      		$cek = "DELETE FROM surat_masuk WHERE id_surat_masuk='$id_surat_masuk'";
    		  $query1 = mysqli_query($link, $cek);
            if($query1) { ?>                   
              <script type="text/javascript">
                alert("Data Berhasil Dihapus")
                window.location.href="?page=surat_masuk&aksi";
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
                      <input type="text" name="id_surat_masuk" value="<?php echo $data['id_surat_masuk']; ?>" readonly>
                    </div>
                </div>
                <div class="box-body">
                 <label for="nomor_surat" class="col-sm-2 control-label">Nomor Surat</label>
                  <div class="col-sm-10">
                      <?php echo $data['nomor_surat_masuk']; ?>
                  </div>
                </div>
                <div class="box-body">
                  <label for="tgl_terima" class="col-sm-2 control-label">Tanggal Terima</label>
                  <div class="col-sm-10">
                      <?php echo $data['tanggal_surat_masuk']; ?>
                   </div>
                 </div>
                
                <div class="box-body">
                  <label for="dari" class="col-sm-2 control-label">Dari</label>
                    <div class="col-sm-10">
                      <?php echo $data['pengirim']; ?>
                    </div>
                </div>
                <div class="box-body">
                  <label for="untuk" class="col-sm-2 control-label">Untuk</label>
                    <div class="col-sm-10">
                      <?php echo $data['kepada']; ?>
                    </div>
                </div>
                <div class="box-body">
                  <label for="nomor_berita" class="col-sm-2 control-label">Nomor Berita</label>
                    <div class="col-sm-10">
                      <?php echo $data['nomor_berita']; ?>
                    </div>
                </div>
                <div class="box-body">
                  <label for="perihal" class="col-sm-2 control-label">Perihal</label>
                    <div class="col-sm-10">
                      <?php echo $data['perihal']; ?>
                    </div>
                </div>
                <div class="box-body">
                  <label for="jumlah_lembar" class="col-sm-2 control-label">Jumlah Lembar</label>
                    <div class="col-sm-10">
                      <?php echo $data['jumlah_lembar']; ?>
                    </div>
                </div>
                <div class="box-body">
                  <label for="petugas" class="col-sm-2 control-label">Petugas</label>
                    <div class="col-sm-10">
                      <?php echo $data['petugas']; ?>
                    </div>
                </div>
                <div class="box-body">
                  <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-10">
                    <?php echo $data['keterangan']; ?>
                  </div>
                </div>
                <div class="box-body">
                  <label for="file" class="col-sm-2 control-label">File Surat Masuk</label>
                  <div class="col-sm-10">
                    <?php echo $data['file_surat_masuk']; ?>
                  </div>
                </div>
                
                <div class="box-footer">
                  <div class="col-sm-3">
                      <input type="submit" name="simpan" value="Hapus" class="btn btn-block btn-success btn-lg">
                  </div>
                  <div class="col-sm-3 pull-right">
                    <a href="?page=surat_masuk&aksi" class="btn btn-danger btn-block btn-lg  ">Batal</a>                  
                  </div>
                </div>
              </form>
              

        </div>
      </div>
    </div>
  </div>
