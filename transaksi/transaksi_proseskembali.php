<?php

$id_t=$_GET['id'];
$judul=$_GET['judul'];

$us=mysqli_query($conn, "UPDATE transaksi SET status='Kembali' WHERE id_t='$id_t'")or die ("Gagal update".$connmysqli_error());
$uj=mysqli_query($conn, "UPDATE buku SET jumlah_buku=(jumlah_buku+1) WHERE judul='$judul'")or die ("Gagal update".$connmysqli_error());

	if ($us || $uj) {
		echo "<script>alert('Berhasil Dikembalikan')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?tampil=transaksi'>";
	} else {
		echo "<script>alert('Gagal Dikembalikan')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?tampil=transaksi'>";
	}
?>