<?php
session_start();
include ("../koneksi/koneksi.php");
$user = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = $_POST['password'];
$username = mysqli_real_escape_string($koneksi, $user);
$password = mysqli_real_escape_string($koneksi, MD5($pass));
$level = $_POST['level'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);

$files = move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

if(empty($user)){
	header("Location:include/entertainment.php");
}else if(empty($nama)){
	header("Location:include/entertainment.php");
}else if(empty($pass)){
	header("Location:include/entertainment.php");
}else{
	
	$sql = "insert into `user` (`nama`, `username`,  `email`, `foto`, `password`, `level`) 
	values ('$nama', '$username', '$email', '$target_file', '$password', '$level')";

	mysqli_query($koneksi,$sql);
header("Location:index.php?include=user&notif=tambahuserberhasil");	
}

?>