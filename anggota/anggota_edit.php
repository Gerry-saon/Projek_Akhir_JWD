<?php
	if(!defined("INDEX")) die("---");

	$tampil = mysqli_query($conn, "SELECT * FROM anggota WHERE nis='$_GET[id]'") or die($connmysql_error());
	$data  	= mysqli_fetch_array($tampil);
?>

<h2 class="sub-header">Edit Buku</h2>

<form name="edit" method="post" value="<?php echo $data['nis']; ?>" action="?tampil=anggota_editproses"
    enctype="multipart/form-data" class="form-horizontal">
    <div class="form-group">
        <label class="label-control col-md-2">NIS</label>

        <div class="col-md-4">
            <input type="text" class="form-control" name="nis" value="<?php echo $data['nis']; ?>" size="50">
        </div>
    </div>


    <div class="form-group">
        <label class="label-control col-md-2">Nama</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" size="50">
        </div>
    </div>

    <div class="form-group">
        <label class="label-control col-md-2">Tempat Lahir</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="tmpt_lahir" value="<?php echo $data['tmpt_lahir']; ?>"
                size="50">
        </div>
    </div>

    <div class="form-group">
        <label class="label-control col-md-2">Tanggal Input</label>
        <div class="col-md-4">
            <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>"
                size="50">
        </div>
    </div>

    <div class="form-group">
        <label class="label-control col-md-2">Jenis Kelamin</label>
        <div class="col-md-4">
            <div class="radio">
                <label>
                    <?php if ($data['jk'] === "L") : ?>
                    <input type="radio" name="jk" value="L" checked />Laki-Laki</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="jk" value="P" />Perempuan</label>
                <?php else : ?>
                <input type="radio" name="jk" value="L" />Laki-Laki</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="jk" value="P" checked />Perempuan</label>
                <?php endif; ?>

            </div>
        </div>
    </div>


    <div class="form-group">
        <label class="label-control col-md-2">Kelas</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="kelas" value="<?php echo $data['kelas']; ?>" size="50">
        </div>
    </div>

    <div class="form-group">
        <label class="label-control col-md-2">Tahun Masuk</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="thn_masuk" value="<?php echo $data['thn_masuk']; ?>"
                size="50">
        </div>
    </div>

    <div class="form-group">
        <label class="label-control col-md-2">Foto</label>
        <div class="col-md-4">
            <img src="gambar/foto/
<?php echo $data['gambar']; ?>" width="100">
            <br> <input type="file" class="form-control" name="gambar">
        </div>
    </div>

    <div class="form-group">
        <label class="lebel-control col-md-2"></label>
        <div class="col-md-4">
            <input type="submit" name="edit" value="Edit" class="btn btn-primary">
        </div>
    </div>
</form>