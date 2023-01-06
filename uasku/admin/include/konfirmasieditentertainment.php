<?php 
if(isset($_SESSION['id_berita'])){
  $id_berita = $_SESSION['id_berita'];
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];
 
   if(empty($judul)){
 	    header("Location:index.php?include=edit-entertainment&data=".$id_berita."&notif=editkosong");
  }else{
	$sql = "update `berita` set `judul`='$judul',
	`isi`='$isi' 
	where `id_berita`='$id_berita'";
	mysqli_query($koneksi,$sql);
	unset($_SESSION['id_berita']);
	header("Location:index.php?include=entertainment&notif=editberhasil");
  }
}
?>
