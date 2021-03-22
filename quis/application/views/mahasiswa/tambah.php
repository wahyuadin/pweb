<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">


			<div class="card">
				  <div class="card-header">
				    Form Tambah Data
				  </div>
				  <div class="card-body">
				  <?php if(validation_errors()) : ?>
				  <div class="alert alert-danger" role="alert">
				  		<?php echo validation_errors(); ?>
				  </div>
				  	<?php endif; ?>
					<form action="" method="POST">
						<div class="form-group">
							<label for="nama" class="mb-1">Nama</label>
							<input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama">						
						</div>
						<div class="form-group">
							<label for="nrp" class="mb-1 mt-3">NRP</label>
							<input type="text" name="nrp" class="form-control" id="nrp" placeholder="Masukan NRP">						
						</div>
						<div class="form-group">
							<label for="email" class="mb-1 mt-3">Email</label>
							<input type="text" name="email" class="form-control" id="email" placeholder="Masukan Email">						
						</div>
						<div class="form-group">
							<label for="jurusan" class="form-label mt-3">Jurusan</label>
							<select class="form-select" id="jurusan" name="jurusan">
							<option disabled selected>Pilih Jurusan</option>
							<option value="Teknik Informatika">Teknik Informatika</option>
							<option value="Management">Management</option>
							<option value="Teknik Industri">Teknik Industri</option>
							</select>	
												
						</div>
					<button class="btn btn-primary mt-3" type="submit">Simpan</button>
					<button class="btn btn-danger mt-3" type="reset">Reset</button>
					</form>
				  	
				  </div>
			</div>
		</div>
	</div>
</div>