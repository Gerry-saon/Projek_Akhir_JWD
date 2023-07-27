<?php
	if(!defined("INDEX")) die("---");

	$tanggal = date('Y-m-d');
	$jam = date('H:i:s');
	$waktu = $tanggal.' '.$jam;

	$tampil = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku='$_GET[id]'") or die($connmysql_error());
	$data  	= mysqli_fetch_array($tampil);
?>

<?php
$thn_terbit = $data['thn_terbit'];
?>

<h2 class="sub-header">Edit Buku</h2>

<form name="edit" method="post" action="?tampil=buku_editproses" enctype="multipart/form-data" class="form-horizontal">
    <input type="hidden" name="id" value="<?php echo $data['id_buku']; ?>">
    <input type="hidden" name="tgl_input" value="<?php echo $waktu; ?>">

    <div class="form-group">
        <label class="label-control col-md-2">Nomor Induk</label>

        <div class="col-md-4">
            <input type="text" class="form-control" name="no_induk" value="<?php echo $data['no_induk']; ?>" size="50">
        </div>
    </div>



    <div class="form-group">
        <label class="label-control col-md-2">Judul Buku</label>

        <div class="col-md-4">
            <input type="text" class="form-control" name="judul" value="<?php echo $data['judul']; ?>" size="50">
        </div>
    </div>


    <div class="form-group">
        <label class="label-control col-md-2">Pengarang</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="pengarang" value="<?php echo $data['pengarang']; ?>"
                size="50">
        </div>
    </div>

    <div class="form-group">
        <label class="label-control col-md-2">Penerbit</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="penerbit" value="<?php echo $data['penerbit']; ?>" size="50">
        </div>
    </div>

    <div class="form-group">
        <label class="label-control col-md-2">Tahun Terbit</label>
        <div class="col-md-4">
            <select name="thn_terbit" class="form-control">
                <option value="">Pilih Tahun</option>
                <option value="2015" <?php if( $thn_terbit=='2015'){echo "selected"; } ?>>2015</option>
                <option value="2014" <?php if( $thn_terbit=='2014'){echo "selected"; } ?>>2014</option>
                <option value="2013" <?php if( $thn_terbit=='2013'){echo "selected"; } ?>>2013</option>
                <option value="2012" <?php if( $thn_terbit=='2012'){echo "selected"; } ?>>2012</option>
                <option value="2011" <?php if( $thn_terbit=='2011'){echo "selected"; } ?>>2011</option>
                <option value="2010" <?php if( $thn_terbit=='2010'){echo "selected"; } ?>>2010</option>
                <option value="2009" <?php if( $thn_terbit=='2009'){echo "selected"; } ?>>2009</option>
                <option value="2008" <?php if( $thn_terbit=='2008'){echo "selected"; } ?>>2008</option>
                <option value="2007" <?php if( $thn_terbit=='2007'){echo "selected"; } ?>>2007</option>
                <option value="2006" <?php if( $thn_terbit=='2006'){echo "selected"; } ?>>2006</option>
                <option value="2005" <?php if( $thn_terbit=='2005'){echo "selected"; } ?>>2005</option>
                <option value="2004" <?php if( $thn_terbit=='2004'){echo "selected"; } ?>>2004</option>
                <option value="2003" <?php if( $thn_terbit=='2003'){echo "selected"; } ?>>2003</option>
                <option value="2002" <?php if( $thn_terbit=='2002'){echo "selected"; } ?>>2002</option>
                <option value="2001" <?php if( $thn_terbit=='2001'){echo "selected"; } ?>>2001</option>
                <option value="2000" <?php if( $thn_terbit=='2000'){echo "selected"; } ?>>2000</option>
                <option value="2010" <?php if( $thn_terbit=='1999'){echo "selected"; } ?>>1999</option>
                <option value="2009" <?php if( $thn_terbit=='1998'){echo "selected"; } ?>>1998</option>
                <option value="2008" <?php if( $thn_terbit=='1997'){echo "selected"; } ?>>1997</option>
                <option value="2007" <?php if( $thn_terbit=='1996'){echo "selected"; } ?>>1996</option>
                <option value="2006" <?php if( $thn_terbit=='1995'){echo "selected"; } ?>>1995</option>
                <option value="2005" <?php if( $thn_terbit=='1994'){echo "selected"; } ?>>1994</option>
                <option value="2004" <?php if( $thn_terbit=='1993'){echo "selected"; } ?>>1993</option>
                <option value="2003" <?php if( $thn_terbit=='1992'){echo "selected"; } ?>>1992</option>
                <option value="2002" <?php if( $thn_terbit=='1991'){echo "selected"; } ?>>1991</option>
                <option value="2001" <?php if( $thn_terbit=='1990'){echo "selected"; } ?>>1990</option>
                <option value="2000" <?php if( $thn_terbit=='2015'){echo "selected"; } ?>>2000</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="label-control col-md-2">Asal Buku</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="asal_buku" value="<?php echo $data['asal_buku']; ?>"
                size="50">
        </div>
    </div>

    <div class="form-group">
        <label class="label-control col-md-2">Jumlah Buku</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="jumlah_buku" value="<?php echo $data['jumlah_buku']; ?>"
                size="50">
        </div>
    </div>


    <div class="form-group">
        <label class="lebel-control col-md-2"></label>
        <div class="col-md-4">
            <input type="submit" name="edit" value="Edit" class="btn btn-primary">
        </div>
    </div>
</form>