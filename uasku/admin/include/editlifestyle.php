<?php 
if(isset($_GET['data'])){
	$id_berita = $_GET['data'];
	$_SESSION['id_berita']=$id_berita;
	
    //get data berita
	$sql_d = "select `judul`, `isi` from `berita` where `id_berita` = '$id_berita'";
    $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
       $judul= $data_d[0];
       $isi= $data_d[1];
    }
}
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit lifestyle</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=lifestyle">lifestyle</a></li>
              <li class="breadcrumb-item active">Edit lifestyle</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit lifestyle</h3>
        <div class="card-tools">
          <a href="index.php?include=lifestyle" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
      <?php if(!empty($_GET['notif'])) { ?>
   <?php if($_GET['notif']=="editkosong") { ?>
      <div class="alert alert-danger" role="alert">Maaf data lifestyle wajib di isi</div>
   <?php }?>
      <?php }?>
      </div>
      <form class="form-horizontal" method="post"
      action="index.php?include=konfirmasi-edit-lifestyle">
        <div class="card-body">
          <div class="form-group row">
            <label for="berita" class="col-sm-3 col-form-label">Judul</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="judul" Name="judul" value="">
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="form-group row">
            <label for="berita" class="col-sm-3 col-form-label">Isi</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="isi" Name="isi" value="">
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->