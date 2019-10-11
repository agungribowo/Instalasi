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
                                    <?php $CI =& get_instance(); ?>
                                        <?php if($CI->session->flashdata('gagal')): ?>
                                            <div class="alert bg-red" id="alert">
                                                <?php echo e($CI->session->flashdata('gagal')); ?>

                                            </div>
                                        <?php elseif($CI->session->flashdata('simpan')): ?>
                                            <div class="alert bg-green" id="alert">
                                                <?php echo e($CI->session->flashdata('simpan')); ?>

                                            </div>
                                        <?php endif; ?>
                                        <div class="container-fluid">
                                            <?=form_open('auth/permintaan')?>
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <label>Nama Customer</label>
                                                                <input type="text" class="form-control text-center" name="nama_customer" placeholder="Masukan Nama Customer">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>No Hp Customer</label>
                                                                <input type="text" class="form-control text-center" name="no_hp_customer" placeholder="Masukan No Hp Customer">
                                                            </div>
                                                            
                                                            <div class="col-sm-6">
                                                                <label>Nama Produk</label>
                                                                <input type="text" class="form-control text-center" name="nama_produk" placeholder="Masukan Nama Produk">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label>Jenis Produk</label>
                                                                <input type="text" class="form-control text-center" name="jenis_produk" placeholder="Masukan Jenis Produk">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label>Alamat Customer</label>
                                                        <textarea name="alamat_customer" cols="30" rows="4" class="form-control no-resize"></textarea>
                                                    </div>
                                                </div>
                                                <br>
                                                <button type="submit" class="btn btn-primary btn-sm pull-right"><i class="material-icons"> send </i> <span> Send </span> </button>
                                            <?=form_close()?>
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
    <script>
        $(function () {
            $("#alert").fadeTo(3000, 500).slideUp(500, function() {
                $("#alert").alert('close');
            });
        });
    </script>
</body>

</html><?php /**PATH /var/www/html/Instalasi/application/views/permintaan.blade.php ENDPATH**/ ?>