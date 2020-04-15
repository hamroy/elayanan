<?php
$aktif1 = empty($aktif1)? '': $aktif1;
$aktif1a = empty($aktif1a)? '': $aktif1a;
$aktif1b = empty($aktif1b)? '': $aktif1b;
$aktif2 = empty($aktif2)? '': $aktif2;
$aktif3 = empty($aktif3)? '': $aktif3;
$aktif4 = empty($aktif4)? '': $aktif4;
?>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div >
                    <img src="<?=base_url()?>img/logo.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SUPER ADMIN</div>
                    <div class="email">Aplikasi <?=strtoupper($this->Minfo->show()->row()->singkatan_aplikasi)?></div>
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
                        <a href="<?=base_url('Admin')?>">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>

                    <li <?=$aktif1a?>>
                    
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>DATA MASTER</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?=base_url('C_master/pegawai')?>">Pegawai</a>
                            </li>
                        </ul>
                    </li>


                    <li <?=$aktif1b?>>
                    
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>PENGATURAN</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Jenis Layanan</a>
                            </li>
                            <li>
                                <a href="#">Syarat Layanan</a>
                            </li>
                            <li>
                                <a href="<?=base_url('C_master/bidang')?>">Bidang</a>
                            </li>
                            <li>
                                <a href="#">Proses Bidang</a>
                            </li>
                        </ul>
                    </li>

                    <li <?=$aktif2?>>
                        <a href="<?=base_url('Admin/opd')?>">
                            <i class="material-icons">assignment</i>
                            <span>DATA REGISTRASI</span>
                        </a>
                    </li>
                    <li <?=$aktif4?>>
                        <a href="<?=base_url('Admin/rekap')?>">
                            <i class="material-icons">insert_chart</i>
                            <span>DAFTAR ARSIP</span>
                        </a>
                    </li>
                    
                    <li <?=$aktif3?>>
                        <a href="<?=base_url('C_master/user')?>">
                            <i class="material-icons">account_circle</i>
                            <span>MANAJEMEN USER</span>
                        </a>
                    </li>
                    <li class="header">INFORMASI</li>
                  
                  
                
                </ul>

                            
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 &middot; DISDIK &middot; PEMKAB NATUNA
                </div>
                <div class="version">
                    <b>Version: </b> <?=$this->Minfo->show()->row()->versi_aplikasi?>
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->    