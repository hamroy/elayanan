<!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                UBAH PASSWORD ADMIN OPD
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
                            $cek = $this->Muser->get_user_by_id_unit($id_opd);
                            ?>
                            <form method="POST" action="<?=base_url('Adminunit/pass_exchange/'.$id_opd)?>">
                                <label for="email_address">Username</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address" class="form-control" name="user" placeholder="Username" value="<?=$cek->row()->user?>">
                                    </div>
                                </div>
                                <label for="password">Password</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="password" class="form-control" placeholder="Password" name="pass" value="<?=$cek->row()->pass?>">
                                    </div>
                                </div>

                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect" onclick="return confirm('Perubahan Username atau Password akan menyebabkan Anda keluar dari aplikasi ini. Anda yakin?')">SIMPAN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->