<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('obat/tambah'); ?>" class="btn btn-success btn-sm float-right">
                    Tambah Data
                </a>
            </div>
            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama obat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($obat as $o) {
                                ; ?>
                                <tr>
                                    <td class="text-center">
                                        <?= $no; ?>.
                                    </td>
                                    <td>
                                        <?= $o['nama_obat']; ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('obat/edit/') . $o['id_obat']; ?>"
                                            class="btn btn-warning btn-sm">Edit</a>

                                        <a href="<?= base_url('obat/hapus/') . $o['id_obat']; ?>"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin akan Menghapus data?')">Hapus</a>
                                    </td>
                                </tr>
                                <?php $no++;
                            }
                            ; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>