        <div class="container-fluid">


           
            <!-- Basic Table -->
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

                    <div class="card">
                        <div class="header">
                            <h2 class="font-bold col-teal">
                                DAFTAR PEGAWAI OPD <?=strtoupper($this->Munit->get_opd_by_id_opd($id_opd)->row()->Nama_Unit_Kerja)?>
<!--                                 <small>Basic example without any additional modification classes</small>
 -->                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="<?=base_url('export/export_opd/'.$id_opd)?>">Cetak XLS</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="body table-responsive">
                            <div class="js-modal-buttons">
                            <button type="button" class="btn bg-green waves-effect " data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="material-icons">add_circle_outline</i> Data Pegawai</button>
                            </div>
<?php
$pe = $this->session->flashdata('pesan');
if($pe){?>
<div class="alert alert-success"><?=$pe?></div>
<?php }
?>

                            <div class="collapse" id="collapseExample">
                                <div class="card">
<div class="body">
                            <form method="POST" action="<?=base_url('Adminunit/add_officer/'.$id_opd)?>">




                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama">
                                                <label class="form-label">Nama Pegawai</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nip">
                                                <label class="form-label">N.I.P.</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="form-group form-float">
                                                <label class="form-label">Tanggal Lahir</label>
                                            <div class="form-line">
                                                <input type="date" class="form-control" name="tgl_lahir">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="form-group form-float">
                                                <label class="form-label">TMT CPNS</label>
                                            <div class="form-line">
                                                <input type="date" class="form-control" name="tmt_cpns">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="form-group form-float">
                                                <label class="form-label">TMT PNS</label>
                                            <div class="form-line">
                                                <input type="date" class="form-control" name="tmt_pns">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="pendidikan">
                                                <label class="form-label">Pendidikan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="sex">
                                                <label class="form-label">Jenis Kelamin</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="pangkat">
                                                <label class="form-label">Pangkat</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="jabatan">
                                                <label class="form-label">Jabatan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="status">
                                                <label class="form-label">Status</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="id_finger">
                                                <label class="form-label">ID Finger</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<button type="submit" class="btn btn-success btn-lg m-l-15 waves-effect">SIMPAN</button>
                            </form>
                                    
</div>
                                </div>
                            </div>


                            <table class="table table-hover table-condensed" style="font-size: 80%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        
                                        <th>NAMA PEGAWAI</th>
                                        <th>NIP</th>
                                        <th>PANGKAT</th>
                                        <th>JENIS KELAMIN</th>
                                        <th>JABATAN</th>
                                        <th>STATUS</th>
                                        <th>ID FINGER</th>
                                        <th>IPP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$peg = $this->Munit->get_pegawai_by_id_opd($id_opd);

if($peg->num_rows()>0)
{
    $no=1;
    foreach ($peg->result() as $key ) {
        $cekpegawai = $this->Mpegawai->cek_pegawai_aktif_by_id_pegawai($key->id_pegawai);
        ?>
        <tr>
                                        <th scope="row"><?=$no?></th>
                                        
                                        <td><?=$key->Nama_Pegawai?>
                                        <?php
                                        if($cekpegawai == TRUE)
                                        {

                                        if($this->session->userdata('id_opd')==1000){?>
                                        <a class="pull-right btn btn-xs bg-orange waves-effect" href="<?=base_url('Admin/edit_form/'.$key->id_pegawai)?>">Edit</a>

                                        <?php }else{?>

                                        <a class="pull-right btn btn-xs bg-orange waves-effect" href="<?=base_url('Adminunit/edit_form/'.$key->id_pegawai)?>">Edit</a>
                                        <?php }
                                        }
                                        ?>
                                        </td>
                                        <td><?=$key->NIP?></td>
<td><?=$key->Pangkat?></td>
<td><?=$key->Jenis_Kelamin?></td>
<td><?=$key->Jabatan?>
<td><?=$key->Status_Aktif?></td>
<td><?=$key->ID_Finger?></td>
<td>
     <?php
$ceknilai = $this->Mpegawai->cek_nilai($key->id_pegawai);

if($cekpegawai == TRUE)
{

if($ceknilai == TRUE)
{
    if($this->session->userdata('id_opd')==1000){?>
<a class="btn btn-xs bg-blue waves-effect" href="<?=base_url('Admin/form/'.$key->id_pegawai)?>">Lihat NILAI</a>
    <?php }else{?>
<a class="btn btn-xs bg-blue waves-effect" href="<?=base_url('Adminunit/form/'.$key->id_pegawai)?>">Lihat NILAI</a>
    <?php }?>
<?php }else{
    if($this->session->userdata('id_opd')==1000){?>
    <a class="btn btn-xs bg-green waves-effect" href="<?=base_url('Admin/form/'.$key->id_pegawai)?>">NILAI!</a>
    <?php }else{?>
    <a class="btn btn-xs bg-green waves-effect" href="<?=base_url('Adminunit/form/'.$key->id_pegawai)?>">NILAI!</a>
    <?php }?>
<?php }
}
?>


</td>


                                    </tr>
<?php    $no++;}
}
                                    ?>
                                    
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
              
           
        </div>
    