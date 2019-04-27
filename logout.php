<?php 
// mengaktifkan session
session_start();

// menghapus semua session yang ada
session_destroy();

// mengalihkan halaman kembali ke halaman login sambil mengirimkan pesan logout melalui url 
header("location:form_login.php?pesan=logout");
?>