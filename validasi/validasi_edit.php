<?php

$sql = mysqli_query($conn, "SELECT * FROM validasi WHERE id_validasi = '$_GET[id]'")
or die ($connmysqli_error());
$data = mysqli_fetch_array($sql);
?>

<h2 class="sub-header">Edit Undangan Masuk</h2>
<form name="edit" method="post" action="?tampil=validasi_editproses" enctype="multipart/form-data"
    class="form-horizontal">
    <input type="hidden" name="id" value="<?php echo $data['id_validasi']; ?>">

    <div class="form-group">
        <label class="label-control col-md-2">Nama</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="nama" size="50" value="<?php echo $data['nama']; ?>">
        </div>
    </div>



    <div class="form-group">
        <label class="label-control col-md-2">Jabatan</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="jabatan" size="50" value="<?php echo $data['jabatan']; ?>">
        </div>
    </div>


    <div class="form-group">
        <label class="label-control col-md-2">Nip</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="nip" size="50" value="<?php echo $data['nip']; ?>">
        </div>
    </div>


    <div class="form-group">
        <label class="label-control col-md-2"></label>
        <div class="col-md-4">
            <input type="submit" name="edit" value="Edit" class="btn btn-primary">
            <button type="button" namae="tombol" value="tampil" class="btn ink-reaction btn-primary"
                onclick="self.history.back()">Batal</button></p>

        </div>
    </div>
</form>