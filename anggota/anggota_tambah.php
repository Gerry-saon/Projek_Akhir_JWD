<h2 class="sub-header">Tambah Anggota</h2>

<form name="tambah" method="post" 
action="?tampil=anggota_tambahproses" enctype="multipart/form-data" class="form-horizontal">
<div class="form-group">
<label class="label-control col-md-2">NIS</label>

<div class="col-md-4">
<input type="text" class="form-control" name="nis" size="50">
</div>
</div>


<div class="form-group">
<label class="label-control col-md-2">Nama</label>
<div class="col-md-4">
<input type="text" class="form-control" name="nama" size="50">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Tempat Lahir</label>
<div class="col-md-4">
<input type="text" class="form-control" name="tmpt_lahir" size="50">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Tanggal Lahir</label>
<div class="col-md-4">
<input type="date" class="form-control" name="tgl_lahir" size="50">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Jenis Kelamin</label>
<div class="col-md-4">
<div class="radio">
<label>
   <input type="radio" name="jk" id="jk" value="L">
  		Laki-Laki  
            </div>              
   <input type="radio" name="jk" id="jk" value="P">
        Perempuan
</label>
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Kelas</label>
<div class="col-md-4">
<input type="text" class="form-control" name="kelas" size="50">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Tahun Masuk</label>
<div class="col-md-4">
<input type="text" class="form-control" name="thn_masuk" size="50">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Foto</label>
<div class="col-md-4">
<input type="file" class="form-control" name="gambar">
</div>
</div>

<div class="form-group">
<label class="lebel-control col-md-2"></label>
<div class="col-md-4">
<input type="submit" name="tambah" value="Tambah" class="btn btn-primary">
</div>
</div>
</form>