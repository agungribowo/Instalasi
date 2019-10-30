<?php $CI =& get_instance(); ?>

<section>
    <aside id="leftsidebar" class="sidebar">
        <div class="user-info">
            <div class="image">
                <img src="<?=base_url()?>_assets/img/foto_profile/<?=$CI->session->userdata('foto')?>" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$CI->session->userdata('nama_cs_store')?></div>
                <div class="email"><?=$CI->session->userdata('username')?></div>
            </div>
        </div>
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li <?php if ($active == "dashboard") { echo "class='active'"; }?>>
                    <a href="<?=base_url()?>page">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li <?php if ($active == "permintaan") { echo "class='active'"; }?>>
                    <a href="<?=base_url()?>page/permintaan">
                        <i class="material-icons">description</i>
                        <span>Permintaan</span>
                    </a>
                </li>
                <li <?php if ($active == "customer") { echo "class='active'"; }?>>
                    <a href="<?=base_url()?>page/customer">
                        <i class="material-icons">person</i>
                        <span>Customer</span>
                    </a>
                </li>
                <li <?php if ($active == "jadwal") { echo 'class="active"'; }?>>
                    <a href="<?=base_url()?>page/jadwal">
                        <i class="material-icons">perm_contact_calendar</i>
                        <span>Jadwal</span>
                    </a>
                </li>
                <li>
                <li <?php if ($active == "cs_store") { echo "class='active'"; }?>>
                    <a href="<?=base_url()?>page/cs_store">
                        <i class="material-icons">perm_identity</i>
                        <span>CS Store</span>
                    </a>
                </li>
                <li <?php echo $_active = ($active == "laporan") ? 'class="active"' : '' ;?>>
                    <a href="<?=base_url()?>page/laporan">
                        <i class="material-icons">book</i>
                        <span>Laporan</span>
                    </a>
                </li>
                <li <?php if ($active == "installer") { echo "class='active'"; }?>>
                    <a href="<?=base_url()?>page/installer">
                        <i class="material-icons">people</i>
                        <span>Installer</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url()?>page/logout">
                        <i class="material-icons">exit_to_app</i>
                        <span>Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </aside>
</section><?php /**PATH /var/www/html/Instalasi/application/views/layouts/sidebar.blade.php ENDPATH**/ ?>