<div class="container">
    <h3 class="mt-3">List Of Peopels</h3>

    <div class="row">
        <div class="col-md-6">
            <form action="<?= base_url() ?>peopels" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Keyword..." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit"></input>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <h5>Result : <?= $total_rows; ?></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($peopels)) : ?>
                        <tr>
                            <td colspan="4">
                                <div class="alert alert-danger" role="alert">
                                    Maaf Data tidak Ada !
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php foreach ($peopels as $peopel) : ?>
                        <tr>
                            <td><?= ++$start; ?></td>
                            <td><?= $peopel['name']; ?></td>
                            <td><?= $peopel['email']; ?></td>
                            <td>
                                <a href="" class="badge badge-warning">ubah</a>
                                <a href="" class="badge badge-danger">hapus</a>
                                <a href="" class="badge badge-success">detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>

        </div>
    </div>
</div>