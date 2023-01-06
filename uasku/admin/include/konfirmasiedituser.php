<?php 
if(isset($_SESSION['id_user'])){
	$id_user = $_POST['id_user'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $level = $_POST['level'];
    $password = mysqli_real_escape_string($koneksi, MD5($pass));

    //get foto 
    $sql_f = "SELECT `foto` FROM `user` WHERE `id_user`='$id_user'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
        $foto = $data_f[0];
        //echo $foto;
    }

	if(empty($nama)){
	header("Location:index.php?include=edit-user&notif=editnamakosong");
	}else if(empty($email)){
	header("Location:index.php?include=edit-user&notif=editemailkosong");
	}else if(empty($user)){
	header("Location:index.php?include=edit-user&notif=edituserkosong");
	}else{
        $lokasi_file = $_FILES['foto']['tmp_name'];
		$nama_file = $_FILES['foto']['name'];
		$direktori = 'foto/'.$nama_file;
		if(move_uploaded_file($lokasi_file,$direktori)){
            if(!empty($foto) && !empty($pass)){
                    unlink("foto/$foto");
            }
		$sql = "UPDATE `user` SET `nama`='$nama', `email`='$email', `username`='$user', `password`='$password', `level`='$level', `foto`='$nama_file' WHERE `user`.`id_user`='$id_user'";
                  //echo $sql;
		mysqli_query($koneksi,$sql);
		} else if(move_uploaded_file($lokasi_file,$direktori)){
			if(!empty($foto) && empty($pass)){
                    unlink("foto/$foto");
			}
		$sql = "UPDATE `user` SET `nama`='$nama', `email`='$email', `username`='$user', `level`='$level', `foto`='$nama_file' WHERE `user`.`id_user`='$id_user'";
                  //echo $sql;
		mysqli_query($koneksi,$sql);
		}else if(empty($pass)){
		$sql = "UPDATE `user` SET `nama`='$nama', `email`='$email', `username`='$user', `level`='$level' WHERE `user`.`id_user`='$id_user'";
                  //echo $sql;
		mysqli_query($koneksi,$sql);
		}else{
		$sql = "UPDATE `user` SET `nama`='$nama', `email`='$email', `username`='$user', `password`='$password', `level`='$level' WHERE `user`.`id_user`='$id_user'";
                  //echo $sql;
		mysqli_query($koneksi,$sql);
		}
    header("Location:index.php?include=user&notif=editberhasil");
	}
}

?>