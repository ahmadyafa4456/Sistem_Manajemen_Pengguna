<?= $this->extend('Layout/Layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('/user/update') ?>" method="post">
                        <div class="row">
                            <div class="col-12" id="input-group">
                                <input type="text" value="<?= $Id ?>" name="Id" hidden>
                                <div class="form-group p-2">
                                    <div class="d-flex justify-content-between">
                                        <h3>Nama</h3>
                                    </div>
                                    <input type="text"
                                        class="form-control"
                                        value="<?= $Nama ?>"
                                        name="Nama"
                                        placeholder="" />
                                    <span class="text-danger"><?= isset($validations) ? $validations->getError('Nama') : '' ?></span>
                                </div>
                                <div class="form-group p-2">
                                    <div class="d-flex justify-content-between">
                                        <h3>Email</h3>
                                    </div>
                                    <input type="text"
                                        class="form-control"
                                        value="<?= $Email ?>"
                                        name="Email"
                                        placeholder="" />
                                    <span class="text-danger"><?= isset($validations) ? $validations->getError('Email') : '' ?></span>
                                </div>
                                <div class="form-group p-2">
                                    <div class="d-flex justify-content-between">
                                        <h3>Role</h3>
                                    </div>
                                    <input type="text"
                                        class="form-control"
                                        value="<?= $Role ?>"
                                        name="Role"
                                        placeholder="" />
                                    <span class="text-danger"><?= isset($validations) ? $validations->getError('Email') : '' ?></span>
                                </div>
                                <div class="form-group p-2">
                                    <div class="d-flex justify-content-between">
                                        <h3>Password</h3>
                                    </div>
                                    <input type="password"
                                        class="form-control"
                                        name="Password"
                                        placeholder="" />
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-12 pt-2">
                                <div class="d-flex flex-row-reverse">
                                    <a href="<?= site_url("/") ?>"
                                        class="btn btn-primary btn-round ms-1">
                                        Kembali
                                    </a>
                                    <button class="btn btn-primary btn-round ms-1"
                                        type="submit">
                                        Edit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>