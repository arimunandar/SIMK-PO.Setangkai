<div class="block-flat">
	<div class="header">							
		<h3>Create Rute</h3>
	</div>
	<div class="content">
		<form role="form" method="POST"> 
			<div class="form-group"> 
				<label>Nama Rute</label> <input type="text" class="form-control" name="nama" required>
			</div>
			<div class="form-group"> 
				<label>Jenis</label> 
				<select class="form-control" name="jenis" required>
					<option >Penumpang</option>
					<option >Barang</option>
				</select>
			</div>
			<button class="btn btn-primary" type="submit" name="create-rute"><span class="fa fa-plus"></span> Create Rute</button>
			<a href="?perangkat=Rute" class="btn btn-warning"><span class="fa fa-reply"></span> Kembali</a>
		</form>
	</div>
</div>