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
          <a class="dropdown-item" href="peminjam_public.php">Peminjaman</a>
          <a class="dropdown-item" href="peminjam_public.php">Pengembalian</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Akun
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="registrasi/registrasi.php">Daftar</a>
        </div>
      </li>
     
    </ul>
    
  </div>
  </div>
</nav>


    <!--akhir Navbar-->
    <!--content -->
   <div class="container">
   	<div class="row">
   		<div class="col-lg-12 mt-4">
   			<div class="jumbotron jumbotron-fluid">
 			<div class="container">
    		<h1 class="display-4">Selamat Datang</h1>
    		<p class="lead">Website Perpustakaan Tugas Akhir Pemograman Web Untuk Memenuhi Syarat Tugas Pemograman Web Universitas Buana Perjuangan Karawang</p>
    		<p class="lead"></p>
  			</div>
	 </div>
   	</div>
   </div>
   <div class="row">
   		<div class="col">
   			<div class="card">
  			<div class="card-body">
    			<h5 class="card-title">Peminjaman</h5>
    			<p class="card-text">Jumlah transaksi peminjaman buku <b>5</b></p>
    			<a href="peminjam_public.php" class="btn btn-primary">Peminjaman</a>
  			</div>
			</div>
   		</div>
   		<div class="col">
   			<div class="card">
  			<div class="card-body">
    			<h5 class="card-title">Pengembalian</h5>
    			<p class="card-text">Jumlah transaksi pengembalian buku <b>2</b></p>
    			<a href="peminjam_public.php" class="btn btn-primary">Pengembalian</a>
  			</div>
			</div>
   		</div>
   		<div class="col">
   			<div class="card">
  			<div class="card-body">
    			<h5 class="card-title">Data Buku</h5>
    			<p class="card-text">Jumlah buku <br>yang tersedia <b>2</b></p>
    			<a href="master.php" class="btn btn-primary">Data Buku</a>
  			</div>
			</div>
   		</div>
   		<div class="col">
   			<div class="card">
  			<div class="card-body">
    			<h5 class="card-title">Data Siswa</h5>
    			<p class="card-text">Jumlah siswa yang ada <b>3</b> siswa</p>
    			<a href="#" class="btn btn-primary">Data Siswa</a>
  			</div>
			</div>
   		</div>
   </div>
  </div>
    <!--Akhir Content-->
    <!--Awal Footer-->

	<footer class="page-footer font-small white bg-dark p-3 text-center" style="color: white;margin-top: 18%">
  		<div class="footer-copyright text-center py-3">Perpustakaan© 2020 Copyright 
    		<a href="https://wahyuadin.github.io/"> Netsian Education</a>
  		</div>
	</footer>
	<!--Akhir Footer-->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>