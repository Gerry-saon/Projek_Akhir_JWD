<?php
mysqli_query($conn, "DELETE FROM buku where id_buku='$_GET[id]'") or die ($connmysqli_error());

echo "Data telah dihapus";
echo "<meta http-equiv='refresh'
content='1; url=?tampil=buku'>";
?>