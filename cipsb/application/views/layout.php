<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>PSB - SMP Putih Biru</title>
    <link rel="shortcut icon" href="<?php echo base_url('asset/img/psb_icon.png');?>" />
    <link href="<?php echo base_url('asset/bootstrap_3_2_0/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/bootstrap_3_2_0/css/bootstrap-theme.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/hovernav/hovernav.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/bootstrap_datepicker/css/datepicker.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/style.css'); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('asset/html5shiv/html5shiv.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/respond/respond.min.js'); ?>"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">

    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h1>Program Absensi SMA Abu-abu</h1>
                    <img src="<?php echo base_url('asset/img/header.png');?>">
                </div>
                <div class="col-xs-12 col-md-6">
                    <address>
                        <strong>SMP Putih Biru</strong><br>
                        Jalan Raya Pasirian No 17, Pasirian, Lumajang, Jawa Timur, 67372 <br>
                        Telepon 0334-123456. Email: admin@smpputihbiru.sch.id<br>
                    </address>
                </div>
            </div>
        </div>
    </div>

    <div id="navigasi">
    <?php
        $login_status = $this->session->userdata('login_status');
        $user_level = $this->session->userdata('user_level');
        if ($login_status === true && $user_level == 'peserta') {
            $this->load->view('dashboard/navbar');
        } else {
            $this->load->view('navbar');
        }
    ?>
    </div>

    <div id="main-content">
        <?php $this->load->view($main_view); ?>
    </div>

    <div id="footer">
        <div class="container">
            <p class="text-muted">
                Copyright &copy; 2014 Awan Pribadi Basuki.
            </p>
            <p class="text-muted">
                Aplikasi ini dibuat sebagai studi kasus (sample project) yang dibahas di buku yang saya tulis.
                <strong>TIDAK DIPERJUALBELIKAN</strong>.
            </p>
        </div>
    </div>

    <script src="<?php echo base_url('asset/js/jquery-1.11.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/bootstrap_3_2_0/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/hovernav/hovernav.js'); ?>"></script>
    <script src="<?php echo base_url('asset/bootstrap_datepicker/js/bootstrap-datepicker.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/psb.js'); ?>"></script>
</div>

<noscript>
    <p class="noscript">Javascript pada browser Anda tidak diaktifkan. Silakan mengaktifkan Javascript.</p>
    <style type="text/css">
        #wrapper { display:none; }
        .noscript {
            text-align: center;
            color: #ff0000;
            font-size: 1.5em;
            vertical-align: 50%;
            margin: 250px;
            border: 1px solid;
        }
    </style>
</noscript>

</body>
</html>