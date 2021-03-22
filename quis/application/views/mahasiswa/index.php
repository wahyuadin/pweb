<div class= "container">
	<?php if($this->session->flashdata('flash')) : ?>
	<div class="row mt-3">
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Berhasil </strong>Data telah terinput
			<?= $this->session->flashdata('flash'); ?>.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
	</div>
<?php endif; ?>

	<div class="row mb-3">
		<div class="rol-md-6">
			<a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h3 class="mb-1">DAFTAR MAHASISWA</h3><br>
			<ul class="list-group">
				<?php foreach ($mahasiswa as $mhs ) : ?>
					<li class="list-group-item"><?= $mhs['nama']; ?>
					<a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?> " class="badge rounded-pill bg-danger" onclick="return confirm('Yakin Menghapus Data ?');" style="float:right; color:aliceblue;">Hapus</a>   
					<a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?> " class="badge rounded-pill bg-warning l-2" style="float:right; color:aliceblue; margin-right:5px;">Edit</a>
				
				</li>
			<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>