<html>
    
<table border="1">
<tr bgcolor="black">
<td colspan="3"><b><font color="white"><center>KARTU ANGGOTA</b></td>
</tr>

<?php
            $nis    = isset($_GET['nis']) ? $_GET['nis'] : "";
            $query=mysql_query("SELECT * FROM anggota WHERE nis='$nis'");
            $data=mysql_fetch_array($query);
            ?>    
<tr>
<td> <img src="gambar/foto/<?php echo 
	$data['gambar']; ?>" width="100"> </td>
<td>        NIS : <?php echo $data['nis']; ?><br/>
   Nama Lengkap :<?php echo $data['nama']; ?><br/>
   Tempat Lahir :<?php echo $data['tmpt_lahir']; ?><br/>
 Tanggal Lahir  :<?php echo $data['tgl_lahir']; ?><br/>
          Kelas : <?php echo $data['kelas']; ?></td>
</tr>
<tr bgcolor="black">
<td colspan="3"><b><font color="white"><center><?php echo $data['nama']; ?></center></b></td>
</tr>
</body>
</html>