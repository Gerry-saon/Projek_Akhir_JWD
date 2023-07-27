<h2 class="sub-header">Data Anggota</h2>

<a href="?tampil=anggota_tambah" class="btn btn-primary"> Tambah </a><br><br>


<table width="100%" cellspacing="0" class="data" border="1">
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Tahun Masuk</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>

        <?php
$no=1;
$sql = mysqlI_query($conn, "SELECT * FROM anggota order by nis desc") or die ($connmysql_error());
while($data=mysqlI_fetch_array($sql)){
	?>


        <tr>
            <td> <?php echo $no; ?> </td>
            <td><a href="?tampil=anggota_detail&nis=<?php echo $data['nis']; ?>"> <?php echo $data['nis']; ?> </td>
            <td> <?php echo $data['nama']; ?> </td>
            <td> <?php echo $data['kelas']; ?> </td>
            <td> <?php echo $data['thn_masuk']; ?> </td>
            <td> <img src="gambar/foto/<?php echo 
	$data['gambar']; ?>" width="100"> </td>
            <td>

                <a href="?tampil=anggota_edit&id=
			<?php echo $data['nis']; ?>" class="btn btn-primary btn-sm"> Edit </a> |
                <a href="?tampil=anggota_hapus&id=
			<?php echo $data['nis']; ?>" class="btn btn-danger btn-sm"> Hapus </a>


            </td>
        </tr>

        <?php
		$no++;

}
?>
    </table>