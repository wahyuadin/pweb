<?php
	if (isset($_POST['tombol'])) {
		include '../koneksi.php';
		$daftar = mysqli_query($koneksi, "INSERT INTO admin VALUES(NULL,
			'".$_POST['nama_depan']."'
			'".$_POST['nama_belakang']."',
			'".$_POST['username']."',
			'".$_POST['password']."',
			'".$_POST['telp']."',
			'".$_POST['level']."-'".$_POST['telp']."')");
		if($daftar){
			echo "berhasil Daftar";
		}else{
			echo "Gagal Daftar";
		}
	}


?>

