<?php
//include('dbconnected.php');
include('../dbconnect.php');

$id = $_GET['id_bk'];
$nl = $_GET['nl'];
$kls = $_GET['kls'];
$nisn = $_GET['nisn'];
$jb = $_GET['jb'];
$tp = $_GET['tp'];
$tk = $_GET['tk'];

//query update
$query = "UPDATE pinjam SET nama_lengkap='$nl' , kelas='$kls' , nisn='$nisn' , judul_buku='$jb' , tgl_pinjam='$tp' , tgl_kembali='$tk' WHERE id_peminjaman='$id' ";

if (mysqli_query($conn, $query)) {
		header("location:../admin/list_peminjam_admin.php");
	
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>