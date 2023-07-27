<h2 class="sub-header">Data Buku</h2>

<a href="?tampil=buku_tambah" class="btn btn-primary"> Tambah </a><br><br>


<table width="100%" cellspacing="0" class="data" border="1">
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Jumlah Buku</th>
            <th>Aksi</th>
        </tr>

        <?php
$no=1;
$sql = mysqli_query($conn, "SELECT * FROM buku order by id_buku desc") or die ($connmysqli_error());
while($data=mysqli_fetch_array($sql)){
	?>


        <tr>
            <td> <?php echo $no; ?> </td>
            <td><a href="?tampil=buku_detail&judul=<?php echo $data['judul']; ?>"> <?php echo $data['judul']; ?> </td>
            <td> <?php echo $data['pengarang']; ?> </td>
            <td> <?php echo $data['jumlah_buku']; ?> </td>
            <td>

                <a href="?tampil=buku_edit&id=
			<?php echo $data['id_buku']; ?>" class="btn btn-primary btn-sm"> Edit </a> |
                <a href="?tampil=buku_hapus&id=
			<?php echo $data['id_buku']; ?>" class="btn btn-danger btn-sm"> Hapus </a>


            </td>
        </tr>

        <?php
		$no++;

}
?>
    </table>