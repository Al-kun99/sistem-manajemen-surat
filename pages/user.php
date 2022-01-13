  <a href="?page=user&aksi=tambah_user" class="btn btn-success">Tambah Data</a>
  </br>

  <div class="row">
    <div class="col-xs-12">
    <!-- Advanced Tables -->
      <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Data User Admin</h3>
            </div>
        
        <div class="box-body">
          
            <table class="table table-bordered table-striped" id="example1">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama User</th>                           
                  <th>Username</th>                
                  <th>Role User</th>
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
                <?php  
                  $no=1;
                  $query  = "SELECT * FROM user ORDER BY id_user DESC";  
                  $result = mysqli_query($link, $query);
                
                if(!$result){
                    die ("Query Error: ".mysqli_errno($link).
                        " - ".mysqli_error($link));
                }
                
                while($data = mysqli_fetch_assoc($result)) {
                 ?>
                  <tr>  
                    <td><?php echo $no++; ?></td>                                  
                    <td><?php echo $data['nama_user']; ?></td>                  
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['role_user']; ?></td>                  
                    <td>
                      <a href="?page=user&aksi=edit_user&id_user=<?php echo $data['id_user']; ?>"" class = 'btn btn-info btn-sm' style="width: 70px">Edit </a>
                      <a href="?page=user&aksi=hapus_user&id_user=<?php echo $data['id_user']; ?>"" class = 'btn btn-danger btn-sm' style="width: 70px">Hapus</a>
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