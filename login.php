<?php 
	include "header.php";
 ?>
 	<div class="container w-50 p-4">
 		<div class="row">
 			<div class="col-lg-12 mt-4">	
 				<h3 class="mt-4">Silahkan Login Disini</h3><br>
 	<form action="verivikasi.php" method="POST">
  	<div class="form-group">
    <label for="exampleInputEmail1" >Username</label>
    <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Masukan Username">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Masukan Password">
  </div>





  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">

    <label class="form-check-label" for="exampleCheck1">Ingatkan Saya</label>
    <small id="emailHelp" class="form-text text-muted">Belum Punya Akun ? Daftar <a href="registrasi/registrasi.php">Di Sini</a>
    </small>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  <br>
  <br>

  <?php if(isset($_GET['pesan'])) { ?>
  		<label style="color: black;">Username & Password <?php echo $_GET['pesan']; ?></label>
  	<?php } ?>
</form>
</div>
</div>
</div>

<?php 
	include "footer.php";
 ?>