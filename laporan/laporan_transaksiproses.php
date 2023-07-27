<?php
    $nama_dokumen = 'Laporan Data Buku';
    define('_MPDF_PATH','MPDF57/');
    include(_MPDF_PATH . "mpdf.php");
    $mpdf = new mPDF('utf-8', 'A4');
    ob_start();
?>

<center>
    <table style="border-bottom: 2pt solid black;">
        <tr>
            <td colspan="1"><img src="../gambar/logo_smandas.png" width="85" height="100"></td>
            <td align="center">
                <font size="3">JUNIOR WEB DEVELOPMENT - DIGITAL TALENT</font><br>
                <font size="6">LAPORAN DATA Transaksi</font><br>
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
    $sql = mysql_query("SELECT * FROM transaksi order by status");
        echo "
        <table border='1' id='table'>
            <thead>
                <tr>
                    <th width='3%' align='center'>No</th>
                    <th width='5%' align='center'>Judul Buku</th>
                    <th width='30%' align='center'>Pemimjam</th>
                    <th width='5%' align='center'>Tanggal Pimjam</th>
                    <th width='5%' align='center'>Tanggal Kembali</th>
                    <th width='5%' align='center'>Status</th>
                </tr>
            </thead>
        ";
    ?>
    <tbody>
        <?php
                $no = 1;
                while ($data = mysql_fetch_array($sql)) {
                    echo "
                    <tr>
                        <td align='center'>$no</td>
                        <td align='center'>$data[judul]</td>
                        <td align='center'>$data[nama]</td>
                        <td align='center'>$data[tgl_pinjam]</td>
                        <td align='center'>$data[tgl_kembali]</td>
                        <td align='center'>$data[status]</td>
                    </tr>
                    ";
                $no++; }
                ?>
    </tbody>
    </table><br>
    <table>
        <tr>
            <?php include '../lib/koneksi.php';
        $sql = mysql_query("SELECT * FROM validasi order by id_validasi asc");
        while ($validasi = mysql_fetch_array($sql)) {
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