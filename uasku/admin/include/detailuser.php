<?php 
        if(isset($_GET['data'])){
	      $nama = $_GET['data'];
        //get profil
        $sql = "SELECT `nama`, `email`, `foto`, `level`, `username` FROM `user` WHERE `nama`='$nama'";
        //echo $sql;
        $query = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_row($query)){
          $nama = $data[0];
          $email = $data[1];
          $foto = $data[2];
          $level = $data[3];
          $username = $data[4];
        }}
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Detail Data User</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=user">Data User</a></li>
              <li class="breadcrumb-item active">Detail Data User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <a href="index.php?include=user" class="btn btn-sm btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <tbody>  
                      <tr>
                        <td colspan="2"><i class="fas fa-user-circle"></i> <strong>Data User<strong></td>
                      </tr>                      
                      <tr>
                        <td><strong>Foto User<strong></td>
                        <td><img src="<?php echo $foto;?>" class="img-fluid" width="200px;"></td>
                      </tr>               
                      <tr>
                        <td width="20%"><strong>Nama<strong></td>
                        <td width="80%"><?php echo $nama;?></td>
                      </tr>                 
                      </tr>   
                      <?php if($level=='Superadmin'){?>                      
                      <tr>
                        <td width="20%"><strong>NIM<strong></td>
                        <td width="80%"><?php echo $email; ?></td>
                      </tr> 
                      <?php }else{?>
                          <td width="20%"><strong>Email<strong></td>
                          <td width="80%"><?php echo $email; ?></td>
                     <?php }?>
                      <tr>
                        <td width="20%"><strong>Level<strong></td>
                        <td width="80%"><?php echo $level;?></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Username<strong></td>
                        <td width="80%"><?php echo $username;?></td>
                      </tr> 
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>
