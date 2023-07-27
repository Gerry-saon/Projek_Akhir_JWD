<h2 class="sub-header">Validasi</h2>

<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Nip</th>
        <th>Aksi</th>
    </tr>

    <?php
$no=1;
$sql = mysqli_query($conn, "SELECT * FROM validasi order by id_validasi desc")
		or die($connmysqli_error());
while($data=mysqli_fetch_array($sql)){
?>

    <tr>
        <td><?php echo $no; ?> </td>
        <td><?php echo $data['nama']; ?> </td>
        <td><?php echo $data['jabatan']; ?> </td>
        <td><?php echo $data['nip']; ?> </td>
        <td>
            <a href="?tampil=validasi_edit&id=
			<?php echo $data['id_validasi']; ?>" class="btn btn-primary btn-sm"> Ubah</a>
            <a href="?tampil=validasi_hapus&id=
			<?php echo $data['id_validasi']; ?>" class="btn btn-danger btn-sm"> Hapus</a>
        </td>
    </tr>

    <?php
$no++;
}
?>
</table>