<div class="row">
	<div class="col-md-12">
		<div class="block-flat">
			<div class="header">							
				<h3>Data Jadwal</h3>
			</div>
			<div class="content">
				<a href="?perangkat=create-jadwal" class="btn btn-primary"><span class="fa fa-pencil"></span> Create</a>
				<table id="table_id" class="display">
					<thead class="no-border">
						<tr>
							<th style="width: 5%;" class="text-center">No</th>
							<th>Jam</th>
							<th style="width: 25%;" class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php

							$jadwal 	= 	mysql_query("SELECT * FROM jadwal");
							$no 	= 	1;

							while ($data=mysql_fetch_array($jadwal)) {
						?>
						<tr>
							<td class="text-center"><?php echo $no; ?></td>
							<td><?php echo $data['jadwal']; ?></td>
							<td class="text-center">
								<a href="?edit-jadwal=<?php echo $data['id_jadwal']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
								<a href="?del-jadwal=<?php echo $data['id_jadwal']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
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