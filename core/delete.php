<?php 

	if (isset($_GET['del-admin'])) {
		$id	=	$_GET['del-admin'];

		$delete 	=	mysql_query("DELETE FROM users WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?users=Admin '/>";
		}
	}elseif (isset($_GET['del-operator'])) {
		$id	=	$_GET['del-operator'];

		$delete 	=	mysql_query("DELETE FROM users WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?users=Operator '/>";
		}
	}elseif (isset($_GET['del-jadwal'])) {
		$id	=	$_GET['del-jadwal'];

		$delete 	=	mysql_query("DELETE FROM jadwal WHERE id_jadwal = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?perangkat=Jadwal '/>";
		}
	}elseif (isset($_GET['del-rute'])) {
		$id	=	$_GET['del-rute'];

		$delete 	=	mysql_query("DELETE FROM rute WHERE id_rute = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?perangkat=Rute '/>";
		}
	}elseif (isset($_GET['del-mobil'])) {
		$id	=	$_GET['del-mobil'];

		$delete 	=	mysql_query("DELETE FROM mobil WHERE id_mobil = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?perangkat=Mobil '/>";
		}
	}elseif (isset($_GET['del-supir'])) {
		$id	=	$_GET['del-supir'];

		$delete 	=	mysql_query("DELETE FROM supir WHERE id_supir = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?perangkat=Supir '/>";
		}
	}elseif (isset($_GET['del-penumpang'])) {
		$id	=	$_GET['del-penumpang'];

		$delete 	=	mysql_query("DELETE FROM penumpang WHERE id_penumpang = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?keberangkatan=Penumpang '/>";
		}
	}elseif (isset($_GET['del-barang'])) {
		$id	=	$_GET['del-barang'];

		$delete 	=	mysql_query("DELETE FROM barang WHERE id_barang = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?keberangkatan=Barang '/>";
		}
	}
?>