<?= $this->extend('Layout/Layout'); ?>

<?= $this->section('content'); ?>

<?php if (session('user')['Role'] === 'admin') { ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-end">
                            <a href="<?= site_url("/user/tambah") ?>" class="btn btn-primary btn-round ms-auto">
                                <i class="fa fa-plus"></i>
                                Tambah
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($user as $key => $s) : ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $s['Nama'] ?></td>
                                            <td><?= $s['Email'] ?></td>
                                            <td><?= $s['Role'] ?></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a
                                                        href="<?= site_url("/user/update/{$s['Id']}") ?>"
                                                        type="button"
                                                        data-bs-toggle="tooltip"
                                                        title=""
                                                        class="btn btn-link btn-primary btn-lg"
                                                        data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a
                                                        href="<?= site_url("/user/delete/{$s['Id']}") ?>"
                                                        type="button"
                                                        data-bs-toggle="tooltip"
                                                        title=""
                                                        class="btn btn-link btn-danger"
                                                        data-original-title="Remove">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $no++ ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?= $this->endSection(); ?>