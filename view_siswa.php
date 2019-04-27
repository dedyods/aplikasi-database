<?php include 'header.php'  ?>

<?php include 'koneksi.php'  ?>



<div class="gambar">
	<div class="alert alert-info text-center">
		<h4 style="margin-bottom: 0px"><b>Data Guru</b></h4>			
	</div>

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
                </tr>
<?php } ?>
            </table>
<div>


</div>

