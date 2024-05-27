<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $title ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('template/theme/') ?>images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="<?= base_url('template/theme/') ?>css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">

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

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center"> <h4>Login Admin Portal Berita</h4></a>
                                
                                <form class="mt-5 mb-5 login-input" method="post" action="/login/prosesLogin">
                                <?php
                                    if (session()->getFlashdata('pesan')) {
                                        echo session()->getFlashdata('pesan');
                                    }
                                ?>
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Masuk</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

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





