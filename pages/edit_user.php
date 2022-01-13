<?php 
    $id_user = $_GET['id_user'];
    $query = "SELECT * FROM user where id_user=".$id_user;
    $row = mysqli_query($link, $query);
    $data = mysqli_fetch_array($row, MYSQLI_ASSOC); 
    $num = mysqli_num_rows($row);

 if(isset($_POST['simpan'])) {
      $nama_user=htmlentities(strip_tags(trim($_POST['nama_user'])));
      $username=htmlentities(strip_tags(trim($_POST['username'])));     
      $password_user=htmlentities(strip_tags(trim($_POST['password_user'])));
      $role_user=htmlentities(strip_tags(trim($_POST['role_user'])));     

      $simpan=$_POST['simpan'];

      if ($simpan && $num > 0){

      $query = $link->query("UPDATE user SET nama_user='$nama_user', username='$username', password_user='$password_user', role_user='$role_user' WHERE id_user='$id_user'");
            if($query) { ?>                   
              <script type="text/javascript">
                alert("Data Berhasil Diubah")
                window.location.href="?page=user&aksi";
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
              <h3 class="box-title">Edit Data User</h3>
            </div>
        
        <div class="box-body chat">
              <form class="form-horizontal" method="POST" >
                <div class="form-group">
                 <label for="nomor_surat" class="col-sm-2 control-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-envelope-square" ></i>
                      </div>
                      <input type="text" class="form-control" placeholder="Nama User" id="nama_user" name="nama_user" value="<?php echo $data['nama_user']; ?>" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="dari" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo $data['username']; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="untuk" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password_user" placeholder="Password" name="password_user" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="nomor_berita" class="col-sm-2 control-label">Role User</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="role_user" placeholder="Role User" name="role_user" value="<?php echo $data['role_user']; ?>" required>
                    </div>
                </div>
                
                <div class="box-footer">
                  <div class="col-sm-3">
                      <input type="submit" name="simpan" value="Update" class="btn btn-block btn-success btn-lg">
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

