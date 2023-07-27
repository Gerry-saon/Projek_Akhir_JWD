<?php
$pinjam			= date("d-m-Y");
$tuju_hari		= mktime(0,0,0,date("n"),date("j")+7,date("Y"));
$kembali		= date("d-m-Y", $tuju_hari);
?>
<h2 class="sub-header">Input Transaksi</h2>

<form name="tambah" method="post" action="?tampil=transaksi_proses" enctype="multipart/form-data"
    class="form-horizontal">
    <div class="form-group">
        <label class="label-control col-md-2">Judul Buku</label>
        <div class="col-md-4">
            <tr>
                <td><select name="buku" class="form-control">
                        <option>Pilih Judul Buku</option>
                        <?php
							$query = mysqli_query($conn, "SELECT * FROM buku ORDER by id_buku");
							$sql = mysqli_num_rows($query);
							while ($buku=mysqli_fetch_array($query)) {
								echo "<option value='$buku[0].$buku[2]'>$buku[2]</option>";
							}
							
						?>
                    </select>
                </td>
            </tr>
        </div>
    </div>


    <div class="form-group">
        <label class="label-control col-md-2">Nama Peminjam</label>
        <div class="col-md-4">
            <td><select name="peminjam" class="form-control">
                    <option>Pilih Anggota</option>
                    <?php
							$query = mysqli_query($conn, "SELECT * FROM anggota ORDER by nis");
							$sql = mysqli_num_rows($query);
							while ($nama=mysqli_fetch_array($query)) {
								echo "<option value='$nama[0].$nama[1]'>$nama[0]. $nama[1]</option>";
							}
							
						?>
                </select>
            </td>
            </tr>
        </div>
    </div>

    <div class="form-group">
        <label class="label-control col-md-2">Tanggal Pinjam</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="tgl_pinjam" value="<?php echo $pinjam; ?>" size="50">
        </div>
    </div>

    <div class="form-group">
        <label class="label-control col-md-2">Tanggal Kembali</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="tgl_kembali" value="<?php echo $kembali; ?>" size="50">
        </div>
    </div>

    <div class="form-group">
        <label class="label-control col-md-2">Keterangan</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="ket" size="50">
        </div>
    </div>

    <div class="form-group">
        <label class="lebel-control col-md-2"></label>
        <div class="col-md-4">
            <input type="submit" name="tambah" value="Tambah" class="btn btn-primary">
        </div>
    </div>
</form>