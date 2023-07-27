
<div id="menu-tengah">
        <div id="bg_menu">Data Anggota
        </div>
        <div id="content_menu">
        <div id="menu_header">
            <table width="100%" height="100%" style="background-color:#9cc;">
                <tr>
                    <td align="center">Anggota Detail</td>
                </tr>
            
            </table>
            
            
        </div>
        
        <div class="table_input">
          <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">


<?php
            $nis	= isset($_GET['nis']) ? $_GET['nis'] : "";
			$query=mysql_query("SELECT * FROM anggota WHERE nis='$nis'");
			$data=mysql_fetch_array($query);
			?>        
            
            <tbody>
            	<tr>
                	<td width="30%" align="right">NIS</td>
                    <td width="2%">:</td>
                    <td><?php echo $data[0]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Nama Lengkap</td>
                    <td>:</td>
                    <td><?php echo $data[1]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tempat Lahir</td>
                    <td>:</td>
                    <td><?php echo $data[2]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tanggal Lahir</td>
                    <td>:</td>
                    <td><?php echo $data[3]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo $data[4]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Prodi</td>
                    <td>:</td>
                    <td><?php echo $data[5]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tahun Masuk</td>
                    <td>:</td>
                    <td><?php echo $data[6]; ?></td>
                </tr>
                <tr>
                    <td width="20%" align="right">Foto</td>
                    <td>:</td>
                    <td> <img src="gambar/foto/<?php echo 
                     $data['gambar']; ?>" width="100"> </td>
                </tr>
                <tr>
                    <td><a href="?tampil=anggota" class="btn btn-primary btn-sm">Kembali</td>
                </tr><br><td><br></td>
                <tr>
                    <td><a href="?tampil=anggota_cetak&nis=<?php echo $data['nis']; ?>"     
                    class="btn btn-primary btn-sm">Cetak Kartu <?php echo $data['nama']; ?></td>
                </tr>
            
            </tbody>
          </table>
 	      </div>