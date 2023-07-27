<?php
    $nama_dokumen = 'Laporan Data Buku';
    define('_MPDF_PATH','MPDF57/');
    include(_MPDF_PATH . "mpdf.php");
    ob_start();
?>

<center>
    <table style="border-bottom: 2pt solid black;">
        <tr>
            <td colspan="1"><img src="../gambar/logo_smandas.png" width="85" height="100"></td>
            <td align="center">
                <font size="3">JUNIOR WEB DEVELOPMENT - DIGITAL TALENT</font><br>
                <font size="6">LAPORAN DATA Buku</font><br>
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
    $sql = mysqli_query($conn, "SELECT * FROM buku WHERE (((tgl_input) BETWEEN '".$_POST['dari']."' AND '".$_POST['sampai']."'))order by id_buku asc");
        echo "
        <table border='1' id='table'>
            <thead>
                <tr>
                    <th width='3%' align='center'>No</th>
                    <th width='5%' align='center'>Judul</th>
                    <th width='30%' align='center'>Pengarang</th>
                    <th width='5%' align='center'>Penerbit</th>
                    <th width='5%' align='center'>Tahun Terbit</th>
                    <th width='5%' align='center'>Jumlah Buku</th>
                    <th width='10%' align='center'>Tanggal Input</th>
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
                        <td align='center'>$data[judul]</td>
                        <td align='center'>$data[pengarang]</td>
                        <td align='center'>$data[penerbit]</td>
                        <td align='center'>$data[thn_terbit]</td>
                        <td align='center'>$data[jumlah_buku]</td>
                        <td align='center'>$data[tgl_input]</td>
                    </tr>
                    ";
                $no++; }
                ?>
    </tbody>
    </table><br>
    <table>
        <tr>
            <?php include '../lib/koneksi.php';
        $query = mysqli_query($conn, 'SELECT * FROM validasi order by id_validasi asc');
        while ($validasi = mysqli_fetch_array($query)) {
        echo "
            <td width='360'></td>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;
                <a>$validasi[jabatan],</a><br><br><br><br>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;
                <a><u>$validasi[nama]</u></a><br>
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