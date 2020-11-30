<?php 
	include "header.php";
?>
<!-- header conten -->
<div class="container">
	<div class="row">
		<div class="col-lg-12 mt-4"style="min-height: 570px">
			<div class="card">
  			<div class="card-header">
    		Tambah Data Kategori
  			</div>
  			<div class="card-body">
  				<div class="row">
            <div class="col">
                <form action="simpan_kategori.php" method="POST">
                  <div class="form-group">
                    <label for="">Nama Buku</label>
                    <input type="text" class="form-control" placeholder="Input Nama Buku" name="nama_kategori">
                  </div>
                  <div class="form-group">
                    <label for="">Nama Penerbit</label>
                    <input type="text" class="form-control" placeholder="Input Nama Penerbit" name="penerbit">
                  </div>
                  <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            </div>    
          </div>
			</div>
			</div>
		</div>
	</div>
</div>
<!-- header conten akhir -->

<?php
	include "footer.php";
 ?>