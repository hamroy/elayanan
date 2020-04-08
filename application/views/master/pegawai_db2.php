<div class="page-wrapper">
        
            <div class="page-breadcrumb">
                <div class="d-flex align-items-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-0"><?=$judul?></h4>
                    <div class="ml-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item text-muted active" aria-current="page">Beranda</li>
                                <li class="breadcrumb-item text-muted" aria-current="page"><?=$judul?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                    <div class="well">
                    <a href="#" class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Tambah Data</a>
                    </div>
                        <div class="card">
                            <div class="card-body">
                              <?php
                              $message = $this->session->flashdata('pesan');
                              echo $message == '' ? '' : '<div class="alert alert-success" ><button type="button" class="close" data-dismiss="alert">&times;</button><p class="h4"><b>' . $message . '</b></p></div>';
                              ?>
                                <table class="table table-striped table-bordered">
                                    <tr>    
                                            <th colspan="5">
                                                <div class="row">
                                                  <div class="col-md-8">
                                                      <form method="get">
                                                        <div class="input-group">
                                                          <input type="Search" class="form-control" name="strnama" placeholder="Nama <?=$judul?>...">
                                                          <span class="input-group-btn">
                                                            <button  class="btn btn-primary" type="submit">Cari</button>
                                                          </span>
                                                        </div><!-- /input-group -->
                                                        </form>
                                                  </div>
                                                  <div class="col-md-4 pull-left">
                                                    
                                                </div>
                                                </div>
                                        
                                        
                                        </th>
                                          </tr>
                                          <tr>
                                        <th  style="background-color: gainsboro;"><font>NIP</font></th>
                                        <th  style="background-color: gainsboro;"><font>NAMA</font></th>
                                        <th  style="background-color: gainsboro;"><font>PANGKAT</font></th>
                                        <th  style="background-color: gainsboro;"><font>JABATAN</font></th>
                                        </th><th width="16%" style="background-color: gainsboro;"><font>Menu</font></th>
                                          </tr>

                                          <?php 
                                            foreach ($sql->result_array() as $tampil){
                                              $tm_cariP=$this->M_master->getPangkatId($tampil['Pangkat'])->row_array();
                                             ?> 
                                                <tr>
                                                  <td><font size=""><?php echo $tampil['NIP']?></font></td>
                                                  <td><font size=""><?php echo $tampil['Nama_Pegawai']?></font></td>
                                                  <td><font size=""><?php echo $tampil['Pangkat']?></font></td>
                                                  <td><font size=""><?php echo $tampil['Jabatan']?></font></td>
                                                  <td>
                                                    <a href="#" class='open_modal' id='<?php echo  $tampil['id_pegawai']; ?>'><i class="fa fa-edit"> Edit</i></a>            
                                                    <?php
                                                    $akses=$this->session->userdata('lvl_akses');
                                                    if ($akses==1) {
                                                        ?>
                                                        <a href="#" 
                                                    onclick="confirm_modal('<?=base_url()?>C_master/pegawaiDel?&modal_id=<?=$tampil['id_pegawai']?>');"><i class="fa fa-times-circle"> Hapus</i></a>
                                                        <?php
                                                    }
                                                    ?>
                                                    
                                                  </td>
                                                </tr>
                                             <?php
                                            }
                                          ?>
                                        </table>
                                
                                
                            </div>
                        </div>
            </div>
        </div>
<!-- Modal Popup untuk Add--> 
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Input <?=$judul?></h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>

        <div class="modal-body">
          <form action="<?=base_url()?>C_master/pegawai_save" name="modal_popup" enctype="multipart/form-data" method="POST">

    <table class="table1" width="100%">
      <tr>
        <td width="30%"><b>NIP :</b></td>
        <td width="70%"><b>Nama Pegawai :</b></td>
      </tr>
      <tr>
        <td width="30%"><input type="text" name="txtnip"  class="form-control" /></td>
        <td width="70%"><input type="text" name="txtnm"  class="form-control" required/></td>
      </tr>
      <tr>
        <td colspan="2"><b>Jabatan :</b></td>
      </tr>
      <tr>
        <td colspan="2">
          <select name="cbojabatan" id="cbojabatan" class="form-control">
            <option value=""></option>
            <?php
                    $sql_row=$this->M_master->getJabatan();
                    foreach ($sql_row->result_array() as $sql_res)
                      {
            ?>
            <option value="<?php echo $sql_res["idj"]; ?>"><?php echo $sql_res["nmj"]; ?></option>
                  <?php
                    }
                  ?>
          </select>
        </td>
      </tr>

      <tr>
        <td colspan="2"><b>Pangkat :</b></td>
      </tr>
      <tr>
        <td colspan="2">
          <select name="pangkat" id="pangkat" class="form-control">
            <option value=""></option>
            <?php
            $sql_row=$this->M_master->getPangkat();
            foreach ($sql_row->result_array() as $sql_res)
              {
            ?>
            <option value="<?php echo $sql_res["id"]; ?>"><?php echo $sql_res["nm_pangkat"]; ?></option>
                  <?php
                    }
                  ?>
          </select>
        </td>
      </tr>
    </table>

<br>

              <div class="modal-footer">
                  <button class="btn btn-success" type="submit">
                      Confirm
                  </button>

                  <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Cancel
                  </button>
              </div>

              </form>

           

            </div>

           
        </div>
    </div>
</div>

<!-- Modal Popup untuk Edit--> 
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- Modal Popup untuk delete--> 
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Hapus <?=$judul?></h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>

        <div class="modal-body">
      
        <h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
      
      
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>

      </div>
    </div>
  </div>
</div>

<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id_pegawai");
       $.ajax({
             url: "<?=base_url()?>C_master/pegawaiEdit",
             type: "GET",
             data : {modal_id: m,},
             success: function (ajaxData){
               $("#ModalEdit").html(ajaxData);
               $("#ModalEdit").modal('show',{backdrop: 'true'});
             }
           });
        });
      });
</script>

<!-- Javascript untuk popup modal Delete--> 
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>