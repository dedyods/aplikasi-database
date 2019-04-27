<?php include 'header.php' ?>
<?php include 'config/koneksi.php'; 
$data = mysqli_query($conn,"SELECT * FROM tb_guru");
$total_guru = mysqli_num_rows($data);
?>



<div>
		<div class="panel-heading">
			<h4 class="judul">Dashboard</h4>
		</div>
		<div class="panel-body">
			
			<div class="col-md-6">
					<div class="panel panel-primary tulisan">
					  <div class="panel-heading">Data Guru</div>
					  <h1 class="tengah tulisan">
								<i class="glyphicon glyphicon-headphones"> <span class="tulisan"><?php echo $total_guru; ?></span> </i> 
										<div class="btn-group" role="group" aria-label="...">
					<a type="button" class="btn btn-info" href="view_guru.php">Tampil Data</a>
					<a type="button" class="btn btn-success" href="form_inputguru.php">Input Data</a>
					
							</div>
								
							</h1>
						
					</div>			
				</div>			

				<div class="col-md-6">
					<div class="panel panel-primary tulisan">
					  <div class="panel-heading">Data Siswa</div>
					  <h1 class="tengah tulisan">
								<i class="glyphicon glyphicon-headphones"> <span class="tulisan">100</span> </i> 
										<div class="btn-group" role="group" aria-label="...">
					<a type="button" class="btn btn-info">Tampil Data</a>
					<a type="button" class="btn btn-success">Input Data</a>
					
							</div>
								
							</h1>
						
					</div>			
				</div>		

				<div class="col-md-6">
					<div class="panel panel-primary tulisan">
					  <div class="panel-heading">Data Pelajaran</div>
					  <h1 class="tengah tulisan">
			<i class="glyphicon glyphicon-headphones"> <span class="tulisan">100</span> </i> 
					<div class="btn-group" role="group" aria-label="...">
					<a type="button" class="btn btn-info">Tampil Data</a>
					<a type="button" class="btn btn-success">Input Data</a>
					
							</div>
							</h1>
						
					</div>			
				</div>		

				<div class="col-md-6">
					<div class="panel panel-primary tulisan">
					  <div class="panel-heading">Data Kelas</div>
					  <h1 class="tengah tulisan">
								<i class="glyphicon glyphicon-headphones"> <span class="tulisan">100</span> </i> 
								<div class="btn-group" role="group" aria-label="...">
					<a type="button" class="btn btn-info">Tampil Data</a>
					<a type="button" class="btn btn-success">Input Data</a>
					
							</div>
								
							</h1>
						
					</div>			
				</div>		
				
				

			</div>		

		</div>
	</div>
<?php include 'footer.php' ?>