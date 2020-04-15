<?php $this->load->view('unit/header')?>

<body class="theme-green">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.html">APLIKASI <?=strtoupper($this->Minfo->show()->row()->nama_aplikasi)?> &middot; DINAS PENDIDIKAN KAB. NATUNA (<?=strtoupper($this->Minfo->show()->row()->singkatan_aplikasi)?>)</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">

            <?php $this->load->view('unit/sidebar')?>
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
<?php $this->load->view($content)?>        
    </section>

    <!-- Jquery Core Js -->
    <script src="<?=base_url()?>plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?=base_url()?>plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?=base_url()?>plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?=base_url()?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="<?=base_url()?>plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="<?=base_url()?>plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="<?=base_url()?>plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?=base_url()?>plugins/node-waves/waves.js"></script>
    <!-- Bootstrap Notify Plugin Js -->
    <script src="<?=base_url()?>plugins/bootstrap-notify/bootstrap-notify.js"></script>
    <!-- Custom Js -->
    <script src="<?=base_url()?>js/admin.js"></script>
    <script src="<?=base_url()?>js/pages/forms/form-wizard.js"></script>
    <script src="<?=base_url()?>js/pages/ui/modals.js"></script>
    <!-- Moment Plugin Js -->
    <script src="<?=base_url()?>plugins/momentjs/moment.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="<?=base_url()?>plugins/dropzone/dropzone.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?=base_url()?>plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="<?=base_url()?>plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <script src="<?=base_url()?>js/pages/forms/basic-form-elements.js"></script>
    <script src="<?=base_url()?>js/pages/ui/notifications.js"></script>
    <!-- Chart Plugins Js -->
    <script src="<?=base_url()?>plugins/chartjs/Chart.bundle.js"></script>    
    <script src="<?=base_url()?>js/pages/charts/chartjs.js"></script>
    <script src="<?=base_url()?>js/pages/ui/tooltips-popovers.js"></script>

    <!-- Demo Js -->
    <script src="<?=base_url()?>js/demo.js"></script>
</body>
</html>
