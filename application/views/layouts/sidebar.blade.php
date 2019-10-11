<section>
    <aside id="leftsidebar" class="sidebar">
        <div class="user-info">
            <div class="image">
                <img src="images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                <div class="email">john.doe@example.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
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
                        <i class="material-icons">text_fields</i>
                        <span>Permintaan</span>
                    </a>
                </li>
                <li <?php if ($active == "customer") { echo "class='active'"; }?>>
                    <a href="<?=base_url()?>page/customer">
                        <i class="material-icons">text_fields</i>
                        <span>Customer</span>
                    </a>
                </li>
                <li>
                    <a href="pages/helper-classes.html">
                        <i class="material-icons">layers</i>
                        <span>Jadwal</span>
                    </a>
                </li>
                <li>
                <li <?php if ($active == "cs_store") { echo "class='active'"; }?>>
                    <a href="<?=base_url()?>page/cs_store">
                        <i class="material-icons">layers</i>
                        <span>CS Store</span>
                    </a>
                </li>
                <li>
                    <a href="pages/helper-classes.html">
                        <i class="material-icons">layers</i>
                        <span>Laporan</span>
                    </a>
                </li>
                <li <?php if ($active == "installer") { echo "class='active'"; }?>>
                    <a href="<?=base_url()?>page/installer">
                        <i class="material-icons">layers</i>
                        <span>Installer</span>
                    </a>
                </li>
            </ul>
        </div>
        @include('layouts.footer')
    </aside>
</section>