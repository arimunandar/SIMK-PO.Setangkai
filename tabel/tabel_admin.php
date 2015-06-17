<div class="row">
	<div class="col-md-12">
		<div class="block-flat">
			<div class="header">							
				<h3>Data Admin</h3>
			</div>
			<div class="content">
				<a href="?users=create-admin" class="btn btn-primary"><span class="fa fa-pencil"></span> Create</a>
				<table id="table_id" class="display">
					<thead class="no-border">
						<tr>
							<th style="width: 5%;" class="text-center">No</th>
							<th>Nama</th>
							<th>Username</th>
							<th style="width: 25%;" class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php

							$admin 	= 	mysql_query("SELECT * FROM users WHERE level='admin'");
							$no 	= 	1;

							while ($data=mysql_fetch_array($admin)) {
						?>
						<tr>
							<td class="text-center"><?php echo $no; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['username']; ?></td>
							<td class="text-center">
								<a href="?edit-admin=<?php echo $data['id']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
								<a href="?del-admin=<?php echo $data['id']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
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