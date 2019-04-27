<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="latarbelakang">
	
    <!-- menu navigasi -->
	<nav class="navbar navbar-inverse" style="border-radius: 0px">
		<div class="container-fluid">			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><img src="css/img/code.png" weidht="40px" height="30px"></a>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
					
					
					<!-- <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-random"></i> Master Data<span class="caret"></span></a>
						<ul class="dropdown-menu">							
							<li><a href="view_guru.php"><i class="glyphicon glyphicon-user"></i> Data Guru</a></li>
                            <li><a href="form_inputsiswa.php"><i class="glyphicon glyphicon-user"></i> Data Siswa</a></li>
                            <li><a href="form_inputmatapelajaran.php"><i class="glyphicon glyphicon-book"></i> Data Pelajaran</a></li>
						</ul>
					</li> -->
					<li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
				</ul>				
				<ul class="nav navbar-nav navbar-right">
										
				</ul>
			</div>
		</div>
	</nav>

	
<!-- Menu Form Login -->
		
<div class="container">
	<div class="col-md-8 col-xs-offset-2">
		<div class="panel panel-primary tulisan">
					  <div class="panel-heading">FORM LOGIN

											</div>
											<!-- Alert Cek Login -->

	<?php
if (isset($_GET['pesan']))
{
        if($_GET['pesan']=="belum_login"){
   
    echo"	<div class='alert alert-success text-center'>
		<b>Anda belum Melakukan Proses Login</b>	 
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>	
	</div>";
    }
elseif($_GET['pesan']=="gagal"){
     echo"	<div class='alert alert-danger text-center'>
		<b>Username dan password anda Salah</b>	 
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>	
	</div>";
}
    else {
        echo "<div class='alert alert-success text-center'>
		<b>Anda Berhasil Logout</b>	
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>	
	</div>";
    }
} 
?>

<div class="panel-body">


<form action="proses_login.php" method="post">

<div class="form-group">
<i class="glyphicon glyphicon-user">&nbsp</i><label for="username">Username : </label>
<input type="text" name="username" id="username" class="form-control" placeholder="Username">
</div>

<div class="form-group">
<i class="glyphicon glyphicon-wrench">&nbsp</i><label for="password">Password : </label>
<input type="password" name="password" id="password" class="form-control" placeholder="password">
</div>



<div class="panel">
<button type="submit" name="submit" class="btn btn-info">
<i class="glyphicon glyphicon-floppy-disk">	Login </i>
</button>
</div>
</form>

</div>
</div>
</div>
</div>
<div class="container">
<div class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="col-centered">
        <p align="center" style="color:#fff; padding-top:10px;">Sistem Data Siswa Copyright Akom 2019</p>
    </div>
    </div>
    
  </div>
    
  </div>
</body>
</html>