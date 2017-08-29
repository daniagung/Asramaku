<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/plugins/images/favicon.png">
    <title>Telkom University Dormitory</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- animation CSS -->
    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url(); ?>assets/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
    <div class="login-box">
        <div class="white-box">
            <form class="form-horizontal form-material" action="checkpoint/check" method="POST">

                <div class="form-group">
                    <div class="col-xs-12 text-center">
                        <div class="user-thumb text-center"><img alt="thumbnail" class="img-circle" width="100"
                                                                 src="<?php echo base_url(); ?>assets/plugins/images/users/genu.jpg">
                            <h3>Telkom University Dormitory </h3>
                        </div>
                    </div>
                </div>
                <?php
                if ($this->session->flashdata('error')){
                    echo $this->session->flashdata('error');
                }
                if ($this->session->flashdata('success')){
                    echo $this->session->flashdata('success');
                }
                ?>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control text-center" type="text" name="nim" required="" placeholder="Masukkan NIM Anda">
                        <br>
                        <div class="form-group text-center">
                            <div class="radio-list">
                                <label class="radio-inline p-0">
                                    <div class="radio radio-info">
                                        <input type="radio" name="status" id="radio1" value="masuk" checked="true">
                                        <label for="radio1">Masuk</label>
                                    </div>
                                </label>
                                <label class="radio-inline">
                                    <div class="radio radio-info">
                                        <input type="radio" name="status" id="radio2" value="keluar">
                                        <label for="radio2">Keluar</label>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group text-center">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light "
                                        type="submit">Checkpoint
                                </button>
                            </div>
                        </div>
            </form>
        </div>
    </div>
</section>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

<!--slimscroll JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
<!--Style Switcher -->
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>
</body>
</html>
