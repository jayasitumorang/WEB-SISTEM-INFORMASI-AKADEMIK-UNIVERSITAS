<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$NO_KTP = $_GET['NO_KTP'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from daftar_data where NO_KTP='$NO_KTP'");
 
// mengalihkan halaman kembali ke index.php
header("location:data-list.php");
 
?>