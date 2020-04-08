        <div class="container-fluid">


           
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="body table-responsive">
                            <div class="js-modal-buttons">
                            <a href="<?=base_url('Admin/opd/'.$id_opd)?>" class="btn bg-green waves-effect"  title="Kembali"><i class="material-icons">chevron_left</i> Kembali</a>

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
        
        ?>
        <tr>
                                        <th scope="row"><?=$no?></th>
                                        
                                        <td><?=$key->Nama_Pegawai?></td>
                                        <td><?=$key->NIP?></td>
<td><?=$key->Pangkat?></td>
<td><?=$key->Jenis_Kelamin?></td>
<td><?=$key->Jabatan?>
<td><?=$key->Status_Aktif?></td>
<td><?=$key->ID_Finger?></td>
<td>
     <?php
$ceknilai = $this->Mpegawai->cek_nilai($key->id_pegawai);
if($ceknilai == TRUE)
{?>
<a class="btn btn-xs bg-blue waves-effect" href="<?=base_url('adminunit/form/'.$key->id_pegawai)?>">Lihat NILAI</a>
<?php }else{?>
    <a class="btn btn-xs bg-green waves-effect" href="<?=base_url('adminunit/form/'.$key->id_pegawai)?>">NILAI!</a>
<?php }
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
    