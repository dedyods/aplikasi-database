<?php include 'header.php' ?>

<?php include 'config/koneksi.php' ?>

<?php  $id=$_GET['id'];
echo $id;
?>
<?php
$data = mysqli_query($conn,"select * from tb_guru where id='$id'");
				while($row=mysqli_fetch_array($data)){
?>
    
<div class="container">
	<div class="col-md-8 col-xs-offset-2">
		<div class="panel panel-primary tulisan">
					  <div class="panel-heading">Edit GURU
						  

                                            </div>

<div class="panel-body">


<form action="update_guru.php" method="post">
	<div align="right">
<button class="glyphicon glyphicon-floppy-disk btn btn-primary" type="submit" name="submit">
Save
</button>
</div>
<div class="form-group">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<label for="nama">Nama : </label>
<input type="text" name="nama" id="nama" class="form-control" value="<?php echo $row['nama_guru'] ?>">
</div>

<div class="form-group">
<label for="nip">NIP : </label>
<input type="text" name="nip" id="nip" class="form-control" value="<?php echo $row['nip'] ?>">
</div>

<div class="form-group">
<label for="golongan">Golongan : </label>
<input type="text" name="golongan" id="golongan" class="form-control" value="<?php echo $row['golongan'] ?>">
</div>

<div class="form-group">
<label for="tempat_lahir">Tempat Lahir : </label>
<input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="<?php echo $row['tempat_lahir'] ?>">
</div>

<div class="form-group">
<label for="tanggal_lahir">Tanggal Lahir : </label>
<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="<?php echo $row['tgl_lahir'] ?>">
</div>

<div class="form-group">
<label for="email">Email : </label>
<input type="text" name="email" id="email" class="form-control" value="<?php echo $row['email'] ?>">
</div>




</form>
                <?php } ?>
</div>
</div>
</div>
</div>
<?php include 'footer.php' ?>