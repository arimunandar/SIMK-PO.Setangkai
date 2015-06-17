<?php 
	require_once('layout/header.php'); 
	require_once('layout/sidebar.php');
?>
  
<div class="container-fluid" id="pcont">
	<div class="page-head">
		<h2>Welcome</h2>
		<ol class="breadcrumb">
			<li><a href="dashboard.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
		</ol>
	</div>    
	<div class="cl-mcont">
<!-- ===================================== Content Here ===================================== -->
		<!-- Start Management -->
		<?php 
			if (isset($_GET['users'])) { //Users
				if ($_GET['users'] == 'Admin') {
					include('tabel/tabel_admin.php');
				}elseif ($_GET['users'] == 'Operator') {
					include('tabel/tabel_operator.php');
				}elseif ($_GET['users'] == 'create-admin') {
					include('form/create_admin.php');
					include('core/create.php');
				}elseif ($_GET['users'] == 'create-operator') {
					include('form/create_operator.php');
					include('core/create.php');
				}
			}elseif (isset($_GET['edit-admin'])) {				
				include('form/edit_admin.php');
			}elseif (isset($_GET['edit-operator'])) {				
				include('form/edit_operator.php');
			}elseif (isset($_GET['del-admin'])) {				
				include('core/delete.php');
			}elseif (isset($_GET['del-operator'])) {				
				include('core/delete.php');
			}elseif (isset($_GET['perangkat'])) { //Perangkat
				if ($_GET['perangkat'] == 'Jadwal') {
					include('tabel/tabel_jadwal.php');
				}elseif ($_GET['perangkat'] == 'Rute') {
					include('tabel/tabel_rute.php');
				}elseif ($_GET['perangkat'] == 'Mobil') {
					include('tabel/tabel_mobil.php');
				}elseif ($_GET['perangkat'] == 'Supir') {
					include('tabel/tabel_supir.php');
				}elseif ($_GET['perangkat'] == 'create-jadwal') {
					include('form/create_jadwal.php');
					include('core/create.php');
				}elseif ($_GET['perangkat'] == 'create-rute') {
					include('form/create_rute.php');
					include('core/create.php');
				}elseif ($_GET['perangkat'] == 'create-mobil') {
					include('form/create_mobil.php');
					include('core/create.php');
				}elseif ($_GET['perangkat'] == 'create-supir') {
					include('form/create_supir.php');
					include('core/create.php');
				}
			}elseif (isset($_GET['edit-jadwal'])) {
				include('form/edit_jadwal.php');
			}elseif (isset($_GET['edit-rute'])) {
				include('form/edit_rute.php');
			}elseif (isset($_GET['edit-mobil'])) {
				include('form/edit_mobil.php');
			}elseif (isset($_GET['edit-supir'])) {
				include('form/edit_supir.php');
			}elseif (isset($_GET['del-jadwal'])) {
				include('core/delete.php');
			}elseif (isset($_GET['del-rute'])) {
				include('core/delete.php');
			}elseif (isset($_GET['del-mobil'])) {
				include('core/delete.php');
			}elseif (isset($_GET['del-supir'])) {
				include('core/delete.php');
			}
			elseif (isset($_GET['keberangkatan'])) { //Keberangkatan
				if ($_GET['keberangkatan'] == 'Penumpang') {
					include('tabel/tabel_penumpang.php');
				}elseif ($_GET['keberangkatan'] == 'Barang') {
					include('tabel/tabel_barang.php');
				}elseif ($_GET['keberangkatan'] == 'Surat') {
					include('tabel/tabel_surat.php');
				}elseif ($_GET['keberangkatan'] == 'create-penumpang') {
					include('form/create_penumpang.php');
					include('core/create.php');
				}elseif ($_GET['keberangkatan'] == 'create-barang') {
					include('form/create_barang.php');
					include('core/create.php');
				}
			}elseif (isset($_GET['edit-penumpang'])) {
				include('form/edit_penumpang.php');
			}elseif (isset($_GET['edit-barang'])) {
				include('form/edit_barang.php');
			}elseif (isset($_GET['del-penumpang'])) {
				include('core/delete.php');
			}elseif (isset($_GET['del-barang'])) {
				include('core/delete.php');
			}elseif (isset($_GET['laporan'])) { //Laporan
				if ($_GET['laporan'] == 'Keuangan') {
					include('tabel/tabel_laporan.php');
				}
			}
		?>
		<!-- End Management -->
<!-- ===================================== Content Here ===================================== -->
	</div>
</div> 
  
<?php require_once('layout/footer.php'); ?>