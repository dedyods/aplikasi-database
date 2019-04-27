<?php include 'header.php' ?>

<?php 
    //Koneksi ke DBMS
    $conn = mysqli_connect("localhost","root","","school");
    
    // Menangkap Data setiap Elemen yang ada pada Form Input Guru
    $nama = $_POST["nama"];
    $nip = $_POST["nip"];
    $golongan = $_POST["golongan"];
    $tempat_lahir= $_POST["tempat_lahir"];
    $tanggal_lahir= $_POST["tanggal_lahir"];
    $email= $_POST["email"];

    //Query Insert Data ke dalam Tabel Guru
    $query = "INSERT INTO tb_guru VALUES
('$nama','$nip','$golongan','$tempat_lahir','$tanggal_lahir','$email')
";

    //Eksekusi Data dan Notifikasi data berhasil di input
    mysqli_query($conn,$query);
    echo "Data Berhasil Di input <br>";
    echo"<a href='form_inputguru.php'>Kembali</a>"
?>

<?php include 'footer.php' ?>