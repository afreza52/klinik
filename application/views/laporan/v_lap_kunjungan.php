<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title; ?>
    </title>
    <link rel="stylesheet" href="<?= base_url('asset/css/bootstrap.min.css') ?>">

    <style>
        .table-bordered th,
        .table-bordered thead th,
        .table-bordered td {
            border: 1px solid #000;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="mb-0">KLINIK CODEIGNITER</h3>
        <small>Jl. Jogja Ring Road Sel. 61-62, Menayu Lor, Tirtonirmolo, Kec. Kasihan, Kabupaten Bantul, Daerah Istimewa
            Yogyakarta 55181</small>
        <hr>
        <h4 class="text-center">LAPORAN DATA PASIEN</h4>
        <table class="table table-bordered table-sm">
            <tr>
                <th width="80px">No.</th>
                <th>Tgl. Kunjungan</th>
                <th>Nama Pasien</th>
                <th>L/P</th>
                <th>Umur</th>
                <th>Keluhan</th>
                <th>Diagnosa</th>
                <th>Penatalaksanaan</th>
            </tr>
            <?php $no = 1;
            foreach ($kunjungan as $p) { ?>
                <tr>
                    <td class="text-center">
                        <?= $no++; ?>
                    </td>
                    <td>
                        <?= $p['tgl_berobat']; ?>
                    </td>
                    <td>
                        <?= $p['nama_pasien']; ?>
                    </td>
                    <td>
                        <?= $p['jenis_kelamin']; ?>
                    </td>
                    <td>
                        <?= $p['umur']; ?>
                    </td>
                    <td>
                        <?= $p['keluhan_pasien']; ?>
                    </td>
                    <td>
                        <?= $p['hasil_diagnosa']; ?>
                    </td>
                    <td>
                        <?= $p['penatalaksanaan']; ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <br>
        <table width="100%">
            <tr>
                <td></td>
                <td width="300px">
                    <p>
                        Yogyakarta bantul,
                        <?= date('d-m-Y'); ?>
                        <br>
                        Administrator,
                        <br><br><br><br>
                        <b>__________________________________</b>
                    </p>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>