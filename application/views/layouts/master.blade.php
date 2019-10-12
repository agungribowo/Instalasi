<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Administrator</title>
    <link rel="icon" href="<?=base_url()?>_assets/img/logo-ace.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>_assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>_assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
    <!-- <link href="<?=base_url()?>_assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" /> -->
    <link href="<?=base_url()?>_assets/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="<?=base_url()?>_assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="<?=base_url()?>_assets/plugins/morrisjs/morris.css" rel="stylesheet" />
    <link href="<?=base_url()?>_assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>_assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>

    @include('layouts.navbar')

    @include('layouts.sidebar')

    @yield('content')

    <script src="<?=base_url()?>_assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>_assets/plugins/bootstrap/js/bootstrap.js"></script>
    <!-- <script src="<?=base_url()?>_assets/plugins/bootstrap-select/js/bootstrap-select.js"></script> -->
    <script src="<?=base_url()?>_assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?=base_url()?>_assets/plugins/node-waves/waves.js"></script>
    <script src="<?=base_url()?>_assets/plugins/jquery-countto/jquery.countTo.js"></script>
    <script src="<?=base_url()?>_assets/plugins/morrisjs/morris.js"></script>
    <script src="<?=base_url()?>_assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="<?=base_url()?>_assets/js/admin.js"></script>
    <script src="<?=base_url()?>_assets/plugins/momentjs/moment.js"></script>
    <script src="<?=base_url()?>_assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- <script src="<?=base_url()?>_assets/js/pages/index.js"></script> -->
    <script src="<?=base_url()?>_assets/js/demo.js"></script>
    <script src="<?=base_url()?>_assets/js/pages/ui/modals.js"></script>
    <script>
        $('.edit_cs').on('click', function() {
            var $this = $(this); 
            kode_cs = $this.data('kode_cs'); 
            nama_cs = $this.data('nama_cs');
            no_hp   = $this.data('no_hp');
            alamat  = $this.data('alamat');
            username  = $this.data('username');
            
            $('#edit_kode_cs_store').val(kode_cs);
            $('#edit_nama_cs_store').val(nama_cs);
            $('#edit_no_hp').val(no_hp); 
            $('#edit_alamat').val(alamat); 
            $('#edit_username').val(username);

            $('#modal_edit').modal('show');
        });

        $('.edit_installer').on('click', function() {
            var $this = $(this); 
            kode_installer = $this.data('kode_installer'); 
            nama_installer = $this.data('nama_installer');
            no_hp   = $this.data('no_hp');
            alamat  = $this.data('alamat');
            username  = $this.data('username');
            
            $('#edit_kode_installer').val(kode_installer);
            $('#edit_nama_installer').val(nama_installer);
            $('#edit_no_hp').val(no_hp); 
            $('#edit_alamat').val(alamat); 
            $('#edit_username').val(username);

            $('#modal_edit').modal('show');
        });

        $('.jadwalkan').on('click', function() {
            $('#modal_jadwal') .modal('show');

            var $this = $(this);
            kode_permintaan      = $this.data('kode_permintaan');
            console.log(kode_permintaan)
            nama_customer        = $this.data('nama_customer');
            nama_produk          = $this.data('nama_produk');
            jenis_produk         = $this.data('jenis_produk');

            $('#kode_permintaan').val(kode_permintaan);
            $('#nama_customer').val(nama_customer);
            $('#nama_produk').val(nama_produk);
            $('#jenis_produk').val(jenis_produk);
        });

        $('#tanggal_instalasi').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });
    </script>
</body>
</html>