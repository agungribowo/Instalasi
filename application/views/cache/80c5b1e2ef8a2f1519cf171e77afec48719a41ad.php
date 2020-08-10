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
<?php $CI =& get_instance(); ?>
<body class="login-page" style="max-width:95%">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> Data Instalasi </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                    <i class="material-icons">account_circle</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Username : <?php echo e($CI->session->userdata('username')); ?></a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Nama : <?php echo e($CI->session->userdata('nama_installer')); ?></a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">No Hp : <?php echo e($CI->session->userdata('no_hp')); ?></a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Alamat : <?php echo e($CI->session->userdata('alamat')); ?></a></li>
                                    <li><a href="<?=base_url()?>page/logout" class=" waves-effect waves-block">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
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
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Target</th>
                                        <th class="text-center">Nama Customer</th>
                                        <th class="text-center">No Hp</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Nama Produk</th>
                                        <th class="text-center">Hasil Perbaikan</th>
                                        <th class="text-center">Installer</th>
                                        <th class="text-center">Hasil Kerja</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1; ?>
                                    <?php if($data['data_laporan'] == NULL): ?> 
                                        <tr>
                                            <td colspan="10" class="text-center"> Belum Ada Tugas</td>
                                        </tr>
                                    <?php else: ?> 
                                        <?php $__currentLoopData = $data['data_laporan']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $laporan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="text-center"><?php echo e($no); ?> .</td>
                                                <td class="text-center">Instalasi</td>
                                                <td class="text-center"><?php echo e($laporan['nama_customer']); ?></td>
                                                <td class="text-center"><?php echo e($laporan['no_hp']); ?></td>
                                                <td class="text-center"><?php echo e($laporan['alamat']); ?></td>
                                                <td class="text-center"><?php echo e($laporan['nama_produk']); ?></td>
                                                <td class="text-center">
                                                <?php if($laporan['hasil_perbaikan'] == NULL || $laporan['hasil_perbaikan'] == ''): ?>
                                                    <?php echo e('Proses Perbaikan'); ?>

                                                <?php else: ?>
                                                    <?php echo e($laporan['hasil_perbaikan']); ?>

                                                <?php endif; ?>
                                                </td>
                                                <td class="text-center"><?php echo e($laporan['nama_installer']); ?></td>
                                                <td class="text-center"><?php echo e($laporan['hasil_kerja']); ?>

                                                <?php if($laporan['hasil_kerja'] == NULL || $laporan['hasil_kerja'] == ''): ?>
                                                    <?php echo e('Proses Pengerjaan'); ?>

                                                <?php else: ?>
                                                    <?php echo e($laporan['hasil_kerja']); ?>

                                                <?php endif; ?>
                                                </td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)" type="button" class="btn btn-warning btn-xs waves-effect edit_hasil" data-toggle="modal" data-id="<?php echo e($laporan['id_jadwal_instalasi']); ?>"><i class="material-icons">edit</i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                <?php $no++; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="form_hasil" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xs" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">Form Hasil Instalasi</h4>
                </div>
                <?= form_open_multipart('installer/update_hasil') ?>
                    <div class="modal-body">
                        <div class="row">
                            <input type="hidden" class="form-control" name="id_jadwal_instalasi" id="id_jadwal_instalasi" required>
                            <div class="col-sm-12">
                                <label for="edit_kode_cs_store"> Hasil Perbaikan </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="hasil_perbaikan" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <label for="edit_nama_cs_store"> Hasil Kerja </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="hasil_kerja" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <label for="edit_no_hp"> Komentar </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="komentar" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <label for="edit_alamat"> Biaya Service </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="biaya_service" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <label for="edit_username"> Biaya Transport </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="biaya_transport" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link waves-effect"> Simpan </button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal"> Keluar </button>
                    </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
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

            $('.edit_hasil').on('click', function() {
                var id_jadwal_instalasi = $(this).data('id');
                $('#id_jadwal_instalasi').val(id_jadwal_instalasi);
                $('#form_hasil').modal('show');
            });
        });
    </script>
</body>

</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/instalasi/application/views/installer/view_installer.blade.php ENDPATH**/ ?>