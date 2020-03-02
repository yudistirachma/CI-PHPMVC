<div class="container">

    <div class="row">
        <div class="col-md-6 mt-3">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <!-- <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?> -->
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="POST">
                <div class="input-group">
                    <input autocomplete="off" name="keyword" type="text" class="form-control" placeholder="cari data mahasiswa..." aria-label="cari data mahasiswa..." aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <?php if (empty($mahasiswa)) : ?>
                <div class="alert alert-danger" role="alert">
                    data mahasiswa tidak di temukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item"><?= $mhs['nama']; ?>
                        <a href="<?= base_url() ?>mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger float-right tombol-hapus">Hapus</a>
                        <a href="<?= base_url() ?>mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-success float-right">detail</a>
                        <a href="<?= base_url() ?>mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge badge-warning float-right">ubah</a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>

</div>