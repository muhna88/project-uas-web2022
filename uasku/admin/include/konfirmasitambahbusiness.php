<?php 
$judul = $_POST['judul'];
$isi = $_POST['isi'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["sampul"]["name"]);

$files = move_uploaded_file($_FILES["sampul"]["tmp_name"], $target_file);

if(empty($judul)){
	header("Location:index.php?include=tambah-business&notif=tambahkosong");
}else{
	
	$sql = "insert into `berita` (`judul`, `sampul`, `isi`, `id_kategori`) 
	values ('$judul', '$target_file', '$isi', 5)";

	mysqli_query($koneksi,$sql);
header("Location:index.php?include=business&notif=tambahberhasil");	
}
?>
