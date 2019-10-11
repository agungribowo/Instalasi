<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login</title>
    <link rel="icon" href="<?=base_url()?>_assets/img/logo-ace.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>_assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>_assets/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="<?=base_url()?>_assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="<?=base_url()?>_assets/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="card">
            <div class="body">
                <?= form_open('auth/check_login'); ?>
                    <img src="<?=base_url()?>_assets/img/logo_ace.png" alt="logo_ace" class="img-responsive">
                    <div class="msg">Sign in to start your account</div>
                    @php $CI =& get_instance(); @endphp
                        @if ($CI->session->flashdata('gagal'))
                            <div class="alert bg-red" id="alert">
                                {{ $CI->session->flashdata('gagal') }}
                            </div>
                        @elseif($CI->session->flashdata('simpan'))
                            <div class="alert bg-green" id="alert">
                                {{ $CI->session->flashdata('simpan') }}
                            </div>
                        @endif
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
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>

                        <div class="col-xs-12 text-center">
                            <a href="<?=base_url()?>auth/register">Register Now!</a>
                        </div>

                    </div>
                <?=form_close()?>
            </div>
        </div>
    </div>

    <script src="<?=base_url()?>_assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>_assets/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="<?=base_url()?>_assets/plugins/node-waves/waves.js"></script>
    <script src="<?=base_url()?>_assets/plugins/jquery-validation/jquery.validate.js"></script>
    <script src="<?=base_url()?>_assets/js/admin.js"></script>
    <script src="<?=base_url()?>_assets/js/pages/examples/sign-in.js"></script>
    <script>
        $(function () {
            $("#alert").fadeTo(3000, 500).slideUp(500, function() {
                $("#alert").alert('close');
            });
        });
    </script>
</body>

</html>