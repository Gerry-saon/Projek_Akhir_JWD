<?php

$nama_gambar = $_FILES['gambar']['name'];
$lokasi_gambar = $_FILES['gambar']['tmp_name'];
$tipe_gambar = $_FILES['gambar']['type'];

if($lokasi_gambar==""){
mysqli_query($conn, "UPDATE anggota SET 
nis = '$_POST[nis]',
nama = '$_POST[nama]',
tmpt_lahir = '$_POST[tmpt_lahir]',
tgl_lahir = '$_POST[tgl_lahir]',
jk = '$_POST[jk]',
kelas = '$_POST[kelas]',
thn_masuk = '$_POST[thn_masuk]'

where nis='$_POST[nis]'") or die($connmysqli_error());

}else{
	$data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM 
		anggota where nis='$_POST[nis]'"));
if($data['gambar'] !="") unlink("gambar/foto/$data[gambar]");
move_uploaded_file($lokasi_gambar, "gambar/foto/$nama_gambar");
mysqli_query($conn, "UPDATE anggota SET 
	nis = '$_POST[nis]',
nama = '$_POST[nama]',
tmpt_lahir = '$_POST[tmpt_lahir]',
tgl_lahir = '$_POST[tgl_lahir]',
jk = '$_POST[jk]',
kelas = '$_POST[kelas]',
thn_masuk = '$_POST[thn_masuk]',
gambar='$nama_gambar'

where nis='$_POST[nis]'") or die($connmysqli_error());
}
echo "Data telah diedit";
echo "<meta http-equiv='refresh'
content='1; url=?tampil=anggota'>";
?>