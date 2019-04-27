<?php 
// menghubungkan koneksi
include 'koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET['id'];


// menghapus pelanggan
mysqli_query($conn,"DELETE FROM tb_guru WHERE id='$id'");


// alihkan halaman ke halaman data guru
header("location:view_guru.php?pesan=hapus");




?>