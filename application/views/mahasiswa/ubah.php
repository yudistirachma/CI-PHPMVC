<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form ubah Data Mahsiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" id="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" value="<?= $mahasiswa['nama']; ?>" class="form-control" name="nama" id="nama" autocomplete="off"><small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" value="<?= $mahasiswa['nim']; ?>" class="form-control" name="nim" id="nim" autocomplete="off"><small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <?php foreach ($jurusan as $j) : ?>
                                    <?php if ($j == $mahasiswa['jurusan']) : ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('jurusan'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">ubah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>