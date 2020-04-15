
        <div class="container-fluid">
            
            <!-- Body Copy -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="font-bold col-green">
                                SELAMAT DATANG DI <?=strtoupper($this->Minfo->show()->row()->nama_aplikasi)?>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            
                            <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                                <img src="<?=base_url()?>img/avatar.jpg" width="100" alt="AdminBSB - Profile Image" />
                            </div>
                            <div class="content-area">
                                <h3><?=strtoupper($pegawai->row()->Nama_Pegawai)?></h3>
                                <p>NIP. <?=strtoupper($pegawai->row()->NIP)?></p>
                                <p><?=strtoupper($pegawai->row()->Jabatan)?></p>
                            </div>
                        </div>
                        <div class="profile-footer">
                            <ul>
                                <li>
                                    <span>Tanggal Lahir</span>
                                    <span><?=strtoupper($pegawai->row()->Tgl_Lahir)?></span>
                                </li>
                                <li>
                                    <span>Jenis Kelamin</span>
                                    <span><?=strtoupper($pegawai->row()->Jenis_Kelamin)?></span>
                                </li>
                                <li>
                                    <span>Pangkat</span>
                                    <span><?=strtoupper($pegawai->row()->Pangkat)?></span>
                                </li>
                                <li>
                                    <span>TMT CPNS</span>
                                    <span><?=strtoupper($pegawai->row()->TMT_CPNS)?></span>
                                </li>
                                <li>
                                    <span>TMT PNS</span>
                                    <span><?=strtoupper($pegawai->row()->TMT_PNS)?></span>
                                </li>                                
                                <li>
                                    <span>Pendidikan</span>
                                    <span><?=strtoupper($pegawai->row()->Pendidikan)?></span>
                                </li>                                
                                <li>
                                    <span>Status Pegawai</span>
                                    <span><?=strtoupper($pegawai->row()->Status_Aktif)?></span>
                                </li>                                
                                <li>
                                    <span>ID Finger</span>
                                    <span><?=strtoupper($pegawai->row()->ID_Finger)?></span>
                                </li>                                                            </ul>
                            
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Body Copy -->
        </div>