<?php include 'header.php' ?>
    
<div class="container">
	<div class="col-md-8 col-xs-offset-2">
		<div class="panel panel-primary tulisan">
					  <div class="panel-heading">Tambah Data GURU

                                            </div>

<div class="panel-body">


<form action="tambah_guru.php" method="post">

<div class="form-group">
<label for="nama">Nama : </label>
<input type="text" name="nama" id="nama" class="form-control">
</div>

<div class="form-group">
<label for="nip">NIP : </label>
<input type="text" name="nip" id="nip" class="form-control">
</div>

<div class="form-group">
<label for="golongan">Golongan : </label>
<input type="text" name="golongan" id="golongan" class="form-control">
</div>

<div class="form-group">
<label for="tempat_lahir">Tempat Lahir : </label>
<input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
</div>

<div class="form-group">
<label for="tanggal_lahir">Tanggal Lahir : </label>
<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
</div>

<div class="form-group">
<label for="email">Email : </label>
<input type="text" name="email" id="email" class="form-control">
</div>

<div class="panel">
<button type="submit" name="submit" class="btn btn-info">
<i class="glyphicon glyphicon-floppy-disk">	Tambah Data </i>
</button>
</div>
</form>

</div>
</div>
</div>
</div>
<?php include 'footer.php' ?>