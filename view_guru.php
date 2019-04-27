<?php include 'header.php'  ?>

<?php include 'config/koneksi.php'  ?>



<div class="container">
    <div class="panel-body">
        <div class="col-md-12">
            <div class="panel panel-primary tulisan">
					  <div class="panel-heading">Data Guru

                       <div align="right">  
<a button class="btn btn-info" href="form_inputguru.php">Tambah Data</a>
<a button class="btn btn-info" href="index.php"><i class="glyphicon glyphicon-repeat"></i></a>
</div>

                      </div>
	
<?php
if (isset($_GET['pesan']))
{
        if($_GET['pesan']=="sukses"){
   
    echo"	<div class='alert alert-success text-center'>
		<b>Data Berhasil di Update...!!</b>	 
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>	
	</div>";
    }
elseif($_GET['pesan']=="gagal"){
     echo"	<div class='alert alert-danger text-center'>
		<b>Data Gagal di Update...!!</b>	 
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>	
	</div>";
}
    else {
        echo "<div class='alert alert-success text-center'>
		<b>Data Berhasil di Hapus</b>	
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>	
	</div>";
    }
} 
?>
 <!-- Tombol tambah data --> 


<!-- Tabel Data Guru -->
<div class="panel-body">
			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
                    <th width="1%">Nama Guru</th>
                    <th width="1%">NIP</th>
                    <th width="1%">Golongan</th>
                    <th width="1%">Tempat Lahir</th>
                    <th width="1%">Tanggal Lahir</th>
                    <th width="1%" style="text-align:center">Aksi</th>
                    
                </tr>
<?php  
$data = mysqli_query($conn,"SELECT * FROM tb_guru");
$no=1;

while($row = mysqli_fetch_array($data)) {
?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['nama_guru'] ?></td>
                    <td><?php echo $row['nip'] ?></td>
                    <td><?php echo $row['golongan'] ?></td>
                    <td><?php echo $row['tempat_lahir'] ?></td>
                    <td><?php echo $row['tgl_lahir'] ?></td>
                    <td><a class="btn btn-success" href="form_editguru.php?id=<?php echo $row['id']; ?>">EDIT</a>
                        <a class="btn btn-danger">DELETE</a>
                    </td>
                </tr>
<?php } ?>
            </table>
<div>
</div>
</div>
</div>
</div>
</div>

