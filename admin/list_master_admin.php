<?php
    include "../dbconnect.php";
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
  <a class="navbar-brand" href="../admin.php">Perpustakaan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../admin.php">Home <span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="list_master_admin.php">Data Master</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Transaksi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="list_peminjam_admin.php">Peminjaman</a>
          <a class="dropdown-item" href="list_peminjam_admin.php">Pengembalian</a>
        </div>
		<li class="nav-item">
        <a class="nav-link" href="../logout.php">Logout</a>
      </li>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Akun
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="registrasi/registrasi.php">Daftar</a>
        </div>
      </li> -->
     
    </ul>
    
  </div>
  </div>
</nav>


    <!--akhir Navbar-->




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Perpustakaan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

</head>
<body>

	<?php
	//tambahkan dbconnect
	include('../dbconnect.php');

	// format rupiah
	include('../formatbuku/lib.php');

	//query
	$query = "SELECT * FROM buku";

	$result = mysqli_query($conn , $query);

	?>

	<div class="container bg-white" style="padding-top: 20px; padding-bottom: 20px;">
	<br>
		<h1>Master Data Buku Perpustakaan</h1>
		<p>E-Learning ini di buat untuk menyelesaikan salah satu UAS MK Pemograman Web </p>
		<!-- <h3>Master Data Buku Perpustakaan</h3> -->
		<hr>
		<!-- <div class="row"> -->
			<!-- <div class="col-sm-4">
				<h3>Form Tambah Buku</h3>
				<form role="form" action="insert.php" method="post">
					<div class="form-group">
						<label>Judul Buku</label>
						<input type="text" name="judul_bk" class="form-control">
					</div>
					<div class="form-group">
						<label>Penerbit Buku</label>
						<input type="text" name="terbit_bk" class="form-control">
					</div>
					<div class="form-group">
						<label>Jenis Buku</label>
						<input type="text" name="genre_bk" class="form-control">
					</div>
					<div class="form-group">
						<label>Kode Buku</label>
						<input type="text" name="kode_bk" class="form-control">
					</div>
					<button type="submit" class="btn btn-info btn-block">Tambah Buku</button>					
				</form>
				
			</div> -->
			<div class="row-sm-8">
				<br>
				<h5>Tabel Daftar Buku</h5>
				<table class="table table-striped table-hover dtabel">
					<thead>
						<tr>
							<th>No</th>
							<th>Judul Buku</th>
							<th>Penerbit Buku</th>
							<th>Jenis Buku</th>
							<th>Kode Buku</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody> 
						
						<?php
							$no = 1;  
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['judul_buku']; ?></td>
							<td><?php echo $row['penerbit_buku']; ?></td>
							<td><?php echo $row['genre_buku']; ?></td>
							<td><?php echo $row['kode_buku']; ?></td>
							<td>
								<a href="verivikasi_master.php?id=<?php echo $row['id_buku'];?>" class="btn btn-success" role="button">Edit</a>
								<a href="delete_master.php?id=<?php echo $row['id_buku']?>" class="btn btn-danger" role="button">Delete</a>
							</td>
						</tr>

						<?php
							}
							mysqli_close($conn); 
						?>
					</tbody>
				</table>
			</div>
			
		</div>
		
	</div>
</body>

	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('.dtabel').DataTable();
	} );
	</script>

</html> 

<?php
	include "../footer.php";
?>