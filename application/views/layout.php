<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/plugins/images/favicon.png">
    <title>My Dorm</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css"
          rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/toast-master/css/jquery.toast.css"
          rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/chartist-js/dist/chartist.min.css"
          rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/icons/material-design-iconic-font/css/materialdesignicons.min.css"
          rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css"
          rel="stylesheet">
    <!-- Calendar CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/calendar/dist/fullcalendar.css"
          rel="stylesheet"/>
    <!-- animation CSS -->
    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url(); ?>assets/css/colors/megna-dark.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" href=<?php echo base_url(); ?>assets/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header">

<div id="wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <div class="top-left-part">
                <!-- Logo -->
                <a class="logo" href="<?php echo base_url(); ?>">
                    <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img
                                src="<?php echo base_url(); ?>assets/plugins/images/admin-logo.png" alt="home"
                                class="dark-logo"/><!--This is light logo icon--><img
                                src="<?php echo base_url(); ?>assets/plugins/images/admin-logo-dark.png" alt="home"
                                class="light-logo"/>
                    </b>
                    <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img
                                src="<?php echo base_url(); ?>assets/plugins/images/admin-text.png" alt="home"
                                class="dark-logo"/><!--This is light logo text--><img
                                src="<?php echo base_url(); ?>assets/plugins/images/admin-text-dark.png" alt="home"
                                class="light-logo"/>
                     </span> </a>
            </div>
            <!-- /Logo -->
            <!-- Search input and Toggle icon -->
            <ul class="nav navbar-top-links navbar-left">
                <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"> <i
                                class="mdi mdi-gmail"></i>
                        <div class=""><span class=""></span> <span class="point"></span></div>
                    </a>
                    <ul class="dropdown-menu mailbox animated bounceInDown">

                        <li>
                            <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i
                                        class="fa fa-angle-right"></i> </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>

            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">

                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img
                                src="<?php echo base_url(); ?>assets/plugins/images/users/varun.jpg" alt="user-img"
                                width="36" class="img-circle"><b class="hidden-xs">Steave</b><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated flipInY">
                        <li>
                            <div class="dw-user-box">
                                <div class="u-img"><img
                                            src="<?php echo base_url(); ?>assets/plugins/images/users/varun.jpg"
                                            alt="user"/></div>
                                <div class="u-text">
                                    <h4>Steave Jobs</h4>
                                    <p class="text-muted">varun@gmail.com</p><a href="profile.html"
                                                                                class="btn btn-rounded btn-danger btn-sm">View
                                        Profile</a></div>
                            </div>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav slimscrollsidebar">
            <div class="sidebar-head">
                <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span>
                </h3></div>
            <ul class="nav" id="side-menu">
                <li><a href="<?php echo base_url(); ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw"
                                                                                data-icon="v"></i> <span
                                class="hide-menu"> Dashboard <span class="fa arrow"></span></a>
                </li>
                <li><a href="checkpoint" class="waves-effect"><i class="mdi mdi-table fa-fw"></i> <span
                                class="hide-menu">Checkpoint<span class="fa arrow"></span></a>
                </li>
                <li><a href="penghuni" class="waves-effect"><i class="mdi mdi-chart-bar fa-fw"></i> <span
                                class="hide-menu">Penguni<span class="fa arrow"></span></span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Left Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <?php $this->load->view($content); ?>
            <footer class="footer text-center"> 2017 &copy; Faishal Rachman</footer>
        </div>
    </div>
    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span></div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" data-theme="gray" class="yellow-theme">3</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                    <li class="full-width"><b>With Dark sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                    <li><a href="javascript:void(0)" data-theme="gray-dark" class="yellow-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme working">12</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
    <!--Counter js -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/morrisjs/morris.js"></script>
    <!-- chartist chart -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Calendar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/moment/moment.js"></script>
    <script src='<?php echo base_url(); ?>assets/plugins/bower_components/calendar/dist/fullcalendar.min.js'></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/calendar/dist/cal-init.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dashboard1.js"></script>
    <!-- Custom tab JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/cbpFWTabs.js"></script>
    <script type="text/javascript">
        (function () {
            [].slice.call(document.querySelectorAll('.sttabs')).forEach(function (el) {
                new CBPFWTabs(el);
            });
        })();
    </script>
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <!--Style Switcher -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
