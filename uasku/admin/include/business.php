<?php 
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	if($_GET['aksi']=='hapus'){
	$id_berita = $_GET['data'];
    
    // $sql_f = "SELECT `sampul` FROM `business` WHERE `id_kategori`='$id_kategori'";
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
		$sql_dh = "delete from `berita` 
		where `id_berita` = '$id_berita'";
		mysqli_query($koneksi,$sql_dh);
	}
}
if (isset($_POST["katakunci_kategori"])) {
  $katakunci_kategori             = $_POST["katakunci_kategori"];
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
            <h3><i class="fas fa-address-book"></i> business </h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> business </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar business</h3>
                <div class="card-tools">
                  <a href="index.php?include=tambah-business" class="btn btn-sm btn-info float-right"><i class="fas fa-plus">
                  </i> Tambah  business</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="index.php?include=business">
                  <!-- .row -->
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
                      <th width="80%">business</th>
                      <th width="15%"><center>Aksi</center></th>
                      </tr>         
                  </thead>
                  <tbody>
                  <?php 
                  $batas = 2;
                  if(!isset($_GET['halaman'])){
                       $posisi = 0;
                       $halaman = 1;
                  }else{
                       $halaman = $_GET['halaman'];
                       $posisi = ($halaman-1) * $batas;
                  } 
                  $sql_k = "SELECT `id_berita`,`judul`, `sampul`,`isi`
                  FROM `berita` where id_kategori = 5";

                    if(isset($kata_kunci) && !empty($katakunci_kategori)){
                      $sql_k .= "WHERE `judul` LIKE '%$katakunci_kategori%' ";
                    }
                    $sql_k .= " ORDER BY `judul`limit $posisi, $batas";
                                      
                      $query_k = mysqli_query($koneksi,$sql_k);
                      $no = $posisi + 1;

                      while($data_k = mysqli_fetch_row($query_k)) :
                        $id_kategori = $data_k[0];
                        $judul = $data_k[1]; 
                        $isi = $data_k[2];
                        $sampul = $data_k[3];
                        ?>

                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $judul;?></td>
                      <td align="center">
                      <a href="index.php?include=edit-business&data=<?php echo $id_kategori;?>" class="btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit</a>
                      <a href="index.php?include=detail-business&data=<?php echo $judul;?>" class="btn btn-xs btn-info" name="detail" value="detail" title="Detail"><i class="fas fa-eye"></i>Detail</a>
                      <a href="javascript:if(confirm('Anda yakin ingin menghapus business <?php echo $judul; ?>?'))window.location.href =  
                      'index.php?include=business&aksi=hapus&data=<?php echo $id_kategori;?>&notif=hapusberhasil'" 
                        class="btn btn-xs btn-warning"><i class="fas fa-trash"></i>Hapus</a>
                      </td>
                    </tr>
                    <?php $no++; endwhile;?> 
                  </tbody>
                </table>
              </div>

              <!-- /.card-body -->
              <div class="card-footer clearfix">
                      <?php
                        //hitung jumlah semua data 
                        $sql_jum = "SELECT `id_kategori`, `judul` from 
                        `berita` WHERE id_kategori = 5"; 

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
                                  href=''index.php?include=business&$katakunci_kategori&halaman=1'>First</a></li>";
                                  echo "<li class='page-item'>
                                  <a class='page-link' 
                                  href='index.php?include=business&$katakunci_kategori&
                                  halaman=$sebelum'>«</a></li>";
                              }
                              for($i=1; $i<=$jum_halaman; $i++){
                                if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                                  if($i!=$halaman){
                                    echo "<li class='page-item'>
                                    <a class='page-link' 
                                    href='index.php?include=business&$katakunci_kategori&halaman=$i'>
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
                                  href='index.php?include=business&$katakunci_kategori
                                  &halaman=$setelah'>»</a></li>";
                                  echo "<li class='page-item'>
                                  <a class='page-link' 
                                  href='index.php?include=business&$katakunci_kategori&halaman=$jum_halaman'>
                                  Last</a></li>";
                                }
                            }else{
                              if($halaman!=1){
                                echo "<li class='page-item'><a class='page-link' 
                                href='index.php?include=business&halaman=1'>First</a></li>";
                                echo "<li class='page-item'><a class='page-link' 
                                href='index.php?include=business&halaman=$sebelum'>«</a></li>";
                              }
                              for($i=1; $i<=$jum_halaman; $i++){
                              if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                                if($i!=$halaman){
                                    echo "<li class='page-item'><a class='page-link' 
                                    href='index.php?include=business&halaman=$i'>$i</a></li>";
                                  }else{
                                    echo "<li class='page-item'>
                                    <a class='page-link'>$i</a></li>";
                                  }
                                }
                                }
                                if($halaman!=$jum_halaman){
                                  echo "<li class='page-item'><a class='page-link' 
                                  href='index.php?include=business&halaman=$setelah'>»</a></li>";
                                  echo "<li class='page-item'><a class='page-link' 
                                  href='index.php?include=business&halaman=$jum_halaman'>Last</a></li>";
                                }
                                }
                             }?>
                  </ul>
              </div>
            </div>
            <!-- /.card -->

    </section>
    