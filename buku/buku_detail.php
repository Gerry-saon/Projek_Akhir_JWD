<div id="menu-tengah">
    <div id="bg_menu">Data Buku
    </div>
    <div id="content_menu">
        <div id="menu_header">
            <table width="100%" height="100%" style="background-color:#9cc;">
                <tr>
                    <td align="center">Buku Detail</td>
                </tr>

            </table>


        </div>

        <div class="table_input">
            <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">


                <?php
            $judul	= isset($_GET['judul']) ? $_GET['judul'] : "";
			$query=mysqli_query($conn, "SELECT * FROM buku WHERE judul='$judul'");
			$data=mysqli_fetch_array($query);
			?>

                <tbody>
                    <tr>
                        <td width="30%" align="right">Nomor_Induk</td>
                        <td width="2%">:</td>
                        <td><?php echo $data[1]; ?></td>
                    </tr>
                    <tr>

                    <tr>
                        <td width="30%" align="right">Judul</td>
                        <td width="2%">:</td>
                        <td><?php echo $data[2]; ?></td>
                    </tr>
                    <tr>
                        <td width="20%" align="right">Pengarang</td>
                        <td>:</td>
                        <td><?php echo $data[3]; ?></td>
                    </tr>
                    <tr>
                        <td width="20%" align="right">Penerbit</td>
                        <td>:</td>
                        <td><?php echo $data[4]; ?></td>
                    </tr>
                    <tr>
                        <td width="20%" align="right">Tahun Terbit</td>
                        <td>:</td>
                        <td><?php echo $data[5]; ?></td>
                    </tr>
                    <tr>
                        <td width="20%" align="right">ISBN</td>
                        <td>:</td>
                        <td><?php echo $data[6]; ?></td>
                    </tr>
                    <tr>
                        <td width="20%" align="right">Jumlah Buku</td>
                        <td>:</td>
                        <td><?php echo $data[7]; ?></td>
                    </tr>
                    <tr>
                        <td width="20%" align="right">Tgl_Input </td>
                        <td>:</td>
                        <td><?php echo $data[8]; ?></td>
                    </tr>
                    <tr>
                        <td><a href="?tampil=buku" class="btn btn-primary btn-sm">Kembali</td>
                    </tr>

                </tbody>
            </table>
        </div>