<<html>

<head>
    <title>Tampil Data Pembelian</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Pembelian
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Pembeli</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th>No HP</th>
                <th>:</th>
                <td>
                    <?= $nohp; ?>
                </td>
            </tr>
            <tr>
                <th>Merk</th>
                <th>:</th>
                <td>
                    <?= $merk; ?>
                </td>
            </tr>
            <tr>
                <th>Ukuran</th>
                <th>:</th>
                <td>
                    <?= $ukuran; ?>
                </td>
            </tr>
            <tr>
                <th>Harga</th>
                <th>:</th>
                <td>
                    <?= $harga; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('tokosepatu');
                    ?>">kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>