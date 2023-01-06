<?php 
session_start();
include("../koneksi/koneksi.php");
if(isset($_GET["include"])){
  $include = $_GET["include"];
  if($include=="konfirmasi-login"){
    include("include/konfirmasilogin.php");
  }
  else if($include=="signout"){
    include("include/signout.php");
  }
  else if($include=="konfirmasi-register"){
    include("include/konfirmasiregister.php");
  }
  else if($include=="konfirmasi-tambah-entertainment"){
    include("include/konfirmasitambahentertainment.php");
  }
  else if($include=="konfirmasi-edit-entertainment"){
    include("include/konfirmasieditentertainment.php");
  }
  else if($include=="konfirmasi-tambah-user"){
    include("include/konfirmasitambahuser.php");
  }
  else if($include=="konfirmasi-edit-user"){
    include("include/konfirmasiedituser.php");
  }
  else if($include=="konfirmasi-tambah-travel"){
    include("include/konfirmasitambahtravel.php");
  }
  else if($include=="konfirmasi-edit-travel"){
    include("include/konfirmasiedittravel.php");
  }
  else if($include=="konfirmasi-tambah-business"){
    include("include/konfirmasitambahbusiness.php");
  }
  else if($include=="konfirmasi-edit-business"){
    include("include/konfirmasieditbusiness.php");
  }
  else if($include=="konfirmasi-tambah-buku"){
    include("include/konfirmasitambahbuku.php");
  }
  else if($include=="konfirmasi-edit-buku"){
    include("include/konfirmasieditbuku.php");
  }
  else if($include=="konfirmasi-edit-konten"){
    include("include/konfirmasieditkonten.php");
  }
  else if($include=="konfirmasi-tambah-blog"){
    include("include/konfirmasitambahblog.php");
  }
  else if($include=="konfirmasi-edit-blog"){
    include("include/konfirmasieditblog.php");
  }
  else if($include=="konfirmasi-tambah-lifestyle"){
    include("include/konfirmasitambahlifestyle.php");
  }
  else if($include=="konfirmasi-edit-lifestyle"){
    include("include/konfirmasieditlifestyle.php");
  }
  else if($include=="konfirmasi-edit-profil"){
    include("include/konfirmasieditprofil.php");
  }

}
?>

<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php") ?>
</head>

<?php
//cek ada get include
if(isset($_GET["include"])){
  	$include = $_GET["include"];
  	//cek apakah ada session id admin
  	if(isset($_SESSION['id_user']) ){
      ?>
      <body class="hold-transition sidebar-mini layout-fixed" >
      <div class="wrapper">
        <?php include("includes/header.php") ?>
        <?php include("includes/sidebar.php") ?>
        <div class="content-wrapper">
          <?php 
          if($include=="entertainment"){
            include("include/entertainment.php");
          }else if($include=="tambah-entertainment"){
              include("include/tambahentertainment.php");
          }else if($include=="edit-entertainment"){
                include("include/editentertainment.php");
          }else if($include=="detail-entertainment"){
            include("include/detailentertainment.php");
          }else if($include=="user"){
            include("include/user.php");
          }else if($include=="tambah-user"){
          include("include/tambahuser.php");
          }else if($include=="edit-user"){
           include("include/edituser.php");
          }else if($include=="detail-user"){
            include("include/detailuser.php");
          }else if($include=="travel"){
            include("include/travel.php");
          }else if($include=="tambah-travel"){
          include("include/tambahtravel.php");
          }else if($include=="edit-travel"){
           include("include/edittravel.php");
          }else if($include=="detail-travel"){
            include("include/detailtravel.php");    
          }else if($include=="business"){
            include("include/business.php");
          }else if($include=="tambah-business"){
          include("include/tambahbusiness.php");
          }else if($include=="edit-business"){
           include("include/editbusiness.php");
          }else if($include=="detail-business"){
            include("include/detailbusiness.php");   
          }else if($include=="berita"){
            include("include/berita.php");
          }else if($include=="detail-berita"){
            include("include/detailberita.php");   
          }else if($include=="edit-buku"){
           include("include/editbuku.php");
          }else if($include=="detail-buku"){
            include("include/detailbuku.php");   
          }else if($include=="konten"){
            include("include/konten.php");
          }else if($include=="edit-konten"){
            include("include/editkonten.php");
          }else if($include=="detail-konten"){
            include("include/detailkonten.php");   
          }else if($include=="ubah-password"){
            include("include/ubahpassword.php");  
          }else if($include=="blog"){
            include("include/blog.php");
          }else if($include=="tambah-blog"){
          include("include/tambahblog.php");
          }else if($include=="edit-blog"){
           include("include/editblog.php");
          }else if($include=="detail-blog"){
            include("include/detailblog.php");   
          }elseif($include=="lifestyle"){
            include("include/lifestyle.php");
          }else if($include=="tambah-lifestyle"){
              include("include/tambahlifestyle.php");
          }else if($include=="edit-lifestyle"){
                include("include/editlifestyle.php");
          }else if($include=="detail-lifestyle"){
            include("include/detaillifestyle.php");
          }else if($include=="founders"){
            include("include/founders.php");
          }
          else if($include=="edit-profil"){
            include("include/editprofil.php");
          }
          else{
            include("include/profil.php");
          }  
          ?>
        </div>
        <!-- /.content-wrapper -->
        <?php include("includes/footer.php") ?>
      </div>
      <!-- ./wrapper -->
      <?php include("includes/script.php") ?>
    </body>
<?php
  	}else{
    //pemanggilan halaman form login
    include("include/login.php");
  	}  
}else{
  if(isset($_SESSION['id_user'])){
    ?>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
          <?php include("includes/header.php") ?>
          <?php include("includes/sidebar.php") ?>
          <div class="content-wrapper">
          <?php
            //pemanggilan profil
            include("include/profil.php");
          ?>
          </div>
          <!-- /.content-wrapper -->
          <?php include("includes/footer.php") ?>
        </div>
        <!-- ./wrapper -->
        <?php include("includes/script.php") ?>
      </body>
      <?php  
  }else{
  //pemanggilan halaman form login
    include("include/login.php");
  } 
}
?>


</html>
