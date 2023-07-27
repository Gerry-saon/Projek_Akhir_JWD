<?php

$tgl_pinjam		= isset($_POST['tgl_pinjam']) ? $_POST['tgl_pinjam'] : "";
$tgl_kembali	= isset($_POST['tgl_kembali']) ? $_POST['tgl_kembali'] : "";

$dapat_buku		= isset($_POST['buku']) ? $_POST['buku'] : "";
$pecah_buku		= explode (".", $dapat_buku);
$id_buku		= $pecah_buku[0];
$buku			= $pecah_buku[1];

$dapat_mhs		= isset($_POST['peminjam']) ? $_POST['peminjam'] : "";
$pecah_mhs		= explode (".", $dapat_mhs);
$id_mhs 		= $pecah_mhs[0];
$mhs			= $pecah_mhs[1];

$ket			= isset($_POST['ket']) ? $_POST['ket'] : "";

if($buku == "") {
	echo "<script>alert('Pilih bukunya terlebih dahulu');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?tampil=transaksi_input'>";
} elseif ($mhs == "" || $dapat_mhs == "") {
	echo "<script>alert('Pilih peminjamnya terlebih dahulu');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?tampil=transaksi_input'>";
	
} else {
	$query=mysqli_query($conn, "SELECT * FROM buku WHERE judul = '$buku'");
	while ($hasil=mysqli_fetch_array($query)) {
		$sisa=$hasil['jumlah_buku'];
	} 
		if ($sisa == 0) {
		echo "<script>alert('Stok bukunya telah habis, tidak bisa melakukan transaksi, tambahkan stok buku segera');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?tampil=transaksi'>";
	
	} else {
		$qt = mysqli_query($conn, "INSERT INTO transaksi VALUES (null, '$buku','$id_mhs', '$mhs', '$tgl_pinjam', '$tgl_kembali', 'Pinjam', '$ket')") or die ("Gagal Masuk".$connmysql_error());
		$qu			= mysqli_query($conn, "UPDATE buku SET jumlah_buku=(jumlah_buku-1) WHERE id_buku=$id_buku ");		
		if ($qt&&$qu) {
	        echo "<script>alert('Transaksi Sukses');</script>";
	        	echo "<meta http-equiv='refresh' content='0; url=?tampil=transaksi'>";
		} else {
			echo "<script>alert('Transaksi Gagal');</script>";
				echo "<meta http-equiv='refresh' content='0; url=?tampil=transaksi_input'>";
	
		}
	}
}
?>