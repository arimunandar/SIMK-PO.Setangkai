<div class="block-flat">
	<div class="header">							
		<h3>Edit Supir</h3>
	</div>
	<div class="content">
		<?php 
			if (isset($_GET['edit-supir'])) {
				$id 	=	$_GET['edit-supir'];	

				if (isset($_POST['edit-supir'])) {
					$nama 		= $_POST['nama'];
					$alamat 	= $_POST['alamat'];
					$telp 		= $_POST['telp'];
					$sim 		= $_POST['sim'];
					$mobil 		= $_POST['mobil'];

					$supir = mysql_query("UPDATE `skripsi-anggi`.`supir` 
											SET `nama_supir` = '$nama', `alamat_supir` = '$alamat', `telp_supir` = '$telp', `no_sim` = '$sim', `id_mobil` = '$mobil' 
											WHERE `supir`.`id_supir` = $id");

					if ($supir) {
						echo "<meta http-equiv='refresh' content='0;URL= ?perangkat=Supir '/>";
					}
				}

				$supir 		=	mysql_query("SELECT * FROM supir WHERE id_supir=$id");
				$row		=	mysql_fetch_array($supir);
			}
		?>
		<form role="form" method="POST"> 
			<div class="form-group"> 
				<label>Nama</label> <input type="text" placeholder="Nama Supir" value="<?php echo $row['nama_supir']; ?>" class="form-control" name="nama" required>
			</div>
			<div class="form-group"> 
				<label>Alamat</label> <input type="text" placeholder="Alamat Supir" value="<?php echo $row['alamat_supir']; ?>" class="form-control" name="alamat" required>
			</div>
			<div class="form-group"> 
				<label>Telp</label> <input type="text" placeholder="Telepon Supir" value="<?php echo $row['telp_supir']; ?>" class="form-control" name="telp" required>
			</div>
			<div class="form-group"> 
				<label>No SIM</label> <input type="text" placeholder="No SIM Supir" value="<?php echo $row['no_sim']; ?>" class="form-control" name="sim" required>
			</div>
			<div class="form-group"> 
				<label>Mobil</label> 
				<select class="form-control" name="mobil" required>
					<?php 
						$mobil 	=	mysql_query("SELECT * FROM mobil");

						while ($row=mysql_fetch_array($mobil)) {
					?>
					<option value="<?php echo $row['id_mobil']; ?>"><?php echo $row['nomor_mobil']; ?></option>
					<?php
						}
					?>
				</select>
			</div>
			<button class="btn btn-primary" type="submit" name="edit-supir"><span class="fa fa-edit"></span> Edit Supir</button>
			<a href="?perangkat=Supir" class="btn btn-warning"><span class="fa fa-reply"></span> Kembali</a>
		</form>
	</div>
</div>