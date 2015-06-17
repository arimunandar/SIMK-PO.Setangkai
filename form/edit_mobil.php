<div class="block-flat">
	<div class="header">							
		<h3>Edit Mobil</h3>
	</div>
	<div class="content">
		<?php 
			if (isset($_GET['edit-mobil'])) {
				$id 	=	$_GET['edit-mobil'];	

				if (isset($_POST['edit-mobil'])) {
					$nomor 		= $_POST['nomor'];
					$type 		= $_POST['type'];

					$mobil = mysql_query("UPDATE `skripsi-anggi`.`mobil` 
											SET `nomor_mobil` = '$nomor', `type_mobil` = '$type' 
											WHERE `mobil`.`id_mobil` = $id");

					if ($mobil) {
						echo "<meta http-equiv='refresh' content='0;URL= ?perangkat=Mobil '/>";
					}
				}

				$mobil 		=	mysql_query("SELECT * FROM mobil WHERE id_mobil=$id");
				$row		=	mysql_fetch_array($mobil);
			}
		?>
		<form role="form" method="POST"> 
			<div class="form-group"> 
				<label>Nomor Mobil</label> <input type="text" value="<?php echo $row['nomor_mobil']; ?>" class="form-control" name="nomor" required>
			</div>
			<div class="form-group"> 
				<label>type Mobil</label> <input type="text" value="<?php echo $row['type_mobil']; ?>" class="form-control" name="type" required>
			</div>
			<button class="btn btn-primary" type="submit" name="edit-mobil"><span class="fa fa-edit"></span> Edit Mobil</button>
			<a href="?perangkat=Mobil" class="btn btn-warning"><span class="fa fa-reply"></span> Kembali</a>
		</form>
	</div>
</div>