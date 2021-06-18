<?php
  // konfigurasi server
  define('SERVER','localhost');
  define('USER','root');
  define('PASSWORD','');
  define('DATABASE','tubes_webpro');

  // koneksi ke server
  $conn = mysqli_connect(SERVER,USER,PASSWORD,DATABASE);

  // cek apakah koneksi berhasil
  if (mysqli_connect_errno()){
  	echo "Oouppss, Koneksi gagal : " . mysqli_connect_error();
  } else {
    echo "Koneksi ke database berhasil";
    // lakukan perintah selanjutnya
  }
?>