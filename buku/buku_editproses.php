<?php

mysql_query("UPDATE buku SET 
no_induk = '$_POST[no_induk]',
judul = '$_POST[judul]',
pengarang = '$_POST[pengarang]',
penerbit = '$_POST[penerbit]',
thn_terbit = '$_POST[thn_terbit]',
asal_buku = '$_POST[asal_buku]',
jumlah_buku = '$_POST[jumlah_buku]',
tgl_input = '$_POST[tgl_input]'

where id_buku='$_POST[id]'") or die(mysql_error());

echo "Data telah diedit";
echo "<meta http-equiv='refresh'
content='1; url=?tampil=buku'>";
?>

	