<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?= $header; ?></title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <!-- <link rel="icon" href="" type="image/x-icon" /> -->
    <!-- Fonts and icons -->
    <script src="<?= base_url('assets/js/webfont/webfont.min.js') ?>"></script>
    <!--   Core JS Files   -->
    <script src="<?= base_url('assets/js/core/jquery-3.7.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/core/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery-scrollbar/jquery.scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/chart.js/chart.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.sparkline/jquery.sparkline.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/chart-circle/circles.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/datatables/datatables.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-notify/bootstrap-notify.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jsvectormap/jsvectormap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jsvectormap/world.js') ?>"></script>
    <script src="<?= base_url('assets/js/sweetalert/sweetalert.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/kaiadmin.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js">
    </script>

    <!-- CSS Files -->
    <script src="<?= base_url('assets/css/fonts.min.css') ?>"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/kaiadmin.min.css') ?>" />
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="<?= base_url('/') ?>">
                        <h2>Dashboard</h2>
                    </a>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <li class="nav-item">
                            <a href="<?= site_url("/") ?>">
                                <i class="fas fa-folder"></i>
                                <p>Home</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->
        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="index.html" class="logo">
                            <img src="" alt="navbar brand" class="navbar-brand" height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <!-- Navbar Header -->
                <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                    <div class="container-fluid">
                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                                    aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img src="<?= base_url('assets/img/default.png') ?>" alt="..."
                                            class="avatar-img rounded-circle" />
                                    </div>
                                    <span class="profile-username">
                                        <span class="fw-bold"><?= session('user')['Nama'] ?></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <a href="<?= base_url('Profile') ?>" class="dropdown-item">Profile</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Auth/Logout') ?>" class="dropdown-item">Logout</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>

            <div class="container">
                <div class="page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <div>
                            <h3 class="fw-bold mb-3"><?= $title; ?></h3>
                        </div>
                    </div>

                    <div class="row">
                        <?= $this->renderSection('content'); ?>
                    </div>
                </div>
            </div>

            <footer class="footer"></footer>
        </div>
</body>

</html>