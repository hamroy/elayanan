
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div >
                    <img src="<?=base_url()?>img/logo.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$pegawai->row()->Nama_Pegawai?></div>
                    <div class="email">User</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?=base_url('login_proses/logout')?>" onclick="return confirm('Anda yakin akan keluar?')"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li <?=$aktif1?>>
                        <a href="<?=base_url('user')?>">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li <?=$aktif2?>>
                        <a href="<?=base_url('user/form')?>">
                            <i class="material-icons">text_fields</i>
                            <span>Data Pegawai</span>
                        </a>
                    </li>
                    

                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 &middot; DISDIK &middot; PEMKAB NATUNA
                </div>
                <div class="version">
                    <b>Version: </b> <?=$this->Minfo->aplikasi_ipp()->row()->versi_aplikasi?>
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->    