<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Selamat Datang di Aplikasi <?=$this->Minfo->show()->row()->nama_aplikasi?> | DISDIK - PEMKAB NATUNA</title>
    <!-- Favicon-->
    <link rel="icon" href="<?=base_url()?>favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <?php $this->load->view('content_css')?>

</head>