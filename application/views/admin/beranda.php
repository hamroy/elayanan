
        <div class="container-fluid">
            
            <!-- Body Copy -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SELAMAT DATANG SUPERADMIN
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
                            <p>
                               

<!-- Aplikasi Indeks Profesionalitas Pegawai (IPP) sebagai implementasi Peraturan Badan Kepegawaian Negera Republik Indonesia Nomor: 8 Tahun 2019 tentang Pedoman Tata Cara Pelaksanaan Pengukuran Indeks Profesionalitas Aparatur Sipil Negara.
 -->
                            </p>
                            <p>
<!--                                 Penyusunan indeks profesionalitas (IP) aparatur sipil negara (ASN) atau Pegawai Negeri Sipil (PNS) menjadi agenda prioritas nasional yang ditetapkan pemerintah lewat Peraturan Presiden Nomor 2 Tahun 2015 tentang Rencana Pembangunan Jangka Menengah Nasional (RPJMN) 2015 – 2019. 
Untuk itu tahun ini BKPP menargetkan IP seluruh ASN dapat terukur secara objektif lewat program Aplikasi IPP.
 -->
                            </p>
                            <p><!-- Terima Kasih --></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">

<div class="demo-switch">
    <form method="post" action="<?=base_url('admin/set_on_off/'.$on_off)?>">
    <div class="switch">
        <b>STATUS APLIKASI IPP :</b>&nbsp;&nbsp;&nbsp;
        <label>TUTUP<input type="checkbox" value="<?=$on_off?>" <?php if($on_off=='open') echo "checked='checked'"; ?> ><span class="lever"></span>BUKA</label>
    </div>
    &nbsp;&nbsp;&nbsp;
    <button type="submit" class="btn bg-teal waves-effect">SET!</button>
    </form>
    <?php 
    if(! empty($this->session->flashdata('pesan')))
    {
    echo $this->session->flashdata('pesan');    
    }
    ?>
</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Body Copy -->
           
        </div>