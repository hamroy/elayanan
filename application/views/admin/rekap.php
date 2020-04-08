
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                REKAP IPP
                                <small>Seluruh Pegawai se-Kabupaten Natuna. Menu Download versi EXCEL ada di tombol kanan. </small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="<?=base_url('export/export')?>">Unduh versi XLS</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                            <th>Jabatan</th>
                                            <th>Unit Kerja</th>
                                            <th>Nilai IPP</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                            <th>Jabatan</th>
                                            <th>Unit Kerja</th>
                                            <th>Nilai IPP</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
<?php
if($pegawai->num_rows()>0)
{   $no=1;
    foreach ($pegawai->result() as $key ) {?>
        
                                        <tr>
                                            <td><?=$no?></td>
                                            <td><?=$key->Nama_Pegawai?></td>
                                            <td><?=$key->NIP?></td>
                                            <td><?=$key->Jabatan?></td>
                                            <td><?=$this->Munit->get_opd_by_id_opd($key->id_opd)->row()->Nama_Unit_Kerja?></td>
                                            <td><?=$this->Mpegawai->get_nilai_ipp_by_id_pegawai($key->id_pegawai)?></td>
                                        </tr>
<?php     $no++;}
}
?>                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>