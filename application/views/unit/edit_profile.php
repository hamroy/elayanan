
        <div class="container-fluid">
            <div class="row clearfix">
                
                <div class="col-xs-12 col-sm-12">
                    <?php
                if($pesan){?>
                    <div class="card">
                        <div class="alert alert-success">
                                <?=$pesan?>.
                            </div>
                    </div>
                <?php }
                if($this->session->userdata('id_opd')==1000){?>
<a  class="btn bg-green waves-effect" href="<?=base_url('Admin/pegawai/'.$pegawai->row()->id_opd)?>">
                                    <i class="material-icons">arrow_back</i>
                                    <span>KEMBALI</span>
                                </a>
                <?php }else{?>

                        <a  class="btn bg-green waves-effect" href="<?=base_url('Adminunit/opd/'.$id_opd)?>">
                                    <i class="material-icons">arrow_back</i>
                                    <span>KEMBALI</span>
                                </a>
                <?php }
                    ?>
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    
                                    <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Edit Pegawai: <?=$pegawai->row()->Nama_Pegawai?> (NIP: <?=$pegawai->row()->NIP?>)</a></li>
                                  
                                </ul>


                                
                                

                                <div class="tab-content">
                                  
                                    <div role="tabpanel" class="tab-pane fade in active" id="profile_settings">
                                        <form class="form-horizontal" method="POST" action="<?=base_url('Adminunit/edit_officer/'.$pegawai->row()->id_pegawai)?>">
                                    
                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-2 control-label">Nama Pegawai</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="NameSurname" name="nama" placeholder="Nama Pegawai" value="<?=$pegawai->row()->Nama_Pegawai?>" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">N.I.P.</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="Email" name="nip" placeholder="N.I.P." value="<?=$pegawai->row()->NIP?>" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="InputExperience" class="col-sm-2 control-label">Tanggal Lahir</label>
                                                <div class="col-sm-10" >
                                                    <div class="input-group date" id="bs_datepicker_component_container">
                                                    <div class="form-line">
                                                        <input type="date" class="form-control" id="InputExperience" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?=$pegawai->row()->Tgl_Lahir?>" >
                                                    </div>
                                                    <span class="input-group-addon"><i class="material-icons">date_range</i></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="InputSkills" class="col-sm-2 control-label">TMT CPNS</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group date" id="bs_datepicker_component_container">
                                                    <div class="form-line">
                                                        <input type="date" class="form-control" id="InputSkills" name="tmt_cpns" placeholder="TMT CPNS" value="<?=$pegawai->row()->TMT_CPNS?>">
                                                    </div>
                                                    <span class="input-group-addon"><i class="material-icons">date_range</i></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="InputSkills2" class="col-sm-2 control-label">TMT PNS</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group date" id="bs_datepicker_component_container">
                                                    <div class="form-line">
                                                        <input type="date" class="form-control" id="InputSkills2" name="tmt_pns" placeholder="TMT PNS" value="<?=$pegawai->row()->TMT_PNS?>">
                                                    </div>
                                                    <span class="input-group-addon"><i class="material-icons">date_range</i></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="InputSkills5" class="col-sm-2 control-label">Pendidikan</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="InputSkills5" name="pendidikan" placeholder="Pendidikan" value="<?=$pegawai->row()->Pendidikan?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="InputSkills6" class="col-sm-2 control-label">Jenis Kelamin</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="InputSkills6" name="sex" placeholder="Jenis Kelamin" value="<?=$pegawai->row()->Jenis_Kelamin?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="InputSkills7" class="col-sm-2 control-label">Pangkat</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="InputSkills7" name="pangkat" placeholder="Pangkat" value="<?=$pegawai->row()->Pangkat?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="InputSkills8" class="col-sm-2 control-label">Jabatan</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="InputSkills8" name="jabatan" placeholder="Jabatan" value="<?=$pegawai->row()->Jabatan?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="InputSkills9" class="col-sm-2 control-label">Status</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="InputSkills9" name="status" placeholder="Status" value="<?=$pegawai->row()->Status_Aktif?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="InputSkills10" class="col-sm-2 control-label">ID Finger</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="InputSkills10" name="id_finger" placeholder="ID Finger" value="<?=$pegawai->row()->ID_Finger?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin?')">SIMPAN</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

   