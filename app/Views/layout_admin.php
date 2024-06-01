<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Portal Berita</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('template/theme/') ?>images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="<?= base_url('template/theme/') ?>css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="<?= base_url('template/theme/') ?>images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="<?= base_url('template/theme/') ?>images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="<?= base_url('template/theme/') ?>images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">

                    <div class="input-group icons">
                        <?php 
                            if (session()->getFlashdata('berhasil')) {
                                echo '<div class="alert alert-primary alert-dismissible fade show">';
                                echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

                                echo session()->getFlashdata('berhasil').' <strong>'.session()->get('username').'</strong></div>';
                            }
                        ?>
                    </div>

                </div>
                <div class="header-right">
                    <ul class="clearfix">



                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="<?= base_url('template/theme/') ?>images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="/profil"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        
                                        
                                        
                                        <li><a href="/login/logout"><i class="icon-key"></i> <span>Logout</span></a></li>

                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>

                    <li>
                        <a href="/" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/penulis" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Penulis</span>
                        </a>
                    </li>
                    <li>
                        <a href="/artikel" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Artikel</span>
                        </a>
                    </li>
                    <?php if(session()->akses == 1) : ?>
                    <li>
                        <a href="/user" aria-expanded="false">
                            <i class="icon-user menu-icon"></i><span class="nav-text">User</span>
                        </a>
                    </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)"><?= $title ?></a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)"><?= $subtitle ?></a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <?= $this->renderSection('content') ?>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Admin Portal</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?= base_url('template/theme/') ?>plugins/common/common.min.js"></script>
    <script src="<?= base_url('template/theme/') ?>js/custom.min.js"></script>
    <script src="<?= base_url('template/theme/') ?>js/settings.js"></script>
    <script src="<?= base_url('template/theme/') ?>js/gleek.js"></script>
    <script src="<?= base_url('template/theme/') ?>js/styleSwitcher.js"></script>

</body>

</html>