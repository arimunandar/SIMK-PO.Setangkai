<div class="block-flat">
	<div class="header">							
		<h3>Data Penumpang</h3>
	</div>
	<div class="content">
		<a href="?keberangkatan=create-penumpang">
			<div class="btn btn-primary">
				<span class="fa fa-plus"></span>
				Tambah Data Penumpang
			</div>
		</a>
		<table id="table_id" class="display">
		    <thead>
		        <tr>
		        	<th width="5px" align="center">#</th>
		            <th>Nama</th>
		            <th>Telepon</th>
		            <th>Alamat Jemput</th>
		            <th>Alamat Tujuan</th>
		            <th>Tanggal</th>
		            <th>Tarif</th>
		            <th>Jadwal</th>
		            <th align="center">Action</th>
		        </tr>
		    </thead>
		    <tbody>
		    	<?php 
		    		$no 		=	1;
		    		$penumpang 	=	mysql_query("SELECT *, jadwal.jadwal FROM penumpang
		    										INNER JOIN jadwal ON penumpang.id_jadwal=jadwal.id_jadwal
		    									");

		    		while ($row=mysql_fetch_array($penumpang)) {
		    	?>
		    	<tr>
		        	<td align="center"><?php echo $no; ?></td>
		            <td><?php echo $row['nama_penumpang']; ?></td>
		            <td><?php echo $row['telp_penumpang']; ?></td>
		            <td><?php echo $row['alamat_jemput']; ?></td>
		            <td><?php echo $row['alamat_tujuan']; ?></td>
		            <td><?php echo $row['tanggal']; ?></td>
		            <td><?php echo $row['tarif_rute']; ?></td>
		            <td><?php echo $row['jadwal']; ?></td>
		            <td align="center">
		            	<a href="?find-penumpang=<?php echo $row['id_penumpang']; ?>">
							<div class="btn btn-primary">
								<span class="fa fa-search"></span>
							</div>
						</a>
		            	<a href="?edit-penumpang=<?php echo $row['id_penumpang']; ?>">
							<div class="btn btn-warning">
								<span class="fa fa-pencil"></span>
							</div>
						</a>
						<a href="?del-penumpang=<?php echo $row['id_penumpang']; ?>">
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