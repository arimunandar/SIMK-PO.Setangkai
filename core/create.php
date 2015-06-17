<?php 
	if (isset($_POST['create-admin'])) { // Admin
		$nama 		= $_POST['nama'];
		$username 	= $_POST['username'];
		$password	= $_POST['password'];

		$admin = mysql_query("INSERT INTO users (username, password, nama, level) VALUES ('$username', '$password', '$nama', 'admin')");

		if ($admin) {
			echo "<meta http-equiv='refresh' content='0;URL= ?users=Admin '/>";
		}
	}elseif (isset($_POST['create-operator'])) { // Operator
		$nama 		= $_POST['nama'];
		$username 	= $_POST['username'];
		$password	= $_POST['password'];

		$operator = mysql_query("INSERT INTO users (username, password, nama, level) VALUES ('$username', '$password', '$nama', 'operator')");

		if ($operator) {
			echo "<meta http-equiv='refresh' content='0;URL= ?users=Operator '/>";
		}
	}elseif (isset($_POST['create-jadwal'])) { // Jadwal
		$nama 		= $_POST['nama'];

		$jadwal = mysql_query("INSERT INTO jadwal (jadwal) VALUES ('$nama')");

		if ($jadwal) {
			echo "<meta http-equiv='refresh' content='0;URL= ?perangkat=Jadwal '/>";
		}
	}elseif (isset($_POST['create-rute'])) { // Rute
		$nama 		= $_POST['nama'];
		$jenis 		= $_POST['jenis'];

		$rute = mysql_query("INSERT INTO rute (nama_rute, jenis_rute) VALUES ('$nama', '$jenis')");

		if ($rute) {
			echo "<meta http-equiv='refresh' content='0;URL= ?perangkat=Rute '/>";
		}
	}elseif (isset($_POST['create-mobil'])) { // Mobil
		$nomor 		= $_POST['nomor'];
		$type 		= $_POST['type'];

		$mobil = mysql_query("INSERT INTO mobil (nomor_mobil, type_mobil) VALUES ('$nomor', '$type')");

		if ($mobil) {
			echo "<meta http-equiv='refresh' content='0;URL= ?perangkat=Mobil '/>";
		}
	}elseif (isset($_POST['create-supir'])) { // Supir
		$nama 		= $_POST['nama'];
		$alamat 	= $_POST['alamat'];
		$telp 		= $_POST['telp'];
		$sim 		= $_POST['sim'];
		$mobil 		= $_POST['mobil'];

		$supir = mysql_query("INSERT INTO supir (nama_supir, alamat_supir, telp_supir, no_sim, id_mobil) VALUES ('$nama', '$alamat', '$telp', '$sim', '$mobil')");

		if ($supir) {
			echo "<meta http-equiv='refresh' content='0;URL= ?perangkat=Supir '/>";
		}
	}elseif (isset($_POST['create-penumpang'])) { // Penumpang
		$nama 			= $_POST['nama'];
		$alamat_jemput 	= $_POST['alamat_jemput'];
		$alamat_tujuan 	= $_POST['alamat_tujuan'];
		$telp 			= $_POST['telp'];
		$tanggal		= $_POST['tanggal'];
		$tarif 			= $_POST['tarif'];
		$jadwal 		= $_POST['jadwal'];
		$rute 			= $_POST['rute'];
		$supir 			= $_POST['supir'];

		$supir = mysql_query("INSERT INTO penumpang (nama_penumpang, telp_penumpang, alamat_jemput, alamat_tujuan, tanggal, tarif_rute, id_jadwal, id_rute, id_supir) 
								VALUES ('$nama', '$telp', '$alamat_jemput', '$alamat_tujuan', '$tanggal', '$tarif', '$jadwal', '$rute', '$supir')");

		if ($supir) {
			echo "<meta http-equiv='refresh' content='0;URL= ?keberangkatan=Penumpang '/>";
		}
	}elseif (isset($_POST['create-barang'])) { // Barang
		$nama_barang 		= $_POST['nama_barang'];
		$nama_pengirim		= $_POST['nama_pengirim'];
		$telp_pengirim 		= $_POST['telp_pengirim'];
		$nama_penerima		= $_POST['nama_penerima'];
		$telp_penerima 		= $_POST['telp_penerima'];
		$alamat_penerima 	= $_POST['alamat_penerima'];
		$tanggal			= $_POST['tanggal'];
		$tarif 				= $_POST['tarif'];
		$jadwal 			= $_POST['jadwal'];
		$rute 				= $_POST['rute'];
		$supir 				= $_POST['supir'];

		$supir = mysql_query("INSERT INTO barang (nama_barang, nama_pengirim, telp_pengirim, nama_penerima, telp_penerima, alamat_penerima, tanggal, tarif_rute, id_jadwal, id_rute, id_supir) 
								VALUES ('$nama_barang', '$nama_pengirim', '$telp_pengirim', '$nama_penerima', '$telp_penerima', '$alamat_penerima', '$tanggal', '$tarif', '$jadwal', '$rute', '$supir')");

		if ($supir) {
			echo "<meta http-equiv='refresh' content='0;URL= ?keberangkatan=Barang '/>";
		}
	}
?>