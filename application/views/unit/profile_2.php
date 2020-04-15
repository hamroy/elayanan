<div class="container-fluid">
            
            
 <a  class="btn bg-green waves-effect" href="<?=base_url('adminunit/opd/'.$id_opd)?>">
                                    <i class="material-icons">arrow_back</i>
                                    <span>KEMBALI</span>
                                </a>

            <!-- Advanced Form Example With Validation -->
           

<div class="col-xs-12 col-sm-12">
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>

<div class="row clearfix">
<div class="col-xs-12 col-sm-4">
                        <div class="profile-body">
                            <div class="image-area">
                                <img src="../../images/user-lg.jpg" alt="AdminBSB - Profile Image" />
                            </div>
                            <div class="content-area">
                                <h3><?=$pegawai->row()->Nama_Pegawai?></h3>
                                <p><?=$pegawai->row()->NIP?></p>
                                <p><?=$pegawai->row()->Jabatan?></p>
                            </div>
                        </div>
                        </div>   

                           <div class="col-xs-12 col-sm-8">
                        <div class="profile-footer">
                            <ul>
                                <li>
                                    <span>Tanggal Lahir</span>
                                    <span><?=$pegawai->row()->Tgl_Lahir?></span>
                                </li>
                                <li>
                                    <span>Jenis Kelamin</span>
                                    <span><?=$pegawai->row()->Jenis_Kelamin?></span>
                                </li>
                                <li>
                                    <span>Pangkat</span>
                                    <span><?=$pegawai->row()->Pangkat?></span>
                                </li>
                                <li>
                                    <span>TMT CPNS</span>
                                    <span><?=$pegawai->row()->TMT_CPNS?></span>
                                </li>                                
                                <li>
                                    <span>Pendidikan</span>
                                    <span><?=$pegawai->row()->Pendidikan?></span>
                                </li>                                
                                <li>
                                    <span>Status Pegawai</span>
                                    <span><?=$pegawai->row()->Status_Aktif?></span>
                                </li>                                
                                <li>
                                    <span>ID Finger</span>
                                    <span><?=$pegawai->row()->ID_Finger?></span>
                                </li>                                                            </ul>
                            
                        </div>
                        </div>  
</div>

                    </div>

                    
                </div>

<?php $this->load->view('unit/form_nilai')?>
            
            <!-- #END# Advanced Form Example With Validation -->
        </div>