<?php
//add dbconnect

include('../dbconnect.php');

$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$username = $_POST['username'];
$password = $_POST['password'];
$nisn = $_POST['nisn'];
$level = $_POST['level'];
$telp = $_POST['telp'];


//query

$query =  "INSERT INTO user(nama_depan , nama_belakang , username , password , nisn , level , telp) VALUES('$nama_depan' , '$nama_belakang' , '$username' , '$password' , '$nisn' , '$level' , '$telp')";

if (mysqli_query($conn , $query)) {
	# code redicet setelah insert ke index
	header("location:berhasil.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>