
        <div class="container-fluid">
           
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DAFTAR ADMIN OPD
                                <small>Basic example without any additional modification classes</small>
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
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>KODE</th>
                                        <th>NAMA UNIT</th>
                                        <th>PENGGUNA ANGGARAN</th>
                                        <th>USERNAME</th>
                                        <th>PASSWORD</th>
                                        <th width="15%">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$odp = $this->Munit->show();
if($odp->num_rows()>0)
{
    $no=1;
    foreach ($odp->result() as $key ) {
        $q1 = $this->Muser->get_user_by_id_unit($key->id_opd);
        if($q1->num_rows()>0)
        {
            $u = $q1->row()->user;
            $p = $q1->row()->pass;
            $button = '<a href="#" data-toggle="modal" data-target="#defaultModal_'.$no.'">Edit</a>';
        }else{
            $u = $p = '';
            //cek data pegawai per opd
            $cek = $this->Munit->cek_pegawai_by_id_opd($key->id_opd);
            if($cek == TRUE)
            {
                //belum ada kode unit kerja
                if($this->Munit->get_opd_by_id_opd($key->id_opd)->row()->Kode_Unit_Kerja)
                {

                //daftar password untuk admin opd
                $button = '<a href="'.base_url('Admin/daftarkan/'.$key->id_opd).'" onclick="return confirm("Anda Yakin?")">Daftarkan</a>';                
            }else{
                $button = '<a href="#" data-toggle="modal" data-target="#Modal_'.$no.'">Edit Kode Unit</a>';
            }
            }else{
                $button = 'Daftarkan';
            }
        }
        ?>
        <tr>
                                        <th scope="row"><?=$no?></th>
                                        <td><?=$key->Kode_Unit_Kerja?></td>
                                        <td><?=$key->Nama_Unit_Kerja?></td>
                                        <td><?=$key->id_opd?></td>
<td><?=$u?></td>
<td><?=$p?></td>
<td><?=$button?>
        <div class="modal fade" id="defaultModal_<?=$no?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Username dan Password OPD</h4>
                        </div>
                <form method="post" action="<?=base_url('admin/daftarkan/'.$key->id_opd)?>">
                        <div class="modal-body">                            
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Username" value="<?=$u?>" name="ubahuser">
                                            </div>
                                            <small>Username</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Password" value="<?=$p?>" name="ubahpass">
                                            </div>
                                            <small>Password</small>
                                        </div>
                                    </div>
                                   
                                </div>
            <!-- #END# Inline Layout -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link waves-effect">SIMPAN</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">BATAL</button>
                        </div>
                </form>

                    </div>
                </div>
        </div>        

        <div class="modal fade" id="Modal_<?=$no?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Kode OPD: <?=$key->Nama_Unit_Kerja?></h4>
                        </div>
                <form method="post" action="<?=base_url('admin/editkode/'.$key->id_opd)?>">
                        <div class="modal-body">                            
                                <div class="row clearfix">
                                    
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Kode Unit Kerja" value="<?=$key->Kode_Unit_Kerja?>" name="editkode">
                                            </div>
                                            <small>Kode Unit Kerja</small>
                                        </div>
                                                                    
                                </div>
            <!-- #END# Inline Layout -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link waves-effect">SIMPAN</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">BATAL</button>
                        </div>
                </form>

                    </div>
                </div>
        </div>        
<!-- tombol LIhat daftar pegawai per opd -->
<a href="<?=base_url('Admin/pegawai/'.$key->id_opd)?>" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat Pegawai"><i class="material-icons">chevron_right</i></a>
<!-- end tombol LIhat daftar pegawai per opd -->
<!-- tombol mutasi pegawai per opd -->
<a href="<?=base_url('Admin/mutasi/'.$key->id_opd)?>" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Mutasi Pegawai"><i class="material-icons">rotate_90_degrees_ccw</i></a>
<!-- end tombol mutasi pegawai per opd -->
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
    