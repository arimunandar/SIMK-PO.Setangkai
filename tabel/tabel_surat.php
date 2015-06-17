<div class="block-flat">
	<div class="header">							
		<h3>Cari Penumpang</h3>
	</div>
	<div class="content">
		<form role="form" class="form-horizontal" method="POST" action="laporan/surat_jalan.php"> 
			<div class="form-group">
				<label class="col-sm-2 control-label">Tanggal</label>
				<div class="col-sm-4">
					<div class="input-group date datetime col-md-5 col-xs-7" data-min-view="2" data-date-format="dd-mm-yyyy">
						<input class="form-control" size="16" type="text" value="" name="tanggal" readonly>
						<span class="input-group-addon btn btn-primary"><span class="glyphicon glyphicon-th"></span></span>
					</div>
				</div>
			</div>
			<div class="form-group"> 
				<label class="col-sm-2 control-label">Jadwal</label> 
				<div class="col-sm-4">
					<select class="form-control" name="jadwal" required>
						<?php 
							$jadwal 	=	mysql_query("SELECT * FROM jadwal");

							while ($row=mysql_fetch_array($jadwal)) {
						?>
						<option value="<?php echo $row['id_jadwal']; ?>"><?php echo $row['jadwal']; ?></option>
						<?php
							}
						?>
					</select>
				</div>	
			</div>
			<div class="form-group"> 
				<label class="col-sm-2 control-label">Rute</label> 
				<div class="col-sm-4">
					<select class="form-control" name="rute" required>
						<?php 
							$rute 	=	mysql_query("SELECT * FROM rute");

							while ($row=mysql_fetch_array($rute)) {
						?>
						<option value="<?php echo $row['id_rute']; ?>"><?php echo $row['nama_rute']; ?></option>
						<?php
							}
						?>
					</select>
				</div>	
			</div>
			<div class="form-group"> 
				<label class="col-sm-2 control-label">Supir</label> 
				<div class="col-sm-4">
					<select class="form-control" name="supir" required>
						<?php 
							$supir 	=	mysql_query("SELECT * FROM supir");

							while ($row=mysql_fetch_array($supir)) {
						?>
						<option value="<?php echo $row['id_supir']; ?>"><?php echo $row['nama_supir']; ?></option>
						<?php
							}
						?>
					</select>
				</div>	
			</div>
			<div class="form-group">
				<div class="col-sm-2"></div>
				<div class="col-sm-4">
					<button class="btn btn-primary" type="submit" name="cari"><span class="fa fa-search"></span> Cari Penumpang</button>
					<a href="?keberangkatan=Penumpang" class="btn btn-warning"><span class="fa fa-reply"></span> Kembali</a>
				</div>
			</div>
			
		</form>
	</div>
</div>