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
                <form action="<?= base_url('kunjungan/insert'); ?>" method="post">
                    <div class="form-group">
                        <label for="">Tanggal Berobat</label>
                        <input type="date" name="tgl_berobat" id="tgl_berobat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Pasien</label>
                        <select name="pasien" class="form-control" id="pasien" required>
                            <option value="">--Pilih Pasien--</option>
                            <?php foreach ($pasien as $p): ?>
                                <option value="<?= $p['id_pasien']; ?>"><?= $p['nama_pasien']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Dokter</label>
                        <select name="dokter" class="form-control" id="" required>
                            <option value="">--Pilij Dokter--</option>
                            <?php foreach ($dokter as $d): ?>
                                <option value="<?= $d['id_dokter']; ?>"><?= $d['nama_dokter']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>