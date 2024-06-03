<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Portal Berita - <?= $title . ' ' . $subtitle ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('template/theme/') ?>images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="<?= base_url('template/theme/') ?>css/style.css" rel="stylesheet">
    <!-- Summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/summernote-image-list.min.css') ?>">
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
                    <span class="logo-compact"><img src="<?= base_url('template/theme/') ?>images/logo-compact.png"
                            alt=""></span>
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
                        if (session()->getFlashdata('loginsukses')) {
                            echo '<div class="alert alert-primary alert-dismissible fade show">';
                            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

                            echo session()->getFlashdata('loginsukses') . ' <strong>' . session()->get('username') . '</strong></div>';
                        }
                        ?>
                    </div>

                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons d-none d-md-flex">
                            <a class="log-user">
                                <span><?= session()->get('username') ?></span>
                            </a>
                        </li>


                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class=""></span>
                                <img src="<?= base_url('image/profil/') . $profil['foto_profil'] ?>" height="40"
                                    width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="/profil"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>



                                        <li><a href="/login/logout"><i class="icon-key"></i> <span>Logout</span></a>
                                        </li>

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
                        <a href="/dashboard" aria-expanded="false">
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
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Artikel
                                <?= (session()->get('akses') == 2) ? 'Saya' : '' ?></span>
                        </a>
                    </li>
                    <?php if (session()->akses == 1): ?>
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
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Admin
                        Portal</a> 2018</p>
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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/summernote-image-list.min.js') ?>"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                callbacks: {
                    onImageUpload: function(files) {
                        for (let i = 0; i < files.length; i++) {
                            $.upload(files[i]);
                        }
                    },
                    onMediaDelete: function(target) {
                        $.delete(target[0].src);
                    }
                },
                height: 200,
                toolbar: [
                    ["style", ["bold", "italic", "underline", "clear"]],
                    ["fontname", ["fontname"]],
                    ["fontsize", ["fontsize"]],
                    ["color", ["color"]],
                    ["para", ["ul", "ol", "paragraph"]],
                    ["height", ["height"]],
                    ["insert", ["link", "picture", "imageList", "video", "hr"]],

                ],
                dialogsInBody: true,
                imageList: {
                    endpoint: "<?php echo site_url('artikel/listGambar') ?>",
                    fullUrlPrefix: "<?php echo base_url('uploads/berkas') ?>/",
                    thumbUrlPrefix: "<?php echo base_url('uploads/berkas') ?>/"
                }
            });

            $.upload = function (file) {
                let out = new FormData();
                out.append('file', file, file.name);
                $.ajax({
                    method: 'POST',
                    url: '<?php echo site_url('artikel/uploadGambar') ?>',
                    contentType: false,
                    cache: false,
                    processData: false,
                    data: out,
                    success: function (img) {
                        $('.summernote').summernote('insertImage', img);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.error(textStatus + " " + errorThrown);
                    }
                });
            };
            $.delete = function (src) {
                $.ajax({
                    method: 'POST',
                    url: '<?php echo site_url('artikel/deleteGambar') ?>',
                    cache: false,
                    data: {
                        src: src
                    },
                    success: function (response) {
                        console.log(response);
                    }

                });
            };
        });

        function konfirmasi(url) {
            var result = confirm("Want to delete?");
            if (result) {
                window.location.href = url;
            }
        }
    </script>
</body>

</html>