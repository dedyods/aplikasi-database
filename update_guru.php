<?php include 'header.php' ?>

<?php 
    //Koneksi ke DBMS
    $conn = mysqli_connect("localhost","root","","school");
    
    // Menangkap Data setiap Elemen yang ada pada Form Input Guru
    $id= $_POST["id"];
    $nama = $_POST["nama"];
    $nip = $_POST["nip"];
    $golongan = $_POST["golongan"];
    $tempat_lahir= $_POST["tempat_lahir"];
    $tanggal_lahir= $_POST["tanggal_lahir"];
    $email= $_POST["email"];

//mysqli_query($koneksi,"update pelanggan set pelanggan_nama='$nama', pelanggan_hp='$hp', pelanggan_alamat='$alamat' where pelanggan_id='$id'");
    
    //Eksekusi Data dan Notifikasi data berhasil di input
    $query = mysqli_query($conn,"UPDATE tb_guru SET nama_guru='$nama', nip='$nip',golongan='$golongan',tempat_lahir='$tempat_lahir',tgl_lahir='$tanggal_lahir',email='$email' WHERE id='$id'");
    if($query){
            header("Location: view_guru.php?pesan=sukses");
    }
    else {
         header("Location: view_guru.php?pesan=gagal");
    }
    
    
    
?>

<?php include 'footer.php' ?>