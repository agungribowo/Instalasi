<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Administrator</title>
    <link rel="icon" href="<?=base_url()?>_assets/img/logo_ace.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>_assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>_assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>_assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <!-- <div class="row">
                            <div class="col-sm-4">
                                <img src="<?=base_url()?>_assets/img/logo_ace.png" alt="logo_ace" class="img-responsive">
                            </div>
                        </div> -->
                        <div class="header">
                            <img src="<?=base_url()?>_assets/img/logo_ace.png" alt="logo_ace" class="img-responsive img-square text-center" style="width:12%; height:auto; margin: 0 auto;">
                            <h1 class="text-center" > SURAT TUGAS KUNJUNGAN INSTALASI </h1>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <th class="text-center">Di Tugaskan Untuk : </th>
                                    <td class="text-center">Instalasi</td>
                                </tr>
                                <tr>
                                    <th class="text-center">Tanggal Instalasi : </th>
                                    <td class="text-center"><?php echo e($data_laporan['tanggal_instalasi']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-center">Nama Customer : </th>
                                    <td class="text-center"><?php echo e($data_laporan['nama_customer']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-center">No Hp : </th>
                                    <td class="text-center"><?php echo e($data_laporan['no_hp']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-center">Alamat : </th>
                                    <td class="text-center"><?php echo e($data_laporan['alamat']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-center">Nama Produk : </th>
                                    <td class="text-center"><?php echo e($data_laporan['nama_produk']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-center">Jenis Produk : </th>
                                    <td class="text-center"><?php echo e($data_laporan['jenis_produk']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-center">Teknisi Yang Bertugas : </th>
                                    <td class="text-center"><?php echo e($data_laporan['nama_installer']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-center">Hasil Perbaikan : </th>
                                    <td class="text-center"><?php echo e($data_laporan['hasil_perbaikan']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-center">Hasil Kerja : </th>
                                    <td class="text-center"><?php echo e($data_laporan['hasil_kerja']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-center">Komentar : </th>
                                    <td class="text-center"><?php echo e($data_laporan['komentar']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-center">Biaya Service : </th>
                                    <td class="text-center"><?php echo e($data_laporan['biaya_service']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-center">Biaya Transport : </th>
                                    <td class="text-center"><?php echo e($data_laporan['biaya_transport']); ?></td>
                                </tr>
                            </table>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th class="text-center">YANG MENUGASKAN <br>
                                            <br><br><br><br>( ________________________ )</span></th>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th class="text-center">YANG DITUGASKAN <br>
                                            <br><br><br><br>( ________________________ )</span></th>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th class="text-center">CUSTOMER <br>
                                            <br><br><br><br>( ________________________ )</span></th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover">
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url()?>_assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>_assets/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="<?=base_url()?>_assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?=base_url()?>_assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <!-- <script src="<?=base_url()?>_assets/js/admin.js"></script> -->
    <script src="<?=base_url()?>_assets/js/demo.js"></script>
    <script>
        window.print()
    </script>
</body>
</html><?php /**PATH /var/www/html/Instalasi/application/views/laporan/cetak.blade.php ENDPATH**/ ?>