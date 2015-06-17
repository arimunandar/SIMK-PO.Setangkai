<div class="row">
	<div class="col-md-12">
		<div class="block-flat">
			<div class="header">							
				<h3>Data Supir</h3>
			</div>
			<div class="content">
				<a href="?perangkat=create-supir" class="btn btn-primary"><span class="fa fa-pencil"></span> Create</a>
				<table id="table_id" class="display">
					<thead class="no-border">
						<tr>
							<th style="width: 5%;" class="text-center">No</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Telepon</th>
							<th>No SIM</th>
							<th>Nomor Mobil</th>
							<th>Type Mobil</th>
							<th style="width: 25%;" class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php

							$supir 	= 	mysql_query("SELECT *,mobil.nomor_mobil, mobil.type_mobil FROM supir INNER JOIN mobil ON supir.id_mobil=mobil.id_mobil");
							$no 	= 	1;

							while ($data=mysql_fetch_array($supir)) {
						?>
						<tr>
							<td class="text-center"><?php echo $no; ?></td>
							<td><?php echo $data['nama_supir']; ?></td>
							<td><?php echo $data['alamat_supir']; ?></td>
							<td><?php echo $data['telp_supir']; ?></td>
							<td><?php echo $data['no_sim']; ?></td>
							<td><?php echo $data['nomor_mobil']; ?></td>
							<td><?php echo $data['type_mobil']; ?></td>
							<td class="text-center">
								<a href="?edit-supir=<?php echo $data['id_supir']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
								<a href="?del-supir=<?php echo $data['id_supir']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
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
	</div>
</div>