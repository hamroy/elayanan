
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
                    ?>
                        <a  class="btn bg-green waves-effect" href="<?=base_url('adminunit/form/'.$pegawai->row()->id_pegawai)?>">
                                    <i class="material-icons">arrow_back</i>
                                    <span>KEMBALI</span>
                                </a>
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    
                                    <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Unggah Dokumen Pegawai: <b><?=$pegawai->row()->Nama_Pegawai?></b> (NIP: <b><?=$pegawai->row()->NIP?></b>)</a></li>
                                  
                                </ul>

                                <div class="tab-content">
                                  
                                    <div role="tabpanel" class="tab-pane fade in active" id="profile_settings">
                                        <form action="<?=base_url('Adminunit/upload/'.$pegawai->row()->id_pegawai)?>" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                            <div class="dz-message">
                                                <div class="drag-icon-cph">
                                                    <i class="material-icons">touch_app</i>
                                                </div>
                                                <h3>Drag-Drop file disini ATAU klik untuk unggah file.</h3>
                                                
                                            </div>
                                            <div class="fallback">
                                                <input name="unggah_berkas" type="file" multiple />
                                            </div>

                                            <button type="submit" class="btn btn-primary btn-block m-t-15 waves-effect"><h3>SIMPAN</h3></button>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

   