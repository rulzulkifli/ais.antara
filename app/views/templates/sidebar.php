<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="img/profile_small.jpg"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="block m-t-xs font-bold">David Williams</span>
                    <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                        <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                        <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    AIS2.0
                </div>
            </li>
            <li class="special_link">
                <a href="<?= BASE_URL;?>/home"><i class="fa fa-database"></i> <span class="nav-label">Beranda</span></a>
            </li>
            <li>
                <a href=""><i class="fa fa-th-large"></i> <span class="nav-label">Penjualan</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?= BASE_URL;?>/penjualan/daftar_penawaran">Surat Penawaran</a></li>
                    <li><a href="<?= BASE_URL;?>/penjualan/daftar_pesanan">Pesanan Penjualan</a></li>
                    <li><a href="<?= BASE_URL;?>/penjualan/daftar_bast">BAST</a></li>
                    <li><a href="<?= BASE_URL;?>/penjualan/daftar_invoice">Invoice</a></li>
                </ul>
            </li>
        </ul>   
    </div>
</nav>