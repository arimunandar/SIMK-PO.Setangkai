<div class="block-flat">
	<div class="header">							
		<h3>Create Supir</h3>
	</div>
	<div class="content">
		<form role="form" method="POST"> 
			<div class="form-group"> 
				<label>Nama</label> <input type="text" placeholder="Nama Supir" class="form-control" name="nama" required>
			</div>
			<div class="form-group"> 
				<label>Alamat</label> <input type="text" placeholder="Alamat Supir" class="form-control" name="alamat" required>
			</div>
			<div class="form-group"> 
				<label>Telp</label> <input type="text" placeholder="Telepon Supir" class="form-control" name="telp" required>
			</div>
			<div class="form-group"> 
				<label>No SIM</label> <input type="text" placeholder="No SIM Supir" class="form-control" name="sim" required>
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
			<button class="btn btn-primary" type="submit" name="create-supir"><span class="fa fa-plus"></span> Create Supir</button>
			<a href="?perangkat=Supir" class="btn btn-warning"><span class="fa fa-reply"></span> Kembali</a>
		</form>
	</div>
</div>