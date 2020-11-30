<?php 
	include "koneksi.php";
	$nama_kategori=$_POST['nama_kategori'];
	$query=mysqli_query($koneksi,"insert into kategori values (null,'$nama_kategori')");
	header('location:data_kategori.php');


	$penerbit=$_POST['penerbit'];
	$query=mysqli_query($koneksi,"insert into kategori values (null,'$penerbit')");
	header('location:data_kategori.php');