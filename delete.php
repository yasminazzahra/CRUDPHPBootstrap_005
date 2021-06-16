<?php
//koneksi database
include 'config.php';

//Menangkap data id yang di kirim dari url karena delete hanya membutuhkan id
$ID = $_GET['id'];

//menghapus data dari database
mysqli_query($koneksi, "delete from mahasiwa where id = '$ID'");

//mengalihkan halaman kembali ke index.php
header("location:index.php");
?>