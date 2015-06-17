<div class="block-flat">
	<div class="header">							
		<h3>Data Barang</h3>
	</div>
	<div class="content">
		<a href="?keberangkatan=create-barang">
			<div class="btn btn-primary">
				<span class="fa fa-plus"></span>
				Tambah Data Barang
			</div>
		</a>
		<table id="table_id" class="display">
		    <thead>
		        <tr>
		        	<th width="5px" align="center">#</th>
		            <th>Nama Barang</th>
		            <th>Nama Penerima</th>
		            <th>Telp Penerima</th>
		            <th>Alamat Penerima</th>
		            <th>Tanggal</th>
		            <th>Tarif</th>
		            <th align="center">Action</th>
		        </tr>
		    </thead>
		    <tbody>
		    	<?php 
		    		$no 		=	1;
		    		$barang 	=	mysql_query("SELECT * FROM barang");

		    		while ($row=mysql_fetch_array($barang)) {
		    	?>
		    	<tr>
		        	<td align="center"><?php echo $no; ?></td>
		            <td><?php echo $row['nama_barang']; ?></td>
		            <td><?php echo $row['nama_penerima']; ?></td>
		            <td><?php echo $row['telp_penerima']; ?></td>
		            <td><?php echo $row['alamat_penerima']; ?></td>
		            <td><?php echo $row['tanggal']; ?></td>
		            <td><?php echo $row['tarif_rute']; ?></td>
		            <td align="center">
		            	<a href="?find-barang=<?php echo $row['id_barang']; ?>">
							<div class="btn btn-primary">
								<span class="fa fa-search"></span>
							</div>
						</a>
		            	<a href="?edit-barang=<?php echo $row['id_barang']; ?>">
							<div class="btn btn-warning">
								<span class="fa fa-pencil"></span>
							</div>
						</a>
						<a href="?del-barang=<?php echo $row['id_barang']; ?>">
							<div class="btn btn-danger">
								<span class="fa fa-trash-o"></span>
							</div>
						</a>
		            </td>
		        </tr>
		    	<?php
		    		$no++;
		    		}
		    	?>		        
		    </tbody>
		</table>
	</div>
</div>