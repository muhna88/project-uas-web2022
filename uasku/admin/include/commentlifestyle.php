<?php
if(isset($_SESSION['id_user'])){
	$id_user = $_SESSION['id_user'];
$comment = $_POST['comment'];
$id_berita = $_POST['id_berita'];
if(empty($comment)){
	header("Location:index1.php?include=lifestyleisi&data=$id_berita");
}else{
$sql = "insert into `comment` (`comment`, `id_berita`, `id_user`) 
values ('$comment', '$id_berita', '$id_user')";	
	mysqli_query($koneksi,$sql);
		header("Location:index1.php?include=lifestyleisi&data=$id_berita&notif=komentarberhasil");
}
}
?>