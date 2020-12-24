<!DOCTYPE html>
<html lang="en">
<head>
	<title>PERPUSTAKAAN DIGITAL</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$id = $_GET['id']; 

//koneksi database
include('../dbconnect.php');

//query
$query = "SELECT * FROM pinjam WHERE id_peminjaman='$id'";
$result = mysqli_query($conn, $query);

?>

<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">

	<h3>Update Data Peminjaman</h3>
	<form role="form" action="edit.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>

		<input type="hidden" name="id_bk" value="<?php echo $row['id_peminjaman']; ?>">

		<div class="form-group">
			<label>Nama Lengkap</label>
			<input type="text" name="nl" class="form-control" value="<?php echo $row['nama_lengkap']; ?>">			
		</div>

		<div class="form-group">
			<label>Kelas</label>
			<input type="text" name="kls" class="form-control" value="<?php echo $row['kelas']; ?>">			
		</div>

		<div class="form-group">
			<label>NISN</label>
			<input type="text" name="nisn" class="form-control" value="<?php echo $row['nisn']; ?>">			
		</div>
		<div class="form-group">
			<!-- <label>Judul Buku</label> -->
			<input type="hidden" name="jb" class="form-control" value="<?php echo $row['judul_buku']; ?>">			
		</div>
		<div class="form-group">
			<label>Tanggal Pinjam</label>
			<input type="date" name="tp" class="form-control" value="<?php echo $row['tgl_pinjam']; ?>">			
		</div>
		<div class="form-group">
			<label>Tanggal Kembali</label>
			<input type="date" name="tk" class="form-control" value="<?php echo $row['tgl_kembali']; ?>">			
		</div>
		<button type="submit" class="btn btn-success btn-block">Update Nama Peminjam</button>

		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>


</body>
</html> 