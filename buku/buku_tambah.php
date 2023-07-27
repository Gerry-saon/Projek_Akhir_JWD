<?php
$tanggal = date('Y-m-d');
	$jam = date('H:i:s');
	$waktu = $tanggal.' '.$jam;
?>
<h2 class="sub-header">Tambah Buku</h2>

<form name="tambah" method="post" 
action="?tampil=buku_tambahproses" enctype="multipart/form-data" class="form-horizontal">
 <input type="hidden" name="tgl_input" value="<?php echo $waktu; ?>">
<div class="form-group">
<label class="label-control col-md-2">Nomor Induk</label>
<div class="col-md-2">
<input type="text" class="form-control" name="no_induk" size="50">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Judul Buku</label>

<div class="col-md-4">
<input type="text" class="form-control" name="judul" size="50">
</div>
</div>


<div class="form-group">
<label class="label-control col-md-2">Pengarang</label>
<div class="col-md-4">
<input type="text" class="form-control" name="pengarang" size="50">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Penerbit</label>
<div class="col-md-4">
<input type="text" class="form-control" name="penerbit" size="50">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Tahun Terbit</label>
<div class="col-md-4">
	<select name="thn_terbit" class="form-control">
                    		<option value="">Pilih Tahun</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
						</select>
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Asal Buku</label>
<div class="col-md-4">
<input type="text" class="form-control" name="asal_buku" size="50">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Jumlah Buku</label>
<div class="col-md-4">
<input type="text" class="form-control" name="jumlah_buku" size="50">
</div>
</div>

<div class="form-group">
<label class="lebel-control col-md-2"></label>
<div class="col-md-4">
<input type="submit" name="tambah" value="Tambah" class="btn btn-primary">
</div>
</div>
</form>