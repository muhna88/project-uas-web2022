<?php 
     if ((isset($_GET['aksi']))&&isset($_GET['data'])){
	      $id_user = $_GET['data'];
        //get profil
        
        }
      
      if (isset($_POST["katakunci"])) {
        $katakunci_kategori             = $_POST["katakunci"];
        $_SESSION['katakunci_kategori'] = $katakunci_kategori;
       }
       if (isset($_SESSION['katakunci_kategori'])) {
        $katakunci_kategori = $_SESSION['katakunci_kategori'];
       }
?>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> PROFIL FOUNDERS </h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Profil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
           
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-12">
              
               
                 
                  <?php
               $sql = "SELECT `id_user`, `foto`, `nama`, `email`, `level` FROM `user`";
               $query = mysqli_query($koneksi, $sql);
               while($data = mysqli_fetch_assoc($query)){
               $id_user = $data['id_user'];
               $foto = $data['foto'];
               $nama = $data['nama'];
               $email = $data['email'];
               $level = $data['level'];
              if($level=='Superadmin'){
               ?>
                 <table class="table table-bordered">
             <tbody>
                      <tr>
                        <td colspan="2"><i class="fas fa-user-circle"></i> <strong> PROFIL <strong></td>
                      </tr> 
                      <tr>
                        <td width="20%"><strong>Foto<strong></td>
                        <td width="80%">
                      
                          <img src="<?php echo $foto;?>" 
                            class="img-fluid" width="200px;">
                       
                        </td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Nama<strong></td>
                        <td width="80%"> <?php echo $nama;?> </td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>NIM<strong></td>
                        <td width="80%"> <?php echo $email;?> </td>
                      </tr> 
                      </tbody>
                      
                  </table>  
                 
                    <?php }else{
                  }}?>
                   
                   
           
              </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>