<?php
	session_start();

	include ('koneksi.php');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$result =mysqli_query($koneksi,"SELECT * FROM admin where username = '$username' and password = '$password'");

	$cek = mysqli_num_rows($result);

	if($cek > 0) {
		$data = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['status'] = $data['sudah_login'];
		$_SESSION['id_login'] = $data['id'];
		header("location:halaman_admin.php");
	} else {
		header("location:login.php?pesan=salah, data tidak ditemukan");
	}
?>