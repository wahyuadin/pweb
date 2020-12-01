

<?php
include "../koneksi.php";
function register($username,$password,$level)
	{	
		$insert = mysqli_query($this->koneksi,"INSERT into admin values ('','$username','$password','level')");
		return $insert;
	}

	function login($username,$password,$level)
	{
		$query = mysqli_query($this->koneksi,"SELECT * FROM admin where username='$username'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{
			
			if($remember)
			{
				setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
				setcookie('level', $data_user['level'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['username'] = $username;
			$_SESSION['level'] = $data_user['level'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}

	function relogin($username)
	{
		$query = mysqli_query($this->koneksi,"SELECT * from admin where username='$username'");
		$data_user = $query->fetch_array();
		$_SESSION['username'] = $username;
		$_SESSION['level'] = $data_user['level'];
		$_SESSION['is_login'] = TRUE;
	}

?>