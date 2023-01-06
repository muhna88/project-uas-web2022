<?php 
        if(isset($_GET['data'])){
	      $judul = $_GET['data'];
        //get profil
        $sql = "SELECT * FROM `berita` WHERE `judul`='$judul'";
        //echo $sql;
        $query = mysqli_query($koneksi, $sql);
      $data = mysqli_fetch_assoc($query);
      $sampul = $data['sampul'];
      $judul = $data['judul'];
      $isi = $data['isi'];
        }
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-lifestyle-tie"></i> Detail Data lifestyle</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=lifestyle">Data lifestyle</a></li>
              <li class="breadcrumb-item active">Detail Data lifestyle</li>
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
                  <a href="index.php?include=lifestyle" class="btn btn-sm btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <tbody>  
                      <tr>
                        <td colspan="2"><i class="fas fa-lifestyle-circle"></i> <strong class= "bold">Data lifestyle<strong></td>
                      </tr>                      
                      <tr>
                        <td><strong>sampul<strong></td>
                        <td><img src="<?php echo $sampul;?>" class="img-fluid" width="150px;"></td>
                      </tr>               
                      <tr>
                        <td width="20%"><strong>judul<strong></td>
                        <td width="80%"><?php echo $judul;?></td>
                      </tr>            
                      <tr>
                        <td width="25%"><strong>Isi<strong></td>
                        <td width="75%"><?php echo $isi;?></td>
                      </tr>                      
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>
