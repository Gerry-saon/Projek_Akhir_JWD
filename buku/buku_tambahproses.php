<?php	
	mysqli_query($conn, "INSERT INTO buku set
			no_induk	= '$_POST[no_induk]',
			judul	= '$_POST[judul]',
			pengarang	= '$_POST[pengarang]',
			penerbit	= '$_POST[penerbit]',
			thn_terbit 	= '$_POST[thn_terbit]',
			asal_buku 	= '$_POST[asal_buku]',
			jumlah_buku	= '$_POST[jumlah_buku]',
			tgl_input	= '$_POST[tgl_input]'
		") or die($connmysqli_error());
	
	echo"Data telah tersimpan";
	echo"<meta http-equiv='refresh'
	 content='1; url=?tampil=buku'>";
?>