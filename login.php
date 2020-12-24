<?php
    include "dbconnect.php";
 ?>

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>PERPUSTAKAAN DIGITAL</title>
  </head>
  <body>
    <!-- NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
  <a class="navbar-brand" href="index.php">Perpustakaan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="master.php">Data Master</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Transaksi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="user/list_peminjam.php">Peminjaman</a>
          <a class="dropdown-item" href="user/list_peminjam.php">Pengembalian</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Akun
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">Login</a>
          <!-- <a class="dropdown-item" href="registrasi/registrasi.php">Daftar</a> -->
        </div>
      </li>
     
    </ul>
    
  </div>
  </div>
</nav>


    <!--akhir Navbar-->






 	<div class="container w-50 p-4">
 		<div class="row">
 			<div class="col-lg-12 mt-4">	
 				<h3 class="mt-4">Silahkan Login Disini</h3><br>
 	<form action="verivikasi.php" method="POST">
  	<div class="form-group">
    <label for="exampleInputEmail1" >Username</label>
    <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Masukan Username">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Masukan Password">
  </div>





  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">

    <label class="form-check-label" for="exampleCheck1">Ingatkan Saya</label>
    <small id="emailHelp" class="form-text text-muted">Belum Punya Akun ? Daftar <a href="registrasi/registrasi.php">Di Sini</a>
    </small>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  <br>
  <br>

  <?php if(isset($_GET['pesan'])) { ?>
  		<label style="color: black;">Username & Password <?php echo $_GET['pesan']; ?></label>
  	<?php } ?>
</form>
</div>
</div>
</div>

<?php 
	include "footer.php";
 ?>