<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php") ?> 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php include("includes/header.php") ?>

  <?php include("includes/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Data User</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Data User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Data User</h3>
                <div class="card-tools">
                  <a href="tambahuser.php" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Tambah User</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-md-12">
                  <form method="post" action="#">
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                          <input type="text" class="form-control" id="kata_kunci" name="kunci2">
                        </div>
                        <div class="col-md-5 bottom-10">
                          <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>&nbsp; Search</button>
                        </div>
                    </div><!-- .row -->
                  </form>
                </div><br>
                    <div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>
                    <div class="alert alert-success" role="alert">Data Berhasil Diubah</div>
                </div>
                <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th width="5%">No</th>
                        <th width="30%">Nama</th>
                        <th width="30%">Email</th>
                        <th width="20%">Level</th>
                        <th width="15%"><center>Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>Salnan Ratih</td>
                        <td>salnanratih@gmail.com</td>
                        <td>superadmin</td>
                        <td align="center">
                          <a href="edituser.php" class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                          <a href="detailuser.php" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                          <a href="#" class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>                         
                        </td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Salnan Ratih</td>
                        <td>salnanratih@gmail.com</td>
                        <td>superadmin</td>
                        <td align="center">
                          <a href="edituser.php" class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                           <a href="detailuser.php" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                           <a href="#" class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>                         
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("includes/footer.php") ?>

</div>
<!-- ./wrapper -->

<?php include("includes/script.php") ?>
</body>
</html>
