<?php 
$sql = "SELECT `isi` FROM `konten`"; 
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);
$isi = $data['isi'];
      ?>
<footer>
		<div class="bg2 p-t-40 p-b-25">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 p-b-20">
						<div class="size-h-3 flex-s-c">
							<a href="index.html">
								<img class="max-s-full" src="images/icons/mynews1.png" alt="LOGO">
							</a>
						</div>

						<div>
							<p id ="about" class="f1-s-1 cl11 p-b-16">
								<?php echo $isi;?>
							</p>

							<p id ="contact" class="f1-s-1 cl11 p-b-16">
								Any questions? Call us on (+1) 96 716 6879
							</p>

					
						</div>
					</div>

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.2931576671226!2d112.5903660139262!3d-7.968624981632229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7883389e07f327%3A0x9f3648ae9216b820!2sLab%20dan%20Industri%20Kreatif%20Fakultas%20Vokasi%20UB!5e0!3m2!1sid!2sid!4v1671344699436!5m2!1sid!2sid" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

					<div class="col-sm-6 col-lg-4 p-b-20">
						<div class="size-h-3 flex-s-c">
							<h5 class="f1-m-7 cl0">
								kategori
							</h5>
						</div>
						<?php 
$sql = "SELECT COUNT(`id_berita`) AS total  FROM `berita` WHERE `id_kategori` =1 "; 

$query = mysqli_query($koneksi, $sql);
$data_e = mysqli_fetch_assoc($query);

	
	  ?>

						<ul class="m-t--12">
							<li class="how-bor1 p-rl-5 p-tb-10">
								<a href="index.php?include=entertainment" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
									Entertainment (<?php echo $data_e['total'];?>)
								</a>
							</li>
							<?php 
$sql = "SELECT COUNT(`id_berita`) AS total  FROM `berita` WHERE `id_kategori` =5 "; 

$query = mysqli_query($koneksi, $sql);
$data_b = mysqli_fetch_assoc($query);

	
	  ?>
							<li class="how-bor1 p-rl-5 p-tb-10">
								<a href="index.php?include=business" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
									Business (<?php echo $data_b['total'];?>)
								</a>
							</li>
							<?php 
$sql = "SELECT COUNT(`id_berita`) AS total  FROM `berita` WHERE `id_kategori` =3 "; 

$query = mysqli_query($koneksi, $sql);
$data_t = mysqli_fetch_assoc($query);

	
	  ?>
							<li class="how-bor1 p-rl-5 p-tb-10">
								<a href="index.php?include=travel" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
									Travel (<?php echo $data_t['total'];?>)
								</a>
							</li>
							<?php 
$sql = "SELECT COUNT(`id_berita`) AS total  FROM `berita` WHERE `id_kategori` =4 "; 

$query = mysqli_query($koneksi, $sql);
$data_l = mysqli_fetch_assoc($query);

	
	  ?>
							<li class="how-bor1 p-rl-5 p-tb-10">
								<a href="index.php?include=lifestyle" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
									Life Style (<?php echo $data_l['total'];?>)
								</a>
							</li>

						
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="bg11">
			<div class="container size-h-4 flex-c-c p-tb-15">
				<span class="f1-s-1 cl0 txt-center">
					Copyright © 2018 

					<a href="#" class="f1-s-1 cl10 hov-link1"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</span>
			</div>
		</div>
	</footer>