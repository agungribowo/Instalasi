<?php $__env->startSection('content'); ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Permintaan</h2>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>List Permintaan</h2>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Kode Permintaan</th>
                                            <th class="text-center">Nama Customer</th>
                                            <th class="text-center">No Hp</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">Nama Produk</th>
                                            <th class="text-center">Jenis Produk</th>
                                            <th class="text-center">Tanggal Permintaan</th>
                                            <th class="text-center">Jadwal</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php $__currentLoopData = $data_permintaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permintaan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="text-center"><?php echo e($no); ?> .</td>
                                                <td class="text-center"><?php echo e($permintaan['kode_permintaan']); ?></td>
                                                <td class="text-center"><?php echo e($permintaan['nama_customer']); ?></td>
                                                <td class="text-center"><?php echo e($permintaan['no_hp']); ?></td>
                                                <td class="text-center"><?php echo e($permintaan['alamat']); ?></td>
                                                <td class="text-center"><?php echo e($permintaan['nama_produk']); ?></td>
                                                <td class="text-center"><?php echo e($permintaan['jenis_produk']); ?></td>
                                                <td class="text-center"><?php echo e($permintaan['tanggal_permintaan']); ?></td>
                                                <td class="text-center"><?php echo e($permintaan['jadwal']); ?></td>
                                                <td class="text-center"> 
                                                    <button type="button" class="btn btn-info btn-sm waves-effect jadwalkan" data-toggle="modal" data-kode_permintaan="<?php echo e($permintaan['kode_permintaan']); ?>" data-nama_customer="<?php echo e($permintaan['nama_customer']); ?>" data-nama_produk="<?php echo e($permintaan['nama_produk']); ?>" data-jenis_produk="<?php echo e($permintaan['jenis_produk']); ?>" <?php echo e($permintaan['disabled']); ?>> <i class="material-icons">settings</i><span> Jadwalkan </span></button>
                                                </td>
                                            </tr>
                                        <?php $no++;?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="modal_jadwal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">Jadwal Instalasi</h4>
                </div>
                <?= form_open_multipart('page/jadwal_instalasi') ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <label> Kode Instalasi </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kode_instalasi" id="kode_installasi" value=" <?php echo e($kode_instalasi); ?>" readonly style="background-color:#0000002e">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label> Kode Permintaan </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kode_permintaan" id="kode_permintaan" readonly style="background-color:#0000002e">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label> Nama Customer </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama_customer" id="nama_customer" style="background-color:#0000002e" readonly required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label> Nama Produk </label>
                                <div class="form-group">
                                    <div class="form-line">
                                    <input type="text" class="form-control" name="nama_produk" id="nama_produk" style="background-color:#0000002e" readonly required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label> Jenis Produk </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jenis_produk" id="jenis_produk" style="background-color:#0000002e" readonly required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label> Installer </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="installer" class="form-control" required>
                                            <option value=""> -- Pilih Installer --</option>
                                            <?php $__currentLoopData = $data_installer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $installer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($installer['kode_installer']); ?>"> <?php echo e($installer['nama_installer']); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <label> Tanggal Instalasi </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tanggal_instalasi" id="tanggal_instalasi" required>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Instalasi/application/views/permintaan/list.blade.php ENDPATH**/ ?>