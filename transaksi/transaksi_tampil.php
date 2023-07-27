<?php
function terlambat($tgl_dateline, $tgl_kembali) {

$tgl_dateline_pcs = explode ("-", $tgl_dateline);
$tgl_dateline_pcs = $tgl_dateline_pcs[2]."-".$tgl_dateline_pcs[1]."-".$tgl_dateline_pcs[0];

$tgl_kembali_pcs = explode ("-", $tgl_kembali);
$tgl_kembali_pcs = $tgl_kembali_pcs[2]."-".$tgl_kembali_pcs[1]."-".$tgl_kembali_pcs[0];

$selisih = strtotime ($tgl_kembali_pcs) - strtotime ($tgl_dateline_pcs);

$selisih = $selisih / 86400;

if ($selisih>=1) {
	$hasil_tgl = floor($selisih);
}
else {
	$hasil_tgl = 0;
}
return $hasil_tgl;
}
?>
<h2 class="sub-header">Data Transaksi</h2>

<a href="?tampil=transaksi_input" class="btn btn-primary"> Input Transaksi </a><br><br>


<table width="100%" cellspacing="0" class="data" border="1">
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Peminjam</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Terlambat</th>
            <th>Kembali</th>
            <th>Perpanjang</th>
        </tr>

        <?php
$no=1;
$sql = (mysqli_query($conn, "SELECT * FROM transaksi where status='Pinjam' order by id_t"));

$total = mysqli_num_rows($sql);
while($data=mysqli_fetch_array($sql)){
	?>


        <tr>
            <td> <?php echo $no; ?> </td>
            <td> <?php echo $data['judul']; ?> </td>
            <td> <?php echo $data['nama']; ?> </td>
            <td> <?php echo $data['tgl_pinjam']; ?> </td>
            <td> <?php echo $data['tgl_kembali']; ?> </td>
            <td>
                <?php
					$tgl_dateline=$data['tgl_kembali'];
					$tgl_kembali=date('d-m-Y');
					$lambat=terlambat($tgl_dateline, $tgl_kembali);
					$denda=$lambat*1000;
					if ($lambat>0) {
						echo "<font color='red'>$lambat hari<br>(Rp $denda)</font>";
					}
					else {
						echo $lambat." hari";
					}
				?>
            <td><a href="?tampil=transaksi_proseskembali&id=
			<?php echo $data['id_t']; ?>&judul=<?php echo $data['judul']; ?>"> Kembali </a></td>
            <td><a href="?tampil=transaksi_prosesperpanjang&id=
			<?php echo $data['id_t']; ?>&judul=
			<?php echo $data['judul'];?>&tgl_kembali=
			<?php echo $data['tgl_kembali']; ?>&lambat=
			<?php echo $lambat; ?>"> Perpanjang </a></td>


            </td>
        </tr>

        <?php
		$no++;

}
?>
    </table>