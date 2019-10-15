<?php $__env->startSection('content'); ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Jadwal</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <?=form_open('page/jadwal') ?>
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <b>Dari</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="date" class="form-control" name="dari_tanggal" id="dari_tanggal" value="<?=$dari?>" placeholder="Mohon Pilih Tanggal Disini...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Sampai</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="date" class="form-control" name="sampai_tanggal" id="sampai_tanggal" value="<?=$sampai?>" placeholder="Mohon Pilih Tanggal Disini...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    <p></p>
                                    <br>
                                        <button type="submit" name="submit" class="btn bg-grey btn-xs btn-block waves-effect">
                                            <i class="material-icons">date_range</i>
                                            <span>SELECT TANGGAL</span>
                                        </button>
                                    </div>
                                </div>
                            <?=form_close()?>
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
                                                <th class="text-center">Installer</th>
                                                <th class="text-center">Tanggal Instalasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1 ?>
                                            <?php $__currentLoopData = $data_jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td class="text-center"><?php echo e($no); ?> .</td>
                                                    <td class="text-center"><?php echo e($jadwal['kode_permintaan']); ?></td>
                                                    <td class="text-center"><?php echo e($jadwal['nama_customer']); ?></td>
                                                    <td class="text-center"><?php echo e($jadwal['no_hp']); ?></td>
                                                    <td class="text-center"><?php echo e($jadwal['alamat']); ?></td>
                                                    <td class="text-center"><?php echo e($jadwal['nama_installer']); ?></td>
                                                    <td class="text-center"><?php echo e($jadwal['tanggal_instalasi']); ?></td>
                                                </tr>
                                            <?php $no++ ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Instalasi/application/views/jadwal/list.blade.php ENDPATH**/ ?>