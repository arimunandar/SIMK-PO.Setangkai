<div class="block-flat">
	<div class="header">							
		<h3>Laporan Keuangan</h3>
	</div>
	<div class="content">
		<form role="form" class="form-horizontal" method="POST" action="laporan/laporan_keuangan.php"> 
			<div class="form-group">
				<label class="col-sm-2 control-label">Dari Tanggal</label>
				<div class="col-sm-4">
					<div class="input-group date datetime col-md-5 col-xs-7" data-min-view="2" data-date-format="dd-mm-yyyy">
						<input class="form-control" size="16" type="text" value="" name="tanggal1" readonly>
						<span class="input-group-addon btn btn-primary"><span class="glyphicon glyphicon-th"></span></span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Sampai Tanggal</label>
				<div class="col-sm-4">
					<div class="input-group date datetime col-md-5 col-xs-7" data-min-view="2" data-date-format="dd-mm-yyyy">
						<input class="form-control" size="16" type="text" value="" name="tanggal2" readonly>
						<span class="input-group-addon btn btn-primary"><span class="glyphicon glyphicon-th"></span></span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-2"></div>
				<div class="col-sm-4">
					<button class="btn btn-primary" type="submit" name="cari-laporan"><span class="fa fa-search"></span> Cari Laporan</button>
					<a href="?keberangkatan=Penumpang" class="btn btn-warning"><span class="fa fa-reply"></span> Kembali</a>
				</div>
			</div>
			
		</form>
	</div>
</div>