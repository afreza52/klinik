<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('pasien'); ?>" class="btn btn-warning btn-sm float-right">
                    Kembali
                </a>
            </div>
            <div class="card-body">
                <form action="<?= base_url('pasien/update'); ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_pasien" value="<?= $p['id_pasien']; ?>">
                        <label for="">Nama Pasien</label>
                        <input type="text" name="nama_pasien" id="nama_pasien" class="form-control"
                            value="<?= $p['nama_pasien']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
                            <option value="<?= $p['jenis_kelamin']; ?>"><?= $p['jenis_kelamin']; ?></option>
                            <option value="L">L</option>
                            <option value="P">P</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Umur</label>
                        <input type="number" name="umur" id="umur" class="form-control" value="<?= $p['umur']; ?>"
                            required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>