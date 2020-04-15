<div class="container-fluid">
    <a  class="btn bg-green waves-effect" href="<?=base_url('adminunit/opd/'.$id_opd)?>">
                                    <i class="material-icons">arrow_back</i>
                                    <span>KEMBALI</span>
                                </a>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-4">
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                                <img src="../../img/avatar.jpg" width="100" alt="AdminBSB - Profile Image" />
                            </div>
                            <div class="content-area">
                                <h3><?=$pegawai->row()->Nama_Pegawai?></h3>
                                <p><?=$pegawai->row()->NIP?></p>
                                <p><?=$pegawai->row()->Jabatan?></p>
                            </div>
                        </div>
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
                <div class="col-xs-12 col-sm-8">
                    <?php
                        $ceknilai = $this->Mpegawai->cek_nilai($pegawai->row()->id_pegawai);
                        if($ceknilai == TRUE)
                        {
                            $nkualifikasi = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kualifikasi;
                            $nkompetensi = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kompetensi1 + $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kompetensi2 + $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kompetensi3 + $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kompetensi4;
                            $nkinerja = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kinerja;
                            $ndisiplin = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_disiplin1 + $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_disiplin2;
                            $nilai = ($nkualifikasi + $nkompetensi + $nkinerja + $ndisiplin)*100;
                            ?>
 <div class="card">
                        <div class="body">
                            <table class="table table-bordered text-center">
                                <tr>
                                    <td><b>KUALIFIKASI</b></td>
                                    <td><b>KOMPETENSI</b></td>
                                    <td><b>KINERJA</b></td>
                                    <td><b>DISIPLIN</b></td>
                                    <td><b>NILAI IP</b></td>

                                </tr>
                                <tr>
                                    <td><?=$nkualifikasi?></td>
                                    <td><?=$nkompetensi?></td>
                                    <td><?=$nkinerja?></td>
                                    <td><?=$ndisiplin?></td>
                                    <td><?=$nilai?>%</td>


                                </tr>
                            </table>
                        </div>
                    </div>
                     <?php   }
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
                                if($ceknilai == TRUE)
                        {?>
                            <form method="post" action="<?=base_url('adminunit/menilaiulang/'.$pegawai->row()->id_pegawai)?>">
                       <?php }else{?>
                          <form method="post" action="<?=base_url('adminunit/menilai/'.$pegawai->row()->id_pegawai)?>">  
                      <?php  }
                        ?>
                         
                         
                        <div class="body">
<!--                             <div id="wizard_vertical"> -->
                               
                                <h2>KUALIFIKASI</h2>

                                <section>
                                    <p>Data/Informasi Riwayat Jenjang Pendidikan Formal </p>
                                    <p>
<ul>
    <li>
<input name="pendidikan" type="radio" id="radio_pendidikan1" class="with-gap radio-col-green" value=".25" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kualifikasi;
                                    if($q == 0.25){
                                        echo 'checked';
                                    }
                                }?>/>
                                <label for="radio_pendidikan1">S-3
</label></li>
                                <li>
                                <input name="pendidikan" type="radio" id="radio_pendidikan2" class="with-gap radio-col-green" value=".2" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kualifikasi;
                                    if($q == 0.2){
                                        echo 'checked';
                                    }
                                }?>/>
                                <label for="radio_pendidikan2">S-2
</label></li>
                                <li>
                                <input name="pendidikan" type="radio" id="radio_pendidikan3" class="with-gap radio-col-green" value=".15" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kualifikasi;
                                    if($q == 0.15){
                                        echo 'checked';
                                    }
                                }?>/>
                                <label for="radio_pendidikan3">S-1/D-IV
</label></li>
                                <li>
                                <input name="pendidikan" type="radio" id="radio_pendidikan4" class="with-gap radio-col-green" value=".1" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kualifikasi;
                                    if($q == 0.1){
                                        echo 'checked';
                                    }
                                }?>/>
                                <label for="radio_pendidikan4">D-III
</label></li>
                                <li>
                                <input name="pendidikan" type="radio" id="radio_pendidikan5" class="with-gap radio-col-green" value=".05" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kualifikasi;
                                    if($q == 0.05){
                                        echo 'checked';
                                    }
                                }?>/>
                                <label for="radio_pendidikan5">SLTA/D-II/D-I/sederajat
</label></li>
                                <li>
                                <input name="pendidikan" type="radio" id="radio_pendidikan6" class="with-gap radio-col-green" value=".01" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kualifikasi;
                                    if($q == 0.01){
                                        echo 'checked';
                                    }
                                }?>/>
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
    <td><input name="kompetensi1" type="radio" id="radio_kompetensi1a" class="with-gap radio-col-green" value=".1" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kompetensi1;
                                    if($q == 0.1){
                                        echo 'checked';
                                    }
                                }?>/>
        <label for="radio_kompetensi1a">Sudah</label>
        <input name="kompetensi1" type="radio" id="radio_kompetensi1b" class="with-gap radio-col-green" value="0" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kompetensi1;
                                    if($q == 0){
                                        echo 'checked';
                                    }
                                }?>/>
        <label for="radio_kompetensi1b">Belum</label></td>
        <td>
            <a href="javascript:void(0)" class="btn btn-warning btn-xs waves-effect" data-toggle="tooltip" data-placement="left" title="Unggah Dokumen" disabled>
            <i class="material-icons">file_upload</i>
            </a>
            
            <a href="javascript:void(0)" class="btn btn-primary btn-xs waves-effect" data-toggle="tooltip" data-placement="left" title="Lihat Dokumen" disabled>
            <i class="material-icons">pageview</i>
            </a>
            
        </td>
</tr>    
<tr>
    <td>2</td>
    <td>Diklat Fungsional (bagi JF)</td>
    <td><input name="kompetensi2" type="radio" id="radio_kompetensi2a" class="with-gap radio-col-green" value=".1" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kompetensi2;
                                    if($q == 0.1){
                                        echo 'checked';
                                    }
                                }?>/>
        <label for="radio_kompetensi2a">Sudah</label>
        <input name="kompetensi2" type="radio" id="radio_kompetensi2b" class="with-gap radio-col-green" value="0" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kompetensi2;
                                    if($q == 0){
                                        echo 'checked';
                                    }
                                }?>/>
        <label for="radio_kompetensi2b">Belum</label></td>
        <td>
            <a href="javascript:void(0)" class="btn btn-warning btn-xs waves-effect" data-toggle="tooltip" data-placement="left" title="Unggah Dokumen" disabled>
            <i class="material-icons">file_upload</i>
            </a>
            
            <a href="javascript:void(0)" class="btn btn-primary btn-xs waves-effect" data-toggle="tooltip" data-placement="left" title="Lihat Dokumen" disabled>
            <i class="material-icons">pageview</i>
            </a>
            
        </td>
    </tr>    
<tr>
    <td>3</td>
    <td>Diklat Teknis 20 JP</td>
    <td><input name="kompetensi3" type="radio" id="radio_kompetensi3a" class="with-gap radio-col-green" value=".1" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kompetensi3;
                                    if($q == 0.1){
                                        echo 'checked';
                                    }
                                }?>/>
        <label for="radio_kompetensi3a">Sudah</label>
        <input name="kompetensi3" type="radio" id="radio_kompetensi3b" class="with-gap radio-col-green" value="0" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kompetensi3;
                                    if($q == 0){
                                        echo 'checked';
                                    }
                                }?>/>
        <label for="radio_kompetensi3b">Belum</label></td>
        <td>
            <a href="javascript:void(0)" class="btn btn-warning btn-xs waves-effect" data-toggle="tooltip" data-placement="left" title="Unggah Dokumen" disabled>
            <i class="material-icons">file_upload</i>
            </a>
            
            <a href="javascript:void(0)" class="btn btn-primary btn-xs waves-effect" data-toggle="tooltip" data-placement="left" title="Lihat Dokumen" disabled>
            <i class="material-icons">pageview</i>
            </a>
            
        </td>
</tr>    
<tr>
    <td>4</td>
    <td>Seminar/Workshop/sejenis</td>
    <td><input name="kompetensi4" type="radio" id="radio_kompetensi4a" class="with-gap radio-col-green" value=".1" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kompetensi4;
                                    if($q == 0.1){
                                        echo 'checked';
                                    }
                                }?>/>
        <label for="radio_kompetensi4a">Sudah</label>
        <input name="kompetensi4" type="radio" id="radio_kompetensi4b" class="with-gap radio-col-green" value="0" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kompetensi4;
                                    if($q == 0){
                                        echo 'checked';
                                    }
                                }?>/>
        <label for="radio_kompetensi4b">Belum</label></td>
        <td>
            <a href="javascript:void(0)" class="btn btn-warning btn-xs waves-effect" data-toggle="tooltip" data-placement="left" title="Unggah Dokumen" disabled>
            <i class="material-icons">file_upload</i>
            </a>
            
            <a href="javascript:void(0)" class="btn btn-primary btn-xs waves-effect" data-toggle="tooltip" data-placement="left" title="Lihat Dokumen" disabled>
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
<p>
                                    <ol type="a">
    <li>
<input name="kinerja" type="radio" id="radio_kinerja1" class="with-gap radio-col-green" value=".3" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kinerja;
                                    if($q == 0.3){
                                        echo 'checked';
                                    }
                                }?>/>
                                <label for="radio_kinerja1">Sangat Baik (91 - 100)</label></li>
                                <li>
                                <input name="kinerja" type="radio" id="radio_kinerja2" class="with-gap radio-col-green" value=".25" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kinerja;
                                    if($q == 0.25){
                                        echo 'checked';
                                    }
                                }?>/>
                                <label for="radio_kinerja2">Baik (76 - 90)</label></li>
                                <li>
                                <input name="kinerja" type="radio" id="radio_kinerja3" class="with-gap radio-col-green" value=".15" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kinerja;
                                    if($q == 0.15){
                                        echo 'checked';
                                    }
                                }?>/>
                                <label for="radio_kinerja3">Cukup (61 - 75)</label></li>
                                <li>
                                <input name="kinerja" type="radio" id="radio_kinerja4" class="with-gap radio-col-green" value=".1" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kinerja;
                                    if($q == 0.1){
                                        echo 'checked';
                                    }
                                }?>/>
                                <label for="radio_kinerja4">Kurang (51 - 60)</label></li>
                                <li>
                                <input name="kinerja" type="radio" id="radio_kinerja5" class="with-gap radio-col-green" value=".05" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_kinerja;
                                    if($q == 0.05){
                                        echo 'checked';
                                    }
                                }?>/>
                                <label for="radio_kinerja5">Buruk (50 ke bawah)</label></li>
                                
                               
                                </ul>
                            </p>
                                </section>

                                <h2>DISIPLIN</h2>
                                <section>
                                    <p>
                                        Data/Informasi Riwayat Hukuman Disiplin

                                    </p>
                                 
                                <a href="<?=base_url('Gambar/index/'.$pegawai->row()->id_pegawai)?>" class="btn btn-success btn-xs waves-effect">
                                    <i class="material-icons">pageview</i>
                                    <span>Lihat Dokumen</span>
                                </a>

                                <a href="<?=base_url('Gambar/tambah/'.$pegawai->row()->id_pegawai)?>" class="btn btn-warning btn-xs waves-effect">
                                    <i class="material-icons">file_upload</i>
                                    <span>Unggah Dokumen</span>
                                </a>
                                    <p>
                                        <table class="table">
<tr>
    <td>1</td>
    <td>Pernah Dikenai Hukuman Disiplin</td>
    <td><input name="disiplin1" type="radio" id="radio_disiplin1" class="with-gap radio-col-green" value="-0.05" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_disiplin1;
                                    if($q == -0.05){
                                        echo 'checked';
                                    }
                                }?>/>
        <label for="radio_disiplin1">Pernah</label>
        <input name="disiplin1" type="radio" id="radio_disiplin2" class="with-gap radio-col-green" value="0.05" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_disiplin1;
                                    if($q == 0.05){
                                        echo 'checked';
                                    }
                                }?>/>
        <label for="radio_disiplin2">Belum</label></td>
</tr>    
<tr>
    <td>2</td>
    <td>Pernah Dikenai Hukuman Disiplin</td>
    <td><input name="disiplin2" type="radio" id="radio_disiplin3" class="with-gap radio-col-green" value="-0.01" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_disiplin2;
                                    if($q == -0.01){
                                        echo 'checked';
                                    }
                                }?>/>
        <label for="radio_disiplin3">Ringan</label>
        <input name="disiplin2" type="radio" id="radio_disiplin4" class="with-gap radio-col-green" value="-0.02" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_disiplin2;
                                    if($q == -0.02){
                                        echo 'checked';
                                    }
                                }?>/>
        <label for="radio_disiplin4">Sedang</label>
        <input name="disiplin2" type="radio" id="radio_disiplin5" class="with-gap radio-col-green" value="-0.03" <?php if($ceknilai == TRUE)
                                {
                                    $q = $this->Mpegawai->get_nilai_by_id($pegawai->row()->id_pegawai)->row()->nilai_disiplin2;
                                    if($q == -0.03){
                                        echo 'checked';
                                    }
                                }?>/>
        <label for="radio_disiplin5">Berat</label>
    </td>
</tr>    
</table>
                                    </p>
                                </section>
                                
                            <!-- </div> -->
                        </div>
                        <button  class="btn bg-teal btn-block btn-lg waves-effect" type="submit" onclick="return confirm('Anda yakin?')">
                            <?php
                            if ($ceknilai == TRUE)
                            {?>
                                KIRIM ULANG
                           <?php }else{?>
                                KIRIM
                          <?php  }
                            ?>
                        
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