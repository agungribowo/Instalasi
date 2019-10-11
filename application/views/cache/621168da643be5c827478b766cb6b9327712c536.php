<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Permintaan Instalasi</title>
    <link rel="icon" href="<?=base_url()?>_assets/img/logo_ace.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>_assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>_assets/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="<?=base_url()?>_assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="<?=base_url()?>_assets/css/style.css" rel="stylesheet">
</head>

<body class="login-page" style="max-width:75%;">
    <div class="login-box">
        <section class="content">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12">
                        <div class="card profile-card">
                            <div class="profile-body">
                                <div class="content-area">
                                    <img src="<?=base_url()?>_assets/img/logo_ace.png" alt="logo_ace" style="height:30%; width:30%;" class="img-cicrle"/>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label for="id_customer">ID Customer</label>
                                                    <input type="text" class="form-control text-center" name="id_customer" placeholder="Masukan ID Customer">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="nama_customer">Nama Customer</label>
                                                    <input type="text" class="form-control text-center" name="nama_customer" placeholder="Masukan Nama Customer">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- <div class="login-box">
        <div class="row">
            <div class="col-sm-3">
                <img src="<?=base_url()?>_assets/img/logo_ace.png" alt="logo_ace" class="img-responsive center">
            </div>
        </div>
        <div class="card">
            <div class="body">
                <?= form_open('auth/register'); ?>
                    <div class="msg">Permintaan Instalasi</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama" placeholder="Nama" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="number" class="form-control" name="no_hp" placeholder="No Hp" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <textarea name="alamat" id="alamat" class="form-control no-resize" cols="32" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN UP</button>
                        </div>
                    </div>
                <?=form_close()?>
            </div>
        </div>
    </div> -->

    <script src="<?=base_url()?>_assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>_assets/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="<?=base_url()?>_assets/plugins/node-waves/waves.js"></script>
    <script src="<?=base_url()?>_assets/plugins/jquery-validation/jquery.validate.js"></script>
    <script src="<?=base_url()?>_assets/js/admin.js"></script>
    <script src="<?=base_url()?>_assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?=base_url()?>_assets/js/pages/examples/profile.js"></script>
    <!-- <script src="<?=base_url()?>_assets/js/pages/examples/sign-in.js"></script> -->
    <script src="<?=base_url()?>_assets/js/demo.js"></script>
</body>

</html><?php /**PATH /var/www/html/Instalasi/application/views/register.blade.php ENDPATH**/ ?>