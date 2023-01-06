<?php 
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	if($_GET['aksi']=='hapus'){
		$id_berita = $_GET['data'];
    
    // $sql_f = "SELECT `sampul` FROM `berita` WHERE `id_kategori`='$id_kategori'";
    // $query_f = mysqli_query($koneksi,$sql_f);
    // $jumlah_f = mysqli_num_rows($query_f);
    // if($jumlah_f>0){
    //   while($data_f = mysqli_fetch_row($query_f)){
    //     $sampul = $data_f[0];
    //     $judul = $data_f[1];
    //     $isi = $data_f[2];
    //     //menghapus sampul
    //     unlink("sampul/$sampul");
    //   }
    // }

		//hapus kategori buku
		$sql = "delete from `berita` 
		where `id_berita` = '$id_berita'";
		mysqli_query($koneksi,$sql);
	}
}
if (isset($_POST["katakunci"])) {
  $katakunci_kategori             = $_POST["katakunci"];
  $_SESSION['katakunci'] = $katakunci_kategori;
 }
 if (isset($_SESSION['katakunci'])) {
  $katakunci_kategori = $_SESSION['katakunci'];
 }
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-address-book"></i> berita </h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> berita </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar berita</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="index.php?include=berita">
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                          <input type="text" class="form-control" id="katakunci_kategori" name="katakunci">
                        </div>
                        <div class="col-md-5 bottom-10">
                          <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i>&nbsp; Search</button>
                        </div>
                    </div><!-- .row -->
                  </form>
                </div><br>
              <div class="col-sm-12">
              <?php if(!empty($_GET['notif'])) : ?>
      <?php if($_GET['notif']=="tambahberhasil") { ?>
      <div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>
      <?php } else if($_GET['notif']=="editberhasil") { ?>
       <div class="alert alert-success" role="alert">Data Berhasil Diubah</div>
     <?php } else if($_GET['notif']=="hapusberhasil") { ?>
           <div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>
     <?php } ?>
              <?php endif; ?>
              </div>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th width="5%">No</th>
                      <th width="80%">berita</th>
                      <th width="15%"><center>Aksi</center></th>
                      </tr>         
                  </thead>
                  <tbody>
                  <?php 
                  $batas = 5;
                  if(!isset($_GET['halaman'])){
                       $posisi = 0;
                       $halaman = 1;
                  }else{
                       $halaman = $_GET['halaman'];
                       $posisi = ($halaman-1) * $batas;
                  } 
                  $sql_k = "SELECT `id_berita`,`judul`, `sampul`,`isi`
                  FROM `berita`";

                    if(isset($katakunci_kategori) && !empty($katakunci_kategori)){
                      $sql_k .= "WHERE `judul` LIKE '%$katakunci_kategori%' ";
                    }
                    $sql_k .= " ORDER BY `judul`limit $posisi, $batas";
                                      
                      $query_k = mysqli_query($koneksi,$sql_k);
                      $no = $posisi + 1;

                      while($data_k = mysqli_fetch_row($query_k)) :
                        $id_berita = $data_k[0];
                        $judul = $data_k[1]; 
                        $isi = $data_k[2];
                        $sampul = $data_k[3];
                        ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $judul;?></td>
                      <td align="center">
                      <a href="index.php?include=detail-berita&data=<?php echo $judul;?>" class="btn btn-xs btn-info" name="detail" value="detail" title="Detail"><i class="fas fa-eye"></i>Detail</a>
                    </tr>
                    <?php $no++; endwhile;?> 
                  </tbody>
                </table>
              </div>

              <!-- /.card-body -->
              <div class="card-footer clearfix">
                      <?php
                        //hitung jumlah semua data 
                        $sql_jum = "SELECT `id_berita`, `judul` from 
                        `berita` "; 

                        if (isset($_GET["katakunci"])){
                          $katakunci_kategori = $_GET["katakunci"];
                          $sql_k .= " where `judul` LIKE '%$katakunci_kategori%'";
                        } 
                        $sql_jum .= " order by `judul`";

                        $query_jum = mysqli_query($koneksi,$sql_jum);
                        $jum_data = mysqli_num_rows($query_jum);
                        $jum_halaman = ceil($jum_data/$batas);
                        ?>
                    <ul class="pagination pagination-sm m-0 float-right">
                      <?php 
                        if($jum_halaman==0){
                          //tidak ada halaman
                        }else if($jum_halaman==1){
                          echo "<li class='page-item'><a class='page-link'>1</a></li>";
                        }else{
                          $sebelum = $halaman-1;
                          $setelah = $halaman+1;
                          if (isset($_GET["katakunci"])){
                              $katakunci_kategori = $_GET["katakunci"];
                              if($halaman!=1){
                                  echo "<li class='page-item'>
                                  <a class='page-link' 
                                  href=''index.php?include=berita&$katakunci_kategori&halaman=1'>First</a></li>";
                                  echo "<li class='page-item'>
                                  <a class='page-link' 
                                  href='index.php?include=berita&$katakunci_kategori&
                                  halaman=$sebelum'>«</a></li>";
                              }
                              for($i=1; $i<=$jum_halaman; $i++){
                                if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                                  if($i!=$halaman){
                                    echo "<li class='page-item'>
                                    <a class='page-link' 
                                    href='index.php?include=berita&$katakunci_kategori&halaman=$i'>
                                    $i</a></li>";
                                  }else{
                                      echo "<li class='page-item'>
                                      <a class='page-link'>$i</a></li>";
                                  }
                                }
                                }
                              
                                if($halaman!=$jum_halaman){
                                  echo "<li class='page-item'>
                                  <a class='page-link'  
                                  href='index.php?include=berita&$katakunci_kategori
                                  &halaman=$setelah'>»</a></li>";
                                  echo "<li class='page-item'>
                                  <a class='page-link' 
                                  href='index.php?include=berita&$katakunci_kategori&halaman=$jum_halaman'>
                                  Last</a></li>";
                                }
                            }else{
                              if($halaman!=1){
                                echo "<li class='page-item'><a class='page-link' 
                                href='index.php?include=berita&halaman=1'>First</a></li>";
                                echo "<li class='page-item'><a class='page-link' 
                                href='index.php?include=berita&halaman=$sebelum'>«</a></li>";
                              }
                              for($i=1; $i<=$jum_halaman; $i++){
                              if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                                if($i!=$halaman){
                                    echo "<li class='page-item'><a class='page-link' 
                                    href='index.php?include=berita&halaman=$i'>$i</a></li>";
                                  }else{
                                    echo "<li class='page-item'>
                                    <a class='page-link'>$i</a></li>";
                                  }
                                }
                                }
                                if($halaman!=$jum_halaman){
                                  echo "<li class='page-item'><a class='page-link' 
                                  href='index.php?include=berita&halaman=$setelah'>»</a></li>";
                                  echo "<li class='page-item'><a class='page-link' 
                                  href='index.php?include=berita&halaman=$jum_halaman'>Last</a></li>";
                                }
                                }
                             }?>
                  </ul>
              </div>
            </div>
            <!-- /.card -->

    </section>
    