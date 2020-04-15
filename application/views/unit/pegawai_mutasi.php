 <!-- Advanced Select -->
            <div class="row clearfix">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-indigo">face</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH PEGAWAI</div>
                            <div class="number count-to" data-from="0" data-to="<?=$this->Munit->jumlah_pegawai_per_opd($id_opd)?>" data-speed="1000" data-fresh-interval="20"><?=$this->Munit->jumlah_pegawai_per_opd($id_opd)?></div>
                        </div>

                        <div class="icon">
                            <i class="material-icons col-indigo">face</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH PEGAWAI AKTIF</div>
                            <div class="number count-to" data-from="0" data-to="<?=$this->Munit->jumlah_pegawai_aktif_per_opd($id_opd)?>" data-speed="1000" data-fresh-interval="20"><?=$this->Munit->jumlah_pegawai_aktif_per_opd($id_opd)?></div>
                        </div>

                        <div class="icon">
                            <i class="material-icons col-indigo">face</i>
                        </div>
                        <div class="content">
                            <div class="text">SUDAH IPP (<?=number_format($this->Mpegawai->jumlah_pegawai_sudah_isi_ipp_per_opd($id_opd)/$this->Munit->jumlah_pegawai_aktif_per_opd($id_opd)*100,2)?>%)</div>
                            <div class="number count-to" data-from="0" data-to="<?=$this->Mpegawai->jumlah_pegawai_sudah_isi_ipp_per_opd($id_opd)?>" data-speed="1000" data-fresh-interval="20"><?=$this->Mpegawai->jumlah_pegawai_sudah_isi_ipp_per_opd($id_opd)?> </div>
                        </div>

                        <div class="icon">
                            <i class="material-icons col-indigo">face</i>
                        </div>
                        <div class="content">
                            <div class="text">BELUM IPP (<?=number_format(($this->Munit->jumlah_pegawai_aktif_per_opd($id_opd) - $this->Mpegawai->jumlah_pegawai_sudah_isi_ipp_per_opd($id_opd))/$this->Munit->jumlah_pegawai_aktif_per_opd($id_opd)*100,2)?>%)</div>
                            <div class="number count-to" data-from="0" data-to="<?=($this->Munit->jumlah_pegawai_aktif_per_opd($id_opd) - $this->Mpegawai->jumlah_pegawai_sudah_isi_ipp_per_opd($id_opd))?>" data-speed="1000" data-fresh-interval="20"><?=($this->Munit->jumlah_pegawai_aktif_per_opd($id_opd) - $this->Mpegawai->jumlah_pegawai_sudah_isi_ipp_per_opd($id_opd))?></div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- #END# Advanced Select -->

            <a href="<?=base_url('admin/opd/')?>"  class="btn btn-primary waves-effect">
                <i class="material-icons">keyboard_arrow_left</i>
                <span>KEMBALI</span>
            </a>
            <!-- Inline Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="col-green">
                                MUTASI PEGAWAI OPD <?=strtoupper($this->Munit->get_opd_by_id_opd($id_opd)->row()->Nama_Unit_Kerja)?>
                                <!-- <small>With floating label</small> -->
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
                            <?php
                            $pesan = $this->session->flashdata('pesan');
                            echo ! empty($pesan)? '<div class="alert alert-success">'.
                                $pesan.'</div>' :'';
                            ?>
                            <form method="post" action="<?=base_url('admin/mutasikan/'.$id_opd)?>">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                
                                        <?php
                                        $daftarpeg = $this->Mpegawai->get_pegawai_by_id_opd($id_opd);
                                        //$daftarpegjson = $this->Mpegawai->get_json_pegawai_by_id_opd($id_opd);
                                        ?>
                                    <select class="form-control show-tick" data-live-search="true" name="pegawai" required>
                                        <option value="0">Pilih Pegawai</option>


                                        <?php
                                        if($daftarpeg->num_rows()>0)
                                        {
                                            foreach ($daftarpeg->result() as $key) {?>
                                        <option value="<?=$key->id_pegawai?>"><?=$key->Nama_Pegawai?></option>
                                        <?php    }
                                        }else{?>
                                        <option value="0">Tidak ada pegawai</option>
                                        <?php }

                                        ?>
                                    </select>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                
<?php
                                        $daftaropd = $this->Munit->show_except_this_opd($id_opd);
                                        //$daftarpegjson = $this->Mpegawai->get_json_pegawai_by_id_opd($id_opd);
                                        ?>
                                    <select class="form-control show-tick" data-live-search="true" name="opd" required>
                                        <option value="0">Mutasi ke OPD :</option>


                                        <?php
                                        if($daftaropd->num_rows()>0)
                                        {
                                            foreach ($daftaropd->result() as $key) {?>
                                        <option value="<?=$key->id_opd?>"><?=$key->Nama_Unit_Kerja?></option>
                                        <?php    }
                                        }

                                        ?>
                                    </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <button type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" onclick="return confirm('Anda yakin akan MUTASI?')">SIMPAN</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Inline Layout | With Floating Label -->