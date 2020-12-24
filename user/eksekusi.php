<?php
//add dbconnect

include('../dbconnect.php');

$nama = $_POST['nm'];
$kelas = $_POST['kls'];
$nisn = $_POST['nisn'];
$jd_buku = $_POST['jb'];
$tgl_pjm = $_POST['pjm'];
$tgl_kmb = $_POST['kmb'];

//query

$query =  "INSERT INTO pinjam(nama_lengkap , kelas , nisn , judul_buku , tgl_pinjam , tgl_kembali) VALUES('$nama' , '$kelas' 
, '$nisn' , '$jd_buku' , '$tgl_pjm' , '$tgl_kmb')";

if (mysqli_query($conn , $query)) {
	# code redicet setelah insert ke index
	header("location:list_peminjam.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>