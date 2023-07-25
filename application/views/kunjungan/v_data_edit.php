<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('kunjungan'); ?>" class="btn btn-warning btn-sm float-right">
                    Kembali
                </a>
            </div>
            <div class="card-body">
                <form action="<?= base_url('kunjungan/update'); ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $k['id_berobat']; ?>">
                        <label for="">Tanggal Berobat</label>
                        <input type="date" name="tgl_berobat" id="tgl_berobat" class="form-control"
                            value="<?= $k['tgl_berobat']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Pasien</label>
                        <select name="pasien" class="form-control" id="pasien" required>
                            <?php
                            foreach ($pasien as $p): {
                                    if ($p['id_pasien'] == $k['id_pasien']) {
                                        $aktif = "selected";
                                    } else {
                                        $aktif = "";
                                    }
                                } ?>
                                <option value="<?= $p['id_pasien']; ?>" <?= $aktif; ?>><?= $p['nama_pasien']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Dokter</label>
                        <select name="dokter" class="form-control" id="" required>
                            <?php
                            foreach ($dokter as $d): {
                                    if ($d['id_dokter'] == $k['id_dokter']) {
                                        $aktif = "selected";
                                    } else {
                                        $aktif = "";
                                    }
                                } ?>
                                <option value="<?= $d['id_dokter']; ?>" <?= $aktif; ?>><?= $d['nama_dokter']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>