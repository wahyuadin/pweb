<?php 

$id = $_GET['id'];

//include(dbconnect.php);
include('../dbconnect.php');

//query hapus
$query = "DELETE FROM buku WHERE id_buku = '$id' ";

if (mysqli_query($conn , $query)) {
	# redirect ke index.php
	header("location:../admin/list_master_admin.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($conn);
?>