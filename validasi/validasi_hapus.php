<?php
	mysql_query("DELETE FROM validasi where id_validasi='$_GET[id]'")
		or die(mysql_error());

echo"Data telah dihapus";
echo"<meta http-equiv='refresh'
		content='1; url=?tampil=validasi'>";
?>