<div class="block-flat">
	<div class="header">							
		<h3>Edit Operator</h3>
	</div>
	<div class="content">
		<?php 
			if (isset($_GET['edit-operator'])) {
				$id 	=	$_GET['edit-operator'];	

				if (isset($_POST['edit-operator'])) {
					$nama 		= $_POST['nama'];
					$username 	= $_POST['username'];
					$password	= $_POST['password'];

					$operator = mysql_query("UPDATE `skripsi-anggi`.`users` 
											SET `username` = '$username', `password` = '$password', `nama` = '$nama' 
											WHERE `users`.`id` = $id");

					if ($operator) {
						echo "<meta http-equiv='refresh' content='0;URL= ?users=Operator '/>";
					}
				}

				$operator 	=	mysql_query("SELECT * FROM users WHERE id=$id");
				$row		=	mysql_fetch_array($operator);
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
			<button class="btn btn-primary" type="submit" name="edit-operator"><span class="fa fa-edit"></span> Edit Operator</button>
			<a href="?users=Operator" class="btn btn-warning"><span class="fa fa-reply"></span> Kembali</a>
		</form>
	</div>
</div>