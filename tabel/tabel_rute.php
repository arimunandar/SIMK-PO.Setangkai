<div class="row">
	<div class="col-md-12">
		<div class="block-flat">
			<div class="header">							
				<h3>Data Rute</h3>
			</div>
			<div class="content">
				<a href="?perangkat=create-rute" class="btn btn-primary"><span class="fa fa-pencil"></span> Create</a>
				<table id="table_id" class="display">
					<thead class="no-border">
						<tr>
							<th style="width: 5%;" class="text-center">No</th>
							<th>Nama Rute</th>
							<th>Jenis</th>
							<th style="width: 25%;" class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php

							$rute 	= 	mysql_query("SELECT * FROM rute");
							$no 	= 	1;

							while ($data=mysql_fetch_array($rute)) {
						?>
						<tr>
							<td class="text-center"><?php echo $no; ?></td>
							<td><?php echo $data['nama_rute']; ?></td>
							<td><?php echo $data['jenis_rute']; ?></td>
							<td class="text-center">
								<a href="?edit-rute=<?php echo $data['id_rute']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
								<a href="?del-rute=<?php echo $data['id_rute']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
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