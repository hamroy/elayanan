<div class="container-fluid">

<!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#home" data-toggle="tab">HOME</a></li>
                                <li role="presentation"><a href="#profile" data-toggle="tab">PROFILE</a></li>
                                <li role="presentation"><a href="#messages" data-toggle="tab">MESSAGES</a></li>
                                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <b>Home Content</b>
                                    <p>
                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                        sadipscing mel.
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile">
                                    <b>Profile Content</b>
                                    <p>
                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                        sadipscing mel.
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="messages">
                                    <b>Message Content</b>
                                    <p>
                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                        sadipscing mel.
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="settings">
                                    <b>Settings Content</b>
                                    <p>
                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                        sadipscing mel.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Example Tab -->
 
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-4">
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                                <img src="<?=base_url()?>img/avatar.jpg" width="100" alt="AdminBSB - Profile Image" />
                            </div>
                            <div class="content-area">
                                <h3>NAMA PEGAWAI</h3>
                                <p>NIP. </p>
                                <p>JABATAN</p>
                            </div>
                        </div>
                        <div class="profile-footer">
                            <ul>
                                <li>
                                    <span>Tanggal Lahir</span>
                                    <span>Tgl_Lahir</span>
                                </li>
                                <li>
                                    <span>Jenis Kelamin</span>
                                    <span>Jenis_Kelamin</span>
                                </li>
                                <li>
                                    <span>Pangkat</span>
                                    <span>Pangkat</span>
                                </li>
                                <li>
                                    <span>TMT CPNS</span>
                                    <span>TMT_CPNS</span>
                                </li>
                                <li>
                                    <span>TMT PNS</span>
                                    <span>TMT_PNS</span>
                                </li>                                
                                <li>
                                    <span>Pendidikan</span>
                                    <span>Pendidikan</span>
                                </li>                                
                                <li>
                                    <span>Status Pegawai</span>
                                    <span>Status_Aktif</span>
                                </li>                                
                                <li>
                                    <span>ID Finger</span>
                                    <span>ID_Finger</span>
                                </li>                                                            </ul>
                            
                        </div>
                    </div>

                    
                </div>
                <div class="col-xs-12 col-sm-8">
                    <?php
                        /*$ceknilai = $this->Mpegawai->cek_nilai($pegawai->row()->id_pegawai);
                        if($ceknilai == TRUE)
                        {
                            $nkualifikasi = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kualifikasi;
                            $nkompetensi = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kompetensi1 + $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kompetensi2 + $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kompetensi3 + $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kompetensi4;
                            $nkinerja = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kinerja;
                            $ndisiplin = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_disiplin1 + $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_disiplin2;
                            $nilai = ($nkualifikasi + $nkompetensi + $nkinerja + $ndisiplin)*100;*/
                            ?>

                     <?php   //}
                    ?>

                                       

                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    
                                    <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">PENGUKURAN INDEKS PROFESIONALISME </a></li>
                                   
                                </ul>

                                <div class="tab-content">
                                    
                                    <div role="tabpanel" class="tab-pane fade in active" id="profile_settings">

 <!-- Basic Example | Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                                <?php
                                //if($ceknilai == TRUE)
                        //{?>
                            
                       <?php //}else{?>
                          <form method="post" action="#">  
                      <?php // }
                        ?>
                         
                         
                        <div class="body">
<!--                             <div id="wizard_vertical"> -->
                               
                                <h2>KUALIFIKASI</h2>

                                <section>
                                    <p>Data/Informasi Riwayat Jenjang Pendidikan Formal </p>
                                    <p>
                                <a href="#" class="btn btn-success btn-xs waves-effect">
                                    <i class="material-icons">pageview</i>
                                    <span>Lihat Dokumen</span>
                                </a>

                                <a href="#" class="btn btn-warning btn-xs waves-effect" >
                                    <i class="material-icons">file_upload</i>
                                    <span>Unggah Dokumen</span>
                                </a>

<ul>
    <li>
<input name="pendidikan" type="radio" id="radio_pendidikan1" class="with-gap radio-col-green" value=".25" >
                                <label for="radio_pendidikan1">S-3
</label></li>
                                <li>
                                <input name="pendidikan" type="radio" id="radio_pendidikan2" class="with-gap radio-col-green" value=".2" />
                                <label for="radio_pendidikan2">S-2
</label></li>
                                <li>
                                <input name="pendidikan" type="radio" id="radio_pendidikan3" class="with-gap radio-col-green" value=".15" />
                                <label for="radio_pendidikan3">S-1/D-IV
</label></li>
                                <li>
                                <input name="pendidikan" type="radio" id="radio_pendidikan4" class="with-gap radio-col-green" value=".1" />
                                <label for="radio_pendidikan4">D-III
</label></li>
                                <li>
                                <input name="pendidikan" type="radio" id="radio_pendidikan5" class="with-gap radio-col-green" value=".05" />
                                <label for="radio_pendidikan5">SLTA/D-II/D-I/sederajat
</label></li>
                                <li>
                                <input name="pendidikan" type="radio" id="radio_pendidikan6" class="with-gap radio-col-green" value=".01" />
                                <label for="radio_pendidikan6">Di bawah SLTA
</label></li>
                               
                                </ul>
                                    </p>
                                </section>

                                <h2>KOMPETENSI</h2>
                                <section>
                                    <p>
                                        Data/Informasi Riwayat Pengembangan Kompetensi

                                    </p>
                                    <p>
<table class="table">
<tr>
    <td>1</td>
    <td>Diklatpim (bagi Struktural)</td>
    <td><input name="kompetensi1" type="radio" id="radio_kompetensi1a" class="with-gap radio-col-green" value=".1" />
        <label for="radio_kompetensi1a">Sudah</label>
        <input name="kompetensi1" type="radio" id="radio_kompetensi1b" class="with-gap radio-col-green" value="0" />
        <label for="radio_kompetensi1b">Belum</label></td>
        <td>
            <a href="#" class="btn btn-warning btn-xs waves-effect" data-toggle="tooltip" data-placement="left" title="Unggah Dokumen" >
            <i class="material-icons">file_upload</i>
            </a>
            
            <a href="#" class="btn btn-primary btn-xs waves-effect" data-toggle="tooltip" data-placement="left" title="Lihat Dokumen" >
            <i class="material-icons">pageview</i>
            </a>
            
        </td>
</tr>    
<tr>
    <td>2</td>
    <td>Diklat Fungsional (bagi JF)</td>
    <td><input name="kompetensi2" type="radio" id="radio_kompetensi2a" class="with-gap radio-col-green" value=".1" />
        <label for="radio_kompetensi2a">Sudah</label>
        <input name="kompetensi2" type="radio" id="radio_kompetensi2b" class="with-gap radio-col-green" value="0"/>
        <label for="radio_kompetensi2b">Belum</label></td>
        <td>
            <a href="#" class="btn btn-warning btn-xs waves-effect" data-toggle="tooltip" data-placement="left" title="Unggah Dokumen" >
            <i class="material-icons">file_upload</i>
            </a>
            
            <a href="#" class="btn btn-primary btn-xs waves-effect" data-toggle="tooltip" data-placement="left" title="Lihat Dokumen" >
            <i class="material-icons">pageview</i>
            </a>
            
        </td>
    </tr>    
<tr>
    <td>3</td>
    <td>Diklat Teknis 20 JP</td>
    <td><input name="kompetensi3" type="radio" id="radio_kompetensi3a" class="with-gap radio-col-green" value=".1" />
        <label for="radio_kompetensi3a">Sudah</label>
        <input name="kompetensi3" type="radio" id="radio_kompetensi3b" class="with-gap radio-col-green" value="0" />
        <label for="radio_kompetensi3b">Belum</label></td>
        <td>
            <a href="#" class="btn btn-warning btn-xs waves-effect" data-toggle="tooltip" data-placement="left" title="Unggah Dokumen">
            <i class="material-icons">file_upload</i>
            </a>
            
            <a href="#" class="btn btn-primary btn-xs waves-effect" data-toggle="tooltip" data-placement="left" title="Lihat Dokumen" >
            <i class="material-icons">pageview</i>
            </a>
            
        </td>
</tr>    
<tr>
    <td>4</td>
    <td>Seminar/Workshop/sejenis</td>
    <td><input name="kompetensi4" type="radio" id="radio_kompetensi4a" class="with-gap radio-col-green" value=".1" />
        <label for="radio_kompetensi4a">Sudah</label>
        <input name="kompetensi4" type="radio" id="radio_kompetensi4b" class="with-gap radio-col-green" value="0"/>
        <label for="radio_kompetensi4b">Belum</label></td>
        <td>
            <a href="#" class="btn btn-warning btn-xs waves-effect" data-toggle="tooltip" data-placement="left" title="Unggah Dokumen">
            <i class="material-icons">file_upload</i>
            </a>
            
            <a href="#" class="btn btn-primary btn-xs waves-effect" data-toggle="tooltip" data-placement="left" title="Lihat Dokumen" >
            <i class="material-icons">pageview</i>
            </a>
            
        </td>
</tr>    

</table>
                                
                                    </p>
                                </section>

                                <h2>KINERJA</h2>
                                <section>
                                    <p>
                                        Data/Informasi Hasil Penilaian Kinerja

                                    </p>

                                <a href="#" class="btn btn-success btn-xs waves-effect">
                                    <i class="material-icons">pageview</i>
                                    <span>Lihat Dokumen</span>
                                </a>

                                <a href="#" class="btn btn-warning btn-xs waves-effect" >
                                    <i class="material-icons">file_upload</i>
                                    <span>Unggah Dokumen</span>
                                </a>


<p>
                                    <ol type="a">
    <li>
<input name="kinerja" type="radio" id="radio_kinerja1" class="with-gap radio-col-green" value=".3" />
                                <label for="radio_kinerja1">Sangat Baik (91 - 100)</label></li>
                                <li>
                                <input name="kinerja" type="radio" id="radio_kinerja2" class="with-gap radio-col-green" value=".25" />
                                <label for="radio_kinerja2">Baik (76 - 90)</label></li>
                                <li>
                                <input name="kinerja" type="radio" id="radio_kinerja3" class="with-gap radio-col-green" value=".15" />
                                <label for="radio_kinerja3">Cukup (61 - 75)</label></li>
                                <li>
                                <input name="kinerja" type="radio" id="radio_kinerja4" class="with-gap radio-col-green" value=".1" />
                                <label for="radio_kinerja4">Kurang (51 - 60)</label></li>
                                <li>
                                <input name="kinerja" type="radio" id="radio_kinerja5" class="with-gap radio-col-green" value=".05"/>
                                <label for="radio_kinerja5">Buruk (50 ke bawah)</label></li>
                                
                               
                                </ul>
                            </p>
                                </section>

                                <h2>DISIPLIN</h2>
                                <section>
                                    <p>
                                        Data/Informasi Riwayat Hukuman Disiplin

                                    </p>
                                 
                                <a href="#" class="btn btn-success btn-xs waves-effect">
                                    <i class="material-icons">pageview</i>
                                    <span>Lihat Dokumen</span>
                                </a>

                                <a href="#" class="btn btn-warning btn-xs waves-effect" >
                                    <i class="material-icons">file_upload</i>
                                    <span>Unggah Dokumen</span>
                                </a>
                                    <p>
                                        <table class="table">
<tr>
    <td>1</td>
    <td>Pernah Dikenai Hukuman Disiplin</td>
    <td><input name="disiplin1" type="radio" id="radio_disiplin1" class="with-gap radio-col-green" value="-0.05" />
        <label for="radio_disiplin1">Pernah</label>
        <input name="disiplin1" type="radio" id="radio_disiplin2" class="with-gap radio-col-green" value="0.05"/>
        <label for="radio_disiplin2">Belum</label></td>
</tr>    
<tr>
    <td>2</td>
    <td>Pernah Dikenai Hukuman Disiplin</td>
    <td><input name="disiplin2" type="radio" id="radio_disiplin3" class="with-gap radio-col-green" value="-0.01" />
        <label for="radio_disiplin3">Ringan</label>
        <input name="disiplin2" type="radio" id="radio_disiplin4" class="with-gap radio-col-green" value="-0.02"/>
        <label for="radio_disiplin4">Sedang</label>
        <input name="disiplin2" type="radio" id="radio_disiplin5" class="with-gap radio-col-green" value="-0.03"/>
        <label for="radio_disiplin5">Berat</label>
    </td>
</tr>    
</table>
                                    </p>
                                </section>
                                
                            <!-- </div> -->
                        </div>
                        <button  class="btn bg-teal btn-block btn-lg waves-effect" type="submit" onclick="return confirm('Anda yakin?')">
                            <!-- <?php
                            //if ($ceknilai == TRUE)
                            {?> -->
                               <!--  KIRIM ULANG
                           <?php //}else{?> -->
                                KIRIM
<!--                           <?php  }
                            ?>
 -->                        
                    </button>

                        </form>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Example | Vertical Layout -->
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>