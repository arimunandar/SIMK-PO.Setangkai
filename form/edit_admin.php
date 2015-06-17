<div class="block-flat">
	<div class="header">							
		<h3>Edit Admin</h3>
	</div>
	<div class="content">
		<?php 
			if (isset($_GET['edit-admin'])) {
				$id 	=	$_GET['edit-admin'];	

				if (isset($_POST['edit-admin'])) {
					$nama 		= $_POST['nama'];
					$username 	= $_POST['username'];
					$password	= $_POST['password'];

					$admin = mysql_query("UPDATE `skripsi-anggi`.`users` 
											SET `username` = '$username', `password` = '$password', `nama` = '$nama' 
											WHERE `users`.`id` = $id");

					if ($admin) {
						echo "<meta http-equiv='refresh' content='0;URL= ?users=Admin '/>";
					}
				}

				$admin 	=	mysql_query("SELECT * FROM users WHERE id=$id");
				$row	=	mysql_fetch_array($admin);
			}
		?>
		<form role="form" method="POST"> 
			<div class="form-group"> 
				<label>Nama</label> <input type="text" value="<?php echo $row['nama']; ?>" class="form-control" name="nama" required>
			</div> 
			<div class="form-group">
				<label>Username</label> <input type="text" value="<?php echo $row['username']; ?>" class="form-control" name="username" required>
			</div>
			<div class="form-group"> 
				<label>Password</label> <input type="password" value="<?php echo $row['password']; ?>" class="form-control" name="password" required>
			</div>
			<button class="btn btn-primary" type="submit" name="edit-admin"><span class="fa fa-edit"></span> Edit Admin</button>
			<a href="?users=Admin" class="btn btn-warning"><span class="fa fa-reply"></span> Kembali</a>
		</form>
	</div>
</div>