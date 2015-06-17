<!-- Begin Login Proses -->
<?php
	require_once('../config/db.php');
	//Login Proses
	if(isset($_POST['signin'])){
		$user 		= 	$_POST['username'];
		$pass 		= 	$_POST['password'];

		$hasil 		= 	mysql_query("SELECT * FROM users WHERE username='$user' AND password='$pass'");
		$data 		= 	mysql_fetch_array($hasil);

		$nama 		=	$data['nama'];
		$username 	= 	$data['username'];
		$password 	= 	$data['password'];
		$level 		=	$data['level'];

		if($user==$username && $pass=$password){
			session_start();
			$_SESSION['username']	=	$username;
			$_SESSION['nama']		=	$nama;
			$_SESSION['level']		=	$level;

			header('Location: ../dashboard.php');
		}else {
			header('Location: ../index.php');
		}
	}
?>
<!-- End Login Proses -->