<div class="block-flat">
	<div class="header">							
		<h3>Edit Rute</h3>
	</div>
	<div class="content">
		<?php 
			if (isset($_GET['edit-rute'])) {
				$id 	=	$_GET['edit-rute'];	

				if (isset($_POST['edit-rute'])) {
					$nama 		= $_POST['nama'];
					$jenis 		= $_POST['jenis'];

					$rute = mysql_query("UPDATE `skripsi-anggi`.`rute` 
											SET `nama_rute` = '$nama', `jenis_rute` = '$jenis' 
											WHERE `rute`.`id_rute` = $id");

					if ($rute) {
						echo "<meta http-equiv='refresh' content='0;URL= ?perangkat=Rute '/>";
					}
				}

				$rute 		=	mysql_query("SELECT * FROM rute WHERE id_rute=$id");
				$row		=	mysql_fetch_array($rute);
			}
		?>
		<form role="form" method="POST"> 
			<div class="form-group"> 
				<label>Nama Rute</label> <input type="text" value="<?php echo $row['nama_rute']; ?>" class="form-control" name="nama" required>
			</div>
			<div class="form-group"> 
				<label>Jenis</label> 
				<select class="form-control" name="jenis" required>
					<option ><?php echo $row['jenis_rute']; ?></option>
				</select>
			</div>
			<button class="btn btn-primary" type="submit" name="edit-rute"><span class="fa fa-edit"></span> Edit Rute</button>
			<a href="?perangkat=Rute" class="btn btn-warning"><span class="fa fa-reply"></span> Kembali</a>
		</form>
	</div>
</div>