<?php
session_start();
?>
<!doctype html>

<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<title>Register Member - PHP</title>
</head>
<body style ="margin-bottom: 0px;
    padding: 0px;
    background: url(img/bg3.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
    height: 75vh;
">
<?php if(!empty($_GET['notif'])){?>
      <?php if($_GET['notif']=="tambahnamakosong"){?>
      <div class="alert alert-danger" role="alert">
      Maaf data nama wajib di isi</div>
      <?php }?>
      <?php if($_GET['notif']=="tambahuserkosong"){?>
      <div class="alert alert-danger" role="alert">
      Maaf data username wajib di isi</div>
      <?php }?>
      <?php if($_GET['notif']=="tambahpasskosong"){?>
      <div class="alert alert-danger" role="alert">
      Maaf data password wajib di isi</div>
      <?php }?>
      <?php if($_GET['notif']=="tambahlevelkosong"){?>
      <div class="alert alert-danger" role="alert">
      Maaf data level wajib di isi</div>
      <?php }?>
      <?php }?>

      <form class="form-horizontal" method="post" action="konfirmasiregister.php" enctype="multipart/form-data">
        <div class="card-body">
            
          <div class="form-group row">
            <label for="foto" class="col-sm-3 col-form-label">Foto </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="foto" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="nama" id="nama" value="" placeholder="Nama">
            </div>
          </div>
          <div class="form-group row">
            <label for="username" class="col-sm-3 col-form-label">Username</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="username" id="username" value="" placeholder="Username">
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="email" id="email" value="" placeholder="Email">
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-7">
              <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password">
            </div>
          
              <input type="hidden" id="level" name="level"
               value="User">
              
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
          </div>  
        </div>

          </div>
        </div>
        

      </div>
        <!-- /.card-body -->

        <!-- /.card-footer -->
      </form>
      
    
      </body>
      