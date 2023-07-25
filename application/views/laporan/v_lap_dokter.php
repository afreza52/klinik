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
        <h4 class="text-center">LAPORAN DATA DOKTER</h4>
        <table class="table table-bordered table-sm">
            <tr>
                <th width="80px">No.</th>
                <th>Nama Dokter</th>
            </tr>
            <?php $no = 1;
            foreach ($dokter as $d) { ?>
                <tr>
                    <td class="text-center">
                        <?= $no++; ?>
                    </td>
                    <th>
                        <?= $d['nama_dokter']; ?>
                    </th>
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