<?php
   //edit data
   	$id_surat_masuk = $_GET['id_surat_masuk'];
    $query = "SELECT * FROM surat_masuk where id_surat_masuk=".$id_surat_masuk;
    $row = mysqli_query($link, $query);
    $data = mysqli_fetch_array($row, MYSQLI_ASSOC); 
    $num = mysqli_num_rows($row);

//PROSES EDIT DATA
 if(isset($_POST['simpan'])) {
// echo "jjj";
//       die();
      $nomor_surat_masuk=htmlentities(strip_tags(trim($_POST['nomor_surat_masuk'])));
      $tanggal_surat_masuk=htmlentities(strip_tags(trim($_POST['tanggal_surat_masuk'])));
      $pengirim=htmlentities(strip_tags(trim($_POST['pengirim'])));     
      $kepada=htmlentities(strip_tags(trim($_POST['kepada'])));
      $nomor_berita=htmlentities(strip_tags(trim($_POST['nomor_berita'])));
      $perihal=htmlentities(strip_tags(trim($_POST['perihal'])));     
      $jumlah_lembar=htmlentities(strip_tags(trim($_POST['jumlah_lembar'])));
      $petugas=htmlentities(strip_tags(trim($_POST['petugas'])));     
      $keterangan=htmlentities(strip_tags(trim($_POST['keterangan'])));
      $file_name = $_FILES['file_surat_masuk']['name'];
      $file_size =$_FILES['file_surat_masuk']['size'];
      $file_tmp =$_FILES['file_surat_masuk']['tmp_name'];
      $file_type=$_FILES['file_surat_masuk']['type'];
      $simpan=$_POST['simpan'];

      if ($simpan && $num > 0 ){
        move_uploaded_file($file_tmp,"document/".$file_name);
      	$query = $link->query("UPDATE surat_masuk SET nomor_surat_masuk='$nomor_surat_masuk', tanggal_surat_masuk='$tanggal_surat_masuk', pengirim='$pengirim', kepada='$kepada', nomor_berita='$nomor_berita', perihal='$perihal', jumlah_lembar='$jumlah_lembar', petugas='$petugas', keterangan='$keterangan', file_surat_masuk='$file_name' WHERE id_surat_masuk='$id_surat_masuk'") ;
            //CEK JIKA DATA BERHASIL DI UPDATE
            if($query) { ?>                   
              <script type="text/javascript">
                alert("Data Berhasil Dirubah")
                window.location.href="?page=surat_masuk&aksi";
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
              <h3 class="box-title">Edit Data Surat Masuk</h3>
            </div>
        
        <div class="box-body chat">
              <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                 <label for="nomor_surat" class="col-sm-2 control-label">Nomor Surat</label>
                  <div class="col-sm-10">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-envelope-square" ></i>
                      </div>
                      <input type="text" class="form-control" placeholder="nomor surat" id="nomor_surat_masuk" name="nomor_surat_masuk" value="<?php echo $data['nomor_surat_masuk']; ?>" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tgl_terima" class="col-sm-2 control-label">Tanggal Terima</label>
                  <div class="col-sm-10">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar" ></i>
                      </div>
                      <input type="date" class="form-control pull-right" id="tgl_terima" name="tanggal_surat_masuk" value="<?php echo $data['tanggal_surat_masuk']; ?>" required>
                   </div>
                 </div>
                </div>
                <div class="form-group">
                  <label for="dari" class="col-sm-2 control-label">Dari</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="dari" placeholder="Dari" name="pengirim" value="<?php echo $data['pengirim']; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="untuk" class="col-sm-2 control-label">Untuk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="untuk" placeholder="Untuk" name="kepada" value="<?php echo $data['kepada']; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="nomor_berita" class="col-sm-2 control-label">Nomor Berita</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nomor_berita" placeholder="Nomor Berita" name="nomor_berita" value="<?php echo $data['nomor_berita']; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="perihal" class="col-sm-2 control-label">Perihal</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="perihal" placeholder="Perihal" name="perihal" value="<?php echo $data['perihal']; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="jumlah_lembar" class="col-sm-2 control-label">Jumlah Lembar</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="jumlah_lembar" name="jumlah_lembar" placeholder="Jumlah Lembar" value="<?php echo $data['jumlah_lembar']; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="petugas" class="col-sm-2 control-label">Petugas</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="petugas" name="petugas" placeholder="Petugas" value="<?php echo $data['petugas']; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="keterangan" value="<?php echo $data['keterangan']; ?>" required>                      
                      <option>Terkirim</option>
                      <option>Pending</option>
                    </select>  
                  </div>
                </div>
                <div class="form-group">
                  <label for="file" class="col-sm-2 control-label">File Surat Masuk</label>
                  <div class="col-sm-10">
                    <input type="file" id="file_surat_masuk" name="file_surat_masuk">
                  </div>
                </div>
                
                <div class="box-footer">
                  <div class="col-sm-3">
                      <input type="submit" name="simpan" value="Update" class="btn btn-block btn-success btn-lg">
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
