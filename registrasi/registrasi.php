<?php 
    include "../koneksi.php";
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
  <a class="navbar-brand" href="../index.php">Perpustakaan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="../daftar.php">Data Master</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Transaksi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="peminjaman.php">Peminjaman</a>
          <a class="dropdown-item" href="pengembalian.php">Pengadaan</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Akun
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../login.php">Login</a>
          <a class="dropdown-item" href="registrasi.php">Daftar</a>
        </div>
      </li>
     
    </ul>
    
  </div>
  </div>
</nav>


    <!--akhir Navbar-->





<div class="container w-50 p-4">
    <h3 class="mt-4">Menu Registrasi</h3><br>
 <form action="prosesregistrasi.php" method="POST" >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nama Depan</label>
      <input type="text" class="form-control" name="nama_depan" autofocus placeholder="Masukan Nama Depan" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Nama Belakang</label>
      <input type="text" class="form-control" name="nama_belakang" placeholder="Masukan Nama Belakang" autofocus required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Username</label>
    <input type="text" class="form-control" name="username" placeholder="Masukan Username Baru" autofocus required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Password</label>
    <input type="Password" class="form-control" name="password" placeholder="Masukan Password Baru" autofocus required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">No Telephon</label>
      <input type="text" class="form-control" name="telp" placeholder="Masukan No Telepon" autofocus required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Status</label>
      <select id="inputState" class="form-control" required>
        <option selected>---- Pilih Salah Satu ----</option>
        <option value="pelajar">Pelajar</option>
        <option>Guru (Coming Soon)</option>
      </select>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="tombol">Daftar</button>
</form>
</div>
</body>
</html>


<?php
    include "../footer.php";
?>