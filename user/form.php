<?php
//add dbconnect

include('dbconnect.php');

$judul = $_POST['judul_bk'];
$penerbit = $_POST['terbit_bk'];
$genre = $_POST['genre_bk'];
$kode = $_POST['kode_bk'];

//query

$query =  "INSERT INTO buku(judul_buku , penerbit_buku , genre_buku , kode_buku) VALUES('$judul' , '$penerbit' , '$genre' , '$kode')";

if (mysqli_query($conn , $query)) {
	# code redicet setelah insert ke index
	header("location:admin.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>