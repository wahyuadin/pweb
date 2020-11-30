<?php 
	include "headerds.php";
 ?>
 <!--content -->
   <div class="container">
   	<div class="row">	
   </div>
   <div class="row">
   		<div class="col-lg mt-4">
   			<div class="card">
  			<div class="card-body">
    			<h5 class="card-title">Peminjaman</h5>
    			<p class="card-text">Jumlah transaksi peminjaman buku <b>5</b></p>
    			<a href="#" class="btn btn-primary">Peminjaman</a>
  			</div>
			</div>
   		</div>
   		<div class="col-lg mt-4">
   			<div class="card">
  			<div class="card-body">
    			<h5 class="card-title">Pengembalian</h5>
    			<p class="card-text">Jumlah transaksi pengembalian buku <b>2</b></p>
    			<a href="#" class="btn btn-primary">Pengembalian</a>
  			</div>
			</div>
   		</div>
   		<div class="col-lg mt-4">
   			<div class="card">
  			<div class="card-body">
    			<h5 class="card-title">Data Buku</h5>
    			<p class="card-text">Jumlah buku <br>yang tersedia <b>2</b></p>
    			<a href="#" class="btn btn-primary">Data Buku</a>
  			</div>
			</div>
   		</div>
   		<div class="col-lg mt-4">
   			<div class="card">
  			<div class="card-body">
    			<h5 class="card-title">Data Siswa</h5>
    			<p class="card-text">Jumlah siswa yang ada <b>3</b> siswa</p>
    			<a href="#" class="btn btn-primary">Data Siswa</a>
  			</div>
			</div>
   		</div>
   </div>
  </div>
    <!--Akhir Content-->


    <!-- header conten -->
	<div class="container">
	<div class="row" style="min-height: 570px">
		<div class="col-lg-12 mt-4">
			<div class="card">
  			<div class="card-header">
    		Perpustakaan Digital
  			</div>
  			<div class="card-body">
  				<div class="row">
  					<div class="col">
  						<h3>Daftar Buku</h3>
  					</div>
  					<div class="col">
  						<form class="form-inline float-right" method="GET">
  							<input type="text" class="form-control" name="keyword">
  							<input type="submit" class="btn btn-primary ml-2" name="cari" value="CARI">
  					</form>
  				</div>
  			</div>
  				<div class="row mt-3">
  					<div class="col">
  						<table class="table table-bordered table-striped">
  							<tr>
  								<th>No</th>
  								<th>Kode Buku</th>
  								<th>Nama buku</th>
                  <th>Penerbit</th>
  							</tr>
                <?php
                  if (isset($_GET['cari'])){
                        $keyword=$_GET['keyword'];
                        $query=mysqli_query($koneksi,"select * from kategori where nama_kategori like '%$keyword%'");
                  }else{
                      $query=mysqli_query($koneksi,"select * from kategori");
                  }
                  $no=1;
                  while ($ambil_data=mysqli_fetch_array($query)){
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $ambil_data['id_kategori']; ?></td>
                  <td><?php echo $ambil_data['nama_kategori']; ?></td>
                  <td><?php echo $ambil_data['penerbit']; ?></td>
                </tr>
                <?php 
                  }
                 ?>
  						</table>
  					</div>
  				</div>
			</div>
			</div>
		</div>
	</div>
</div>
<!-- header conten akhir -->


 <?php 
 	include "footerds.php";
 ?>