<?php
mysqli_query($conn, "UPDATE validasi SET 
nama= '$_POST[nama]',
jabatan= '$_POST[jabatan]',
nip= '$_POST[nip]'
WHERE id_validasi='$_POST[id]'") or die ($connmysql_error());

echo"Data telah diedit";
echo"<meta http-equiv='refresh'
	content='1; url=?tampil=validasi'>";
?>