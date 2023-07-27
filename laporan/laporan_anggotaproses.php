<?php
    $nama_dokumen = 'Laporan Data Anggota';
    define('_MPDF_PATH','DOMPDF/');
    include(_MPDF_PATH . "autoload_inc.php");
   
    ob_start();
?>

<center>
    <table style="border-bottom: 2pt solid black;">
        <tr>
            <td colspan="1"><img src="../gambar/logo_smandas.png" width="85" height="100"></td>
            <td align="center">
                <font size="3">JUNIOR WEB DEVELOPMENT - DIGITAL TALENT</font><br>
                <font size="6">LAPORAN DATA ANGGOTA</font><br>
                <font size="3">Jl. Jendral Sudirman No.45
                    Jakarta Timur</font><br>
                <font size="3"></font><br>
            </td>
        </tr>
    </table><br>
    <table>
        <tr>

            <td><a> <?php echo date('l, d-m-Y'); echo "<br/>"; ?></a></td>
        </tr>
    </table>

    <?php include '../lib/koneksi.php';
    $sql = mysqli_query($conn, "SELECT * FROM anggota");
        echo "
        <table border='1' id='table'>
            <thead>
                <tr>
                    <th width='3%' align='center'>No</th>
                    <th width='5%' align='center'>Nis</th>
                    <th width='30%' align='center'>Nama</th>
                    <th width='5%' align='center'>Tempat Lahir</th>
                    <th width='5%' align='center'>Tanggal Lahir</th>
                    <th width='10%' align='center'>Jenis Kelamin</th>
                    <th width='5%' align='center'>Kelas</th>
                    <th width='5%' align='center'>Tahun Masuk</th>
                </tr>
            </thead>
        ";
    ?>
    <tbody>
        <?php
                $no = 1;
                while ($data = mysqli_fetch_array($sql)) {
                    echo "
                    <tr>
                        <td align='center'>$no</td>
                        <td align='center'>$data[nis]</td>
                        <td align='center'>$data[nama]</td>
                        <td align='center'>$data[tmpt_lahir]</td>
                        <td align='center'>$data[tgl_lahir]</td>
                        <td align='center'>$data[jk]</td>
                        <td align='center'>$data[kelas]</td>
                        <td align='center'>$data[thn_masuk]</td>
                    </tr>
                    ";
                $no++; }
                ?>
    </tbody>
    </table><br>
    <table>
        <tr>
            <?php include '../lib/koneksi.php';
        $sql = mysqli_query($conn, "SELECT * FROM validasi order by id_validasi asc");
        while ($validasi = mysqli_fetch_array($sql)) {
        echo "
            <td width='360'></td>
            <td>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;
                <a>$validasi[jabatan],</a><br><br><br><br>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;
                <a>$validasi[nama]</a><br>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;
                <a>$validasi[nip]</a>
            </td>
            ";
        }
    ?>
        </tr>
    </table>
</center>
<style>
th {
    background: #CCCCCC;
}
</style>

<?php
    $html = ob_get_contents();
    ob_end_clean();
    $mpdf -> WriteHTML(utf8_encode($html));
    $mpdf -> Output($nama_dokumen.".pdf" ,'I');
    exit;
?>