<?php 
if(isset($_GET['data'])){
	$id_berita = $_GET['data'];
	
	$sql = " SELECT `id_berita`, `sampul`, `judul`, `isi`, `tanggal` FROM `berita` WHERE id_berita = $id_berita";
	$query = mysqli_query($koneksi, $sql);
	$data = mysqli_fetch_assoc($query);
	$id_berita = $data['id_berita']; 
      $sampul = $data['sampul'];
      $judul = $data['judul'];
      $isi = $data['isi'];
	  $tanggal = $data['tanggal'];	 
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

	<!-- Breadcrumb -->
	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="index.html" class="breadcrumb-item f1-s-3 cl9">
					Home 
				</a>

				<a href="blog-list-01.html" class="breadcrumb-item f1-s-3 cl9">
					Blog 
				</a>

				<span class="breadcrumb-item f1-s-3 cl9">
				 <?php echo $judul;?>
				</span>
			</div>

		</div>
	</div>
			
	<!-- Content -->
	<section class="bg0 p-b-70 p-t-5">
		<!-- Title -->
		<div class="bg-img1 size-a-18 how-overlay1" style="background-image: url(<?php echo $sampul;?>);">
			<div class="container h-full flex-col-e-c p-b-58">
			
				<h3 class="f1-l-5 cl0 p-b-16 txt-center respon2">
					<?php echo $judul;?>
				</h3>

				<div class="flex-wr-c-s">
					<span class="f1-s-3 cl8 m-rl-7 txt-center">
		

						<span class="m-rl-3">-</span>

						<span>
							<?php echo $tanggal;?>
						</span>
					</span>
				</div>
			</div>
		</div>

		<!-- Detail -->
		<div class="container p-t-82">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-100">
					<div class="p-r-10 p-r-0-sr991">
						<!-- Blog Detail -->
						<div class="p-b-70">
							<p class="f1-s-11 cl6 p-b-25">
								<?php echo $isi;?>
							</p>


							<!-- Share -->
							<div class="flex-s-s">
								<span class="f1-s-12 cl5 p-t-1 m-r-15">
									Share:
								</span>
								
								<div class="flex-wr-s-s size-w-0">
									<a href="http://www.facebook.com/sharer.php?u=https://mynews.com" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-facebook-f m-r-7"></i>
										Facebook
									</a>

									<a href="https://twitter.com/share?url=https://mynews.com" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-twitter m-r-7"></i>
										Twitter
									</a>

									<a href="https://pinterest.com/share?url=https://mynews.com" class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-pinterest-p m-r-7"></i>
										Pinterest
									</a>
								</div>
							</div>
						</div>
						<!-- comment section -->
						<?php 
			    	if (isset($_SESSION['id_user'])){
						$id_user = $_SESSION['id_user'];
					  $sql =  "SELECT `comment`.`comment`, `user`.`nama`, `user`.`foto`, `berita`.`id_berita` from `comment` inner join `user` on `comment`.`id_user` = `user`.`id_user` 
					  inner join `berita` on `comment`.`id_berita` = `berita`.`id_berita` where `comment`.`id_berita` = $id_berita";
	                  $query = mysqli_query($koneksi, $sql);
	                  while($data = mysqli_fetch_assoc($query)){ 
                      $comment = $data['comment'];
					  $nama = $data['nama'];
					  $foto = $data['foto'];
					  $id_berita = $data['id_berita'];
					
					  
					
					  ?>
									<div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
								<a class="size-w-1 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
								<img src="<?php echo $foto;?>" alt="IMG">
								</a>

								<div class="size-w-2 w-full-sr250 m-b-5-">
									<h5 class="p-b-5">
									<a class="f1-l-1 cl2 hov-cl10 trans-03 respon2" style="font-size:20px;">
											<?php echo $nama;?>
										</a>
									</h5>


										<span class="f50-s-100" style="font-size:15px;">
								<?php echo $comment;?>	
											</span>
									</div>


								</div>
								<?php }?>
							
						
						<!-- Leave a comment -->
	                         <?php 
							 if (isset($_SESSION['level'])){
	                            if ($_SESSION['level']=="User"){
								
		                       ?>
							   	<div>
							<h4 class="f1-l-4 cl3 p-b-12">
								Leave a Comment
							</h4>
							<form class="form-horizontal" action="index1.php?include=comment" method="post">
						     	<input type="hidden" name="id_berita" value="<?php echo $id_berita;?>">
								 <input type="hidden" name="id_user" value="<?php echo $id_user;?>">
								
								<textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" id="berita" name="comment" value="" placeholder="Comment..."></textarea>
								
								<button class="size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10" type="submit">
									Post Comment
								</button>
							</form>
						</div>
					</div>
				</div>
	<?php }}}
	else{?>
		<a href="admin">
		<button class="size-a-200 bg2 borad-10 f1-s-12 cl0 hov-btn1 trans-03 p-rl-50 m-t-10">
			Masuk sebagai User untuk berkomentar
		</button>
	</a>
				<?php }?>					
					<div class="p-l-10 p-rl-0-sr991">
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