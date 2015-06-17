<div class="block-flat">
	<div class="header">							
		<h3>Edit Jadwal</h3>
	</div>
	<div class="content">
		<?php 
			if (isset($_GET['edit-jadwal'])) {
				$id 	=	$_GET['edit-jadwal'];	

				if (isset($_POST['edit-jadwal'])) {
					$nama 		= $_POST['nama'];

					$jadwal = mysql_query("UPDATE `skripsi-anggi`.`jadwal` 
											SET `jadwal` = '$nama' 
											WHERE `jadwal`.`id_jadwal` = $id");

					if ($jadwal) {
						echo "<meta http-equiv='refresh' content='0;URL= ?perangkat=Jadwal '/>";
					}
				}

				$jadwal 	=	mysql_query("SELECT * FROM jadwal WHERE id_jadwal=$id");
				$row		=	mysql_fetch_array($jadwal);
			}
		?>
		<form role="form" method="POST"> 
			<div class="form-group"> 
				<label>Nama Jadwal</label> <input type="text" value="<?php echo $row['jadwal']; ?>" class="form-control" name="nama" required>
			</div>
			<button class="btn btn-primary" type="submit" name="edit-jadwal"><span class="fa fa-edit"></span> Edit Jadwal</button>
			<a href="?perangkat=Jadwal" class="btn btn-warning"><span class="fa fa-reply"></span> Kembali</a>
		</form>
	</div>
</div>