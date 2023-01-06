<?php
$koneksi = mysqli_connect("localhost","root","","uas_web");
// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_errno());
}
?>
