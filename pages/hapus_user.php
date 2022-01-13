<?php 
    $id_user = $_GET['id_user'];
    $query = "SELECT * FROM user where id_user=".$id_user;
    $row = mysqli_query($link, $query);
    $data = mysqli_fetch_array($row, MYSQLI_ASSOC); 

 if(isset($_POST['simpan'])) {
      
      $id_user=$_POST['id_user'];
      $simpan=$_POST['simpan'];

      if ($simpan){

      	$cek = "DELETE FROM user WHERE id_user='$id_user'";
          $query1 = mysqli_query($link, $cek);
            if($query) { ?>                   
              <script type="text/javascript">
                alert("Data Berhasil Dihapus!")
                window.location.href="?page=user&aksi";
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
                      <input type="text" name="id_user" value="<?php echo $data['id_user']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                 <label for="nomor_surat" class="col-sm-2 control-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                      <?php echo $data['nama_user']; ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="dari" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                      <?php echo $data['username']; ?>
                    </div>
                </div>
                <div class="form-group">
                  <label for="nomor_berita" class="col-sm-2 control-label">Role User</label>
                    <div class="col-sm-10">
                      <?php echo $data['role_user']; ?>
                    </div>
                </div>
                
                <div class="box-footer">
                  <div class="col-sm-3">
                      <input type="submit" name="simpan" value="Hapus" class="btn btn-block btn-success btn-lg">
                  </div>
                  <div class="col-sm-3 pull-right">
                    <a href="?page=user&aksi" class="btn btn-danger btn-block btn-lg">Batal</a>                  
                  </div>
                </div>
              </form>
              

        </div>
      </div>
    </div>
  </div>

