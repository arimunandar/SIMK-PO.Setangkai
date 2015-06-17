<div class="row">
	<div class="col-md-12">
		<div class="block-flat">
			<div class="header">							
				<h3>Data Mobil</h3>
			</div>
			<div class="content">
				<a href="?perangkat=create-mobil" class="btn btn-primary"><span class="fa fa-pencil"></span> Create</a>
				<table id="table_id" class="display">
					<thead class="no-border">
						<tr>
							<th style="width: 5%;" class="text-center">No</th>
							<th>Nomor Mobil</th>
							<th>Type Mobil</th>
							<th style="width: 25%;" class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php

							$mobil 	= 	mysql_query("SELECT * FROM mobil");
							$no 	= 	1;

							while ($data=mysql_fetch_array($mobil)) {
						?>
						<tr>
							<td class="text-center"><?php echo $no; ?></td>
							<td><?php echo $data['nomor_mobil']; ?></td>
							<td><?php echo $data['type_mobil']; ?></td>
							<td class="text-center">
								<a href="?edit-mobil=<?php echo $data['id_mobil']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
								<a href="?del-mobil=<?php echo $data['id_mobil']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
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