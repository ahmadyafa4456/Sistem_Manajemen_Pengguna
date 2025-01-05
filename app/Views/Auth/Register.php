<html>

<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>" />
</head>

<body>
    <div class="cf">
        <div class="border card-form shadow-lg">
            <div class="d-flex justify-content-center p-1">
                <p class="fs-5 fw-bold">Register</p>
            </div>
            <form action="<?= base_url('Auth/Register') ?>" method="post">
                <div class="text-danger"></div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" name="Email">
                    <span class="text-danger"><?= isset($validations) ? $validations->getError('Email') : '' ?></span>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input class="form-control" name="Nama">
                    <span class="text-danger"><?= isset($validations) ? $validations->getError('Nama') : '' ?></span>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input class="form-control" type="password" name="Password">
                    <span class="text-danger"><?= isset($validations) ? $validations->getError('Password') : '' ?></span>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-dark px-4 w100">Register</button>
                    <a href="<?= site_url('/Auth/Login') ?>" class="d-flex justify-content-center pt-2">Login</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>