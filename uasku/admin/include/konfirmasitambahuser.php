<?php 
$nama = $_POST['nama'];
$email = $_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$level = $_POST['level'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);

$files = move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
$username = mysqli_real_escape_string($koneksi, $user);
$password = mysqli_real_escape_string($koneksi, MD5($pass));

if(empty($nama)){
	header("Location:index.php?include=tambah-user&notif=tambahnamakosong");
}else if(empty($email)){
	header("Location:index.php?include=tambah-user&notif=tambahemailkosong");
}else if(empty($user)){
	header("Location:index.php?include=tambah-user&notif=tambahuserkosong");
}else if(empty($pass)){
	header("Location:index.php?include=tambah-user&notif=tambahpasskosong");
}else if(empty($level)){
	header("Location:index.php?include=tambah-user&notif=tambahlevelkosong");
}else{
	$sql = "insert into `user` (`nama`, `email`, `username`, `password`, `level`, `foto`) 
	values ('$nama', '$email', '$username', '$password', '$level', '$target_file')";
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=user&notif=tambahuserberhasil");	
}
?>