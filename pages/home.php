     <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3> 
                <?php  
                    $result = mysqli_query($link, "SELECT COUNT(id_surat_masuk) as count FROM surat_masuk");
                    $row = mysqli_fetch_array($result);
                    $count = $row['count'];
                    echo "$count";
                ?> Surat
              </h3>
              <p>Surat Masuk</p>
            </div>
            <div class="icon">
              <i class="glyphicon glyphicon-envelope"></i>
            </div>
            <a href="?page=surat_masuk&aksi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
                <h3>
                  <?php  
                    $result = mysqli_query($link, "SELECT COUNT(id_surat_keluar) as count FROM surat_keluar");
                    $row = mysqli_fetch_array($result);
                    $count = $row['count'];
                    echo "$count";
                ?> Surat
                </h3>
              <p>Surat Keluar</p>
            </div>
            <div class="icon">
              <i class="ion ion-share"></i>
            </div>
            <a href="?page=surat_keluar&aksi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
                <h3>
                  <?php  
                    $result = mysqli_query($link, "SELECT COUNT(id_user) as count FROM user");
                    $row = mysqli_fetch_array($result);
                    $count = $row['count'];
                    echo "$count";
                ?> User
                </h3>
              <p>User&Admin</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="?page=user&aksi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
      </div>