<?php 

$query  = "SELECT * FROM surat_masuk ORDER BY id_surat_masuk DESC";  
$result = mysqli_query($link, $query);
$data = mysqli_fetch_array($result);


 if(isset($_POST['simpan'])) {
      //$nomor=htmlentities(strip_tags(trim($_ POST["nomor"])));
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
      //$file_ext=strtolower(end(explode('.',$_FILES['file_surat_masuk']['name'])));
      $simpan=$_POST['simpan'];

      if ($simpan){
        move_uploaded_file($file_tmp,"document/".$file_name);
        $query = $link->query("INSERT INTO surat_masuk (nomor_surat_masuk, tanggal_surat_masuk, pengirim, kepada, nomor_berita, perihal, jumlah_lembar, petugas, keterangan, file_surat_masuk) VALUES('$nomor_surat_masuk', '$tanggal_surat_masuk', '$pengirim', '$kepada', '$nomor_berita', '$perihal', '$jumlah_lembar', '$petugas', '$keterangan', '$file_name')");
          //getimagesize($_FILES["file_surat_masuk"]["tmp_name"]);
            if($query) { ?>                   
              <script type="text/javascript">
                alert("Data Berhasil Ditambah")
                window.location.href="?page=surat_masuk&aksi";
              </script>
            
            <?php }

    }
  }

?>

  <div class="row">
    <div class="col-xs-12">
    <!-- Advanced Tables -->
      <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Tambah Data Surat Masuk</h3>
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
                          <?php
                            echo '<input id="nomor_surat_masuk" type="number" class="validate" name="nomor_surat_masuk" value="';
                                $sql = mysqli_query($link, "SELECT nomor_surat_masuk FROM surat_masuk");
                                //Nomor Surat masuk MKB/no.urut/SAN/bulan/tahun
                                $nomor_surat_masuk = "1";
                                if (mysqli_num_rows($sql) == 0){
                                    echo $no_surat_masuk;
                                }

                                $result = mysqli_num_rows($sql);
                                $counter = 0;
                                while(list($nomor_surat_masuk) = mysqli_fetch_array($sql)){
                                    if (++$counter == $result) {
                                        $nomor_surat_masuk++;
                                        echo $nomor_surat_masuk;
                                    }
                                }
                                echo '" required>';

                                if(isset($_SESSION['nomor_surat_masuk'])){
                                    $no_agenda = $_SESSION['nomor_surat_masuk'];
                                    echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$nomor_surat_masuk.'</div>';
                                    unset($_SESSION['nomor_surat_masuk']);
                                }
                            ?>

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
                      <input type="date" class="form-control pull-right" id="tgl_terima" name="tanggal_surat_masuk" required>
                   </div>
                 </div>
                </div>
                <div class="form-group">
                  <label for="dari" class="col-sm-2 control-label">Dari</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="dari" placeholder="Dari" name="pengirim" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="untuk" class="col-sm-2 control-label">Untuk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="untuk" placeholder="Untuk" name="kepada" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="nomor_berita" class="col-sm-2 control-label">Nomor Berita</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nomor_berita" placeholder="Nomor Berita" name="nomor_berita" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="perihal" class="col-sm-2 control-label">Perihal</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="perihal" placeholder="Perihal" name="perihal" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="jumlah_lembar" class="col-sm-2 control-label">Jumlah Lembar</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="jumlah_lembar" name="jumlah_lembar" placeholder="Jumlah Lembar" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="petugas" class="col-sm-2 control-label">Petugas</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="petugas" name="petugas" placeholder="Petugas" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="keterangan" required>                      
                      <option>Terkirim</option>
                      <option>Pending</option>
                    </select>  
                  </div>
                </div>
                <div class="form-group">
                  <label for="file" class="col-sm-2 control-label">File Surat Masuk</label>
                  <div class="col-sm-10">
                    <input type="file"  id="file_surat_masuk" name="file_surat_masuk">
                  </div>
                </div>
                
                <div class="box-footer">
                  <div class="col-sm-3">
                      <input type="submit" name="simpan" value="Simpan" class="btn btn-block btn-success btn-lg">
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

