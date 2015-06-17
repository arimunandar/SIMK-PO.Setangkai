<?php 
	if (isset($_GET['edit-admin'])) {
		$id 	=	$_GET['edit-admin'];	

		if (isset($_POST['edit-admin'])) {
			$nama 		= $_POST['nama'];
			$username 	= $_POST['username'];
			$password	= $_POST['password'];

			$admin = mysql_query("UPDATE users
									SET `username` = '$username', `password` = '$password', `nama` = '$nama' 
									WHERE id = $id");

			if ($admin) {
				echo "<meta http-equiv='refresh' content='0;URL= ?users=Admin '/>";
			}
		}

		$admin 	=	mysql_query("SELECT * FROM users WHERE id=$id");
		$row	=	mysql_fetch_array($admin);
	}elseif (isset($_GET['edit-operator'])) {
		$id 	=	$_GET['edit-operator'];	

		if (isset($_POST['edit-operator'])) {
			$nama 		= $_POST['nama'];
			$username 	= $_POST['username'];
			$password	= $_POST['password'];

			$operator = mysql_query("UPDATE users
									SET `username` = '$username', `password` = '$password', `nama` = '$nama' 
									WHERE id = $id");

			if ($operator) {
				echo "<meta http-equiv='refresh' content='0;URL= ?users=Operator '/>";
			}
		}

		$operator 	=	mysql_query("SELECT * FROM users WHERE id=$id");
		$row		=	mysql_fetch_array($operator);
	}elseif (isset($_GET['edit-jadwal'])) {
		$id 	=	$_GET['edit-jadwal'];	

		if (isset($_POST['edit-jadwal'])) {
			$nama 		= $_POST['nama'];

			$jadwal = mysql_query("UPDATE jadwal 
									SET `jadwal` = '$nama' 
									WHERE id_jadwal = $id");

			if ($jadwal) {
				echo "<meta http-equiv='refresh' content='0;URL= ?perangkat=Jadwal '/>";
			}
		}

		$jadwal 	=	mysql_query("SELECT * FROM jadwal WHERE id_jadwal=$id");
		$row		=	mysql_fetch_array($jadwal);
	}elseif (isset($_GET['edit-rute'])) {
		$id 	=	$_GET['edit-rute'];	

		if (isset($_POST['edit-rute'])) {
			$nama 		= $_POST['nama'];
			$jenis 		= $_POST['jenis'];

			$rute = mysql_query("UPDATE rute 
									SET `nama_rute` = '$nama', `jenis_rute` = '$jenis' 
									WHERE id_rute = $id");

			if ($rute) {
				echo "<meta http-equiv='refresh' content='0;URL= ?perangkat=Rute '/>";
			}
		}

		$rute 		=	mysql_query("SELECT * FROM rute WHERE id_rute=$id");
		$row		=	mysql_fetch_array($rute);
	}elseif (isset($_GET['edit-mobil'])) {
		$id 	=	$_GET['edit-mobil'];	

		if (isset($_POST['edit-mobil'])) {
			$nomor 		= $_POST['nomor'];
			$type 		= $_POST['type'];

			$mobil = mysql_query("UPDATE mobil 
									SET `nomor_mobil` = '$nomor', `type_mobil` = '$type' 
									WHERE id_mobil = $id");

			if ($mobil) {
				echo "<meta http-equiv='refresh' content='0;URL= ?perangkat=Mobil '/>";
			}
		}

		$mobil 		=	mysql_query("SELECT * FROM mobil WHERE id_mobil=$id");
		$row		=	mysql_fetch_array($mobil);
	}elseif (isset($_GET['edit-supir'])) {
		$id 	=	$_GET['edit-supir'];	

		if (isset($_POST['edit-supir'])) {
			$nama 		= $_POST['nama'];
			$alamat 	= $_POST['alamat'];
			$telp 		= $_POST['telp'];
			$sim 		= $_POST['sim'];
			$mobil 		= $_POST['mobil'];

			$supir = mysql_query("UPDATE supir 
									SET `nama_supir` = '$nama', `alamat_supir` = '$alamat', `telp_supir` = '$telp', `no_sim` = '$sim', `id_mobil` = '$mobil' 
									WHERE id_supir = $id");

			if ($supir) {
				echo "<meta http-equiv='refresh' content='0;URL= ?perangkat=Supir '/>";
			}
		}

		$supir 		=	mysql_query("SELECT * FROM supir WHERE id_supir=$id");
		$row		=	mysql_fetch_array($supir);
	}elseif (isset($_GET['edit-penumpang'])) {
		$id 	=	$_GET['edit-penumpang'];	

		if (isset($_POST['edit-penumpang'])) {
			$nama 			= $_POST['nama'];
			$alamat_jemput 	= $_POST['alamat_jemput'];
			$alamat_tujuan 	= $_POST['alamat_tujuan'];
			$telp 			= $_POST['telp']
			$tanggal		= $_POST['tanggal'];
			$jadwal 		= $_POST['jadwal'];
			$supir 			= $_POST['supir'];

			$penumpang = mysql_query("UPDATE penumpang 
									SET `nama_penumpang` = '$nama', `alamat_jemput` = '$alamat_jemput', `alamat_tujuan` = '$alamat_tujuan', `telp_penumpang` = '$telp', `tanggal` = '$tanggal', `id_jadwal` = '$jadwal', `id_supir` = '$supir' 
									WHERE id_penumpang = $id");

			if ($penumpang) {
				echo "<meta http-equiv='refresh' content='0;URL= ?keberangkatan=Penumpang '/>";
			}
		}

		$penumpang 		=	mysql_query("SELECT * FROM penumpang WHERE id_penumpang=$id");
		$row			=	mysql_fetch_array($penumpang);
	}
?>