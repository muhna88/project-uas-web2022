<?php
if(isset($_SESSION['id_user'])){
$id_user = $_SESSION['id_user'];
if ((isset($_GET['aksi']))&&isset($_GET['data'])){
	$id_berita = $_GET['data'];
	
      $sql = "SELECT `id_berita`,`judul`, `sampul`,`isi`, `tanggal` FROM `berita`";
        //echo $sql;
      $query = mysqli_query($koneksi, $sql);
      $data = mysqli_fetch_assoc($query);
      $id_berita = $data['id_berita'];
      $sampul = $data['sampul'];
      $judul = $data['judul'];
      $isi = $data['isi'];
	  $tanggal = $data['tanggal'];
} 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Berita</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- headerluar -->
	<?php
include("includes/headerluar.php");
?>
	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="sidebar.php" class="breadcrumb-item f1-s-3 cl9">
					Home 
				</a>

				<span class="breadcrumb-item f1-s-3 cl9">
					Blog
				</span>
			</div>

		
		</div>
	</div>

	<!-- Post -->
	<section class="bg0 p-b-55" >
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-80">
					<div class="p-r-10 p-r-0-sr991">
						<div class="m-t--40 p-b-40">
							<!-- Item post -->
							<?php 
                  $sql = "SELECT `id_berita`,`judul`, `sampul`,`isi`, `tanggal`
                  FROM `berita`";
				   
				 
				

                    $query = mysqli_query($koneksi, $sql);
                      while ($data = mysqli_fetch_assoc($query)){
                        $id_berita = $data ['id_berita'];
                        $judul = $data ['judul']; 
                        $isi = $data ['isi'];
                        $sampul = $data ['sampul'];
						$tanggal = $data ['tanggal'];
                        ?>
							<div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
								<a href="index1.php?include=beritaisi&data=<?php echo $id_berita;?>" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
								<img src="<?php echo $sampul;?>"  alt="IMG" >
								</a>

								<div class="size-w-9 w-full-sr575 m-b-25">
									<h5 class="p-b-12">
										<a href="index1.php?include=beritaisi&data=<?php echo $id_berita;?>" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
											<?php echo $judul;?> 
										</a>
									</h5>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											<?php echo $tanggal;?>
										</span>
									</div>


									<a href="index1.php?include=beritaisi&data=<?php echo $id_berita;?>" class="f1-s-1 cl9 hov-cl10 trans-03">
										Read More
										<i class="m-l-2 fa fa-long-arrow-alt-right"></i>
									</a>
								</div>
								<?php }?>
							</div>
							
						</div>

					
					</div>
				</div>
			</div>
		</div>
		
	</section>

	<!-- footerluar -->
	<?php include("includes/footerluar.php") ?>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
	</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>