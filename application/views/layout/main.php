<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Tirta Aroma</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>p_assets/pages/ico/60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>p_assets/pages/ico/76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>p_assets/pages/ico/120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>p_assets/pages/ico/152.png">
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link href="<?php echo base_url(); ?>p_assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>p_assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>p_assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>p_assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url(); ?>p_assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?= base_url() ?>p_assets/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>p_assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url(); ?>p_assets/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
        <link class="main-stylesheet" href="<?php echo base_url(); ?>p_assets/pages/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>p_assets/css/pagination.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo base_url(); ?>p_assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo base_url(); ?>p_assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>p_assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>p_assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
        <script src="<?php echo base_url(); ?>p_assets/plugins/pace/pace.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>p_assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>p_assets/plugins/bootstrap-typehead/typeahead.bundle.min.js"></script>
        <script src="<?= base_url() ?>p_assets/plugins/bootstrap-typehead/typeahead.jquery.min.js"></script>
        <script src="<?= base_url() ?>p_assets/plugins/handlebars/handlebars-v4.0.5.js"></script>
        <style>
            .table thead tr th{
                color : #000 !important;
                font-weight: bold;
            }
            .form-group label:not(.error){
                color : #000 !important;
                font-weight: bold;
            }
        </style>
        <script>
            window.base_url = "<?= base_url() ?>";
        </script>
    </head>
    <body class="fixed-header ">
        <!-- BEGIN SIDEBPANEL-->
        <nav class="page-sidebar" data-pages="sidebar">
            <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
            <div class="sidebar-overlay-slide from-top" id="appMenu">
                <div class="row">
                    <div class="col-xs-6 no-padding">
                        <a href="#" class="p-l-40"><img src="<?php echo base_url(); ?>p_assets/img/demo/social_app.svg" alt="socail">
                        </a>
                    </div>
                    <div class="col-xs-6 no-padding">
                        <a href="#" class="p-l-10"><img src="<?php echo base_url(); ?>p_assets/img/demo/email_app.svg" alt="socail">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 m-t-20 no-padding">
                        <a href="#" class="p-l-40"><img src="<?php echo base_url(); ?>p_assets/img/demo/calendar_app.svg" alt="socail">
                        </a>
                    </div>
                    <div class="col-xs-6 m-t-20 no-padding">
                        <a href="#" class="p-l-10"><img src="<?php echo base_url(); ?>p_assets/img/demo/add_more.svg" alt="socail">
                        </a>
                    </div>
                </div>
            </div>
            <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
            <!-- BEGIN SIDEBAR MENU HEADER-->
            <div class="sidebar-header">
                <img src="<?php echo base_url(); ?>p_assets/img/logo_white.png" alt="logo" class="brand" data-src="<?php echo base_url(); ?>p_assets/img/logo_white.png" data-src-retina="<?php echo base_url(); ?>p_assets/img/logo_white_2x.png" width="78" height="22">
                <div class="sidebar-header-controls">
                    <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
                    </button>
                    <button type="button" class="btn btn-link d-lg-inline-block d-xlg-inline-block d-md-inline-block d-sm-none d-none" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
                    </button>
                </div>
            </div>
            <!-- END SIDEBAR MENU HEADER-->
            <!-- START SIDEBAR MENU -->
            <?php $this->load->view('layout/sidemenu'); ?>
            <!-- END SIDEBAR MENU -->
        </nav>
        <!-- END SIDEBAR -->
        <!-- END SIDEBPANEL-->
        <!-- START PAGE-CONTAINER -->
        <div class="page-container ">
            <!-- START HEADER -->
            <div class="header ">
                <!-- START MOBILE SIDEBAR TOGGLE -->
                <a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-menu" data-toggle="sidebar">
                </a>
                <!-- END MOBILE SIDEBAR TOGGLE -->
                <div class="">
                    <div class="brand inline   ">
                        <img src="<?php echo base_url(); ?>p_assets/img/logo.png" alt="logo" data-src="<?php echo base_url(); ?>p_assets/img/logo.png" data-src-retina="<?php echo base_url(); ?>p_assets/img/logo_2x.png" width="78" height="22">
                    </div>
                    <!-- START NOTIFICATION LIST -->
                    <ul class="d-lg-inline-block d-none notification-list no-margin d-lg-inline-block b-grey b-l b-r no-style p-l-30 p-r-20">
                        <li class="p-r-10 inline">
                            <div class="dropdown">
                                <a href="javascript:;" id="notification-center" class="header-icon pg pg-world" data-toggle="dropdown">
                                    <span class="bubble"></span>
                                </a>
                                <!-- START Notification Dropdown -->
                                <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                                    <!-- START Notification -->
                                    <div class="notification-panel">
                                        <!-- START Notification Body-->
                                        <div class="notification-body scrollable">
                                            <!-- START Notification Item-->
                                            <div class="notification-item unread clearfix">
                                                <!-- START Notification Item-->
                                                <div class="heading open">
                                                    <a href="#" class="text-complete pull-left">
                                                        <i class="pg-map fs-16 m-r-10"></i>
                                                        <span class="bold">Carrot Design</span>
                                                        <span class="fs-12 m-l-10">David Nester</span>
                                                    </a>
                                                    <div class="pull-right">
                                                        <div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
                                                            <div><i class="fa fa-angle-left"></i>
                                                            </div>
                                                        </div>
                                                        <span class=" time">few sec ago</span>
                                                    </div>
                                                    <div class="more-details">
                                                        <div class="more-details-inner">
                                                            <h5 class="semi-bold fs-16">“Apple’s Motivation - Innovation <br>
                                                                distinguishes between <br>
                                                                A leader and a follower.”</h5>
                                                            <p class="small hint-text">
                                                                Commented on john Smiths wall.
                                                                <br> via pages framework.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END Notification Item-->
                                                <!-- START Notification Item Right Side-->
                                                <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                                                    <a href="#" class="mark"></a>
                                                </div>
                                                <!-- END Notification Item Right Side-->
                                            </div>
                                            <!-- START Notification Body-->
                                            <!-- START Notification Item-->
                                            <div class="notification-item  clearfix">
                                                <div class="heading">
                                                    <a href="#" class="text-danger pull-left">
                                                        <i class="fa fa-exclamation-triangle m-r-10"></i>
                                                        <span class="bold">98% Server Load</span>
                                                        <span class="fs-12 m-l-10">Take Action</span>
                                                    </a>
                                                    <span class="pull-right time">2 mins ago</span>
                                                </div>
                                                <!-- START Notification Item Right Side-->
                                                <div class="option">
                                                    <a href="#" class="mark"></a>
                                                </div>
                                                <!-- END Notification Item Right Side-->
                                            </div>
                                            <!-- END Notification Item-->
                                            <!-- START Notification Item-->
                                            <div class="notification-item  clearfix">
                                                <div class="heading">
                                                    <a href="#" class="text-warning-dark pull-left">
                                                        <i class="fa fa-exclamation-triangle m-r-10"></i>
                                                        <span class="bold">Warning Notification</span>
                                                        <span class="fs-12 m-l-10">Buy Now</span>
                                                    </a>
                                                    <span class="pull-right time">yesterday</span>
                                                </div>
                                                <!-- START Notification Item Right Side-->
                                                <div class="option">
                                                    <a href="#" class="mark"></a>
                                                </div>
                                                <!-- END Notification Item Right Side-->
                                            </div>
                                            <!-- END Notification Item-->
                                            <!-- START Notification Item-->
                                            <div class="notification-item unread clearfix">
                                                <div class="heading">
                                                    <div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10">
                                                        <img width="30" height="30" data-src-retina="<?php echo base_url(); ?>p_assets/img/profiles/1x.jpg" data-src="<?php echo base_url(); ?>p_assets/img/profiles/1.jpg" alt="" src="<?php echo base_url(); ?>p_assets/img/profiles/1.jpg">
                                                    </div>
                                                    <a href="#" class="text-complete pull-left">
                                                        <span class="bold">Tirta Aroma Design Labs</span>
                                                        <span class="fs-12 m-l-10">Owners</span>
                                                    </a>
                                                    <span class="pull-right time">11:00pm</span>
                                                </div>
                                                <!-- START Notification Item Right Side-->
                                                <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                                                    <a href="#" class="mark"></a>
                                                </div>
                                                <!-- END Notification Item Right Side-->
                                            </div>
                                            <!-- END Notification Item-->
                                        </div>
                                        <!-- END Notification Body-->
                                        <!-- START Notification Footer-->
                                        <div class="notification-footer text-center">
                                            <a href="#" class="">Read all notifications</a>
                                            <a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
                                                <i class="pg-refresh_new"></i>
                                            </a>
                                        </div>
                                        <!-- START Notification Footer-->
                                    </div>
                                    <!-- END Notification -->
                                </div>
                                <!-- END Notification Dropdown -->
                            </div>
                        </li>
                        <li class="p-r-10 inline">
                            <a href="#" class="header-icon pg pg-link"></a>
                        </li>
                        <li class="p-r-10 inline">
                            <a href="#" class="header-icon pg pg-thumbs"></a>
                        </li>
                    </ul>
                    <!-- END NOTIFICATIONS LIST -->
                    <a href="#" class="search-link d-lg-inline-block d-none" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a>
                </div>
                <div class="d-flex align-items-center">
                    <!-- START User Info-->
                    <div class="pull-left p-r-10 fs-14 font-heading d-lg-block d-none">
                        <span class="semi-bold">David</span> <span class="text-master">Nest</span>
                    </div>
                    <div class="dropdown pull-right d-lg-block d-none">
                        <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="thumbnail-wrapper d32 circular inline">
                                <img src="<?php echo base_url(); ?>p_assets/img/profiles/avatar.jpg" alt="" data-src="<?php echo base_url(); ?>p_assets/img/profiles/avatar.jpg" data-src-retina="<?php echo base_url(); ?>p_assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                            <a href="#" class="dropdown-item"><i class="pg-settings_small"></i> Settings</a>
                            <a href="#" class="dropdown-item"><i class="pg-outdent"></i> Feedback</a>
                            <a href="#" class="dropdown-item"><i class="pg-signals"></i> Help</a>
                            <a href="<?= site_url("login/logout") ?>" class="clearfix bg-master-lighter dropdown-item">
                                <span class="pull-left">Logout</span>
                                <span class="pull-right"><i class="pg-power"></i></span>
                            </a>
                        </div>
                    </div>
                    <!-- END User Info-->
                    <a href="#" class="header-icon pg pg-alt_menu btn-link m-l-10 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview"></a>
                </div>
            </div>
            <!-- END HEADER -->
            <!-- START PAGE CONTENT WRAPPER -->
            <div class="page-content-wrapper ">
                <!-- START PAGE CONTENT -->
                <div class="content ">
                    <!-- START JUMBOTRON -->
                    <div class="jumbotron" data-pages="parallax">
                        <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
                            <div class="inner">
                                <!-- START BREADCRUMB -->
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item active">Blank template</li>
                                </ol>
                                <!-- END BREADCRUMB -->
                            </div>
                        </div>
                    </div>
                    <!-- END JUMBOTRON -->
                    <!-- START CONTAINER FLUID -->
                    <div class=" container-fluid   container-fixed-lg">
                        <!-- BEGIN PlACE PAGE CONTENT HERE -->
                        <?php $this->load->view($page); ?>
                        <!-- END PLACE PAGE CONTENT HERE -->
                    </div>
                    <!-- END CONTAINER FLUID -->
                </div>
                <!-- END PAGE CONTENT -->
                <!-- START COPYRIGHT -->
                <!-- START CONTAINER FLUID -->
                <!-- START CONTAINER FLUID -->
                <div class=" container-fluid  container-fixed-lg footer">
                    <div class="copyright sm-text-center">
                        <p class="small no-margin pull-left sm-pull-reset">
                            <span class="hint-text">Copyright &copy; <?= date("Y") ?> </span>
                            <span class="font-montserrat">Tirta Aroma</span>.
                            <span class="hint-text">All rights reserved. </span>
                            <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> <span class="muted">|</span> <a href="#" class="m-l-10">Privacy Policy</a></span>
                        </p>
                        <p class="small no-margin pull-right sm-pull-reset">
                            Hand-crafted <span class="hint-text">&amp; made with Love</span>
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- END COPYRIGHT -->
            </div>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTAINER -->
        <!--START QUICKVIEW -->
        <!-- END QUICKVIEW-->
        <!-- START OVERLAY -->

        <!-- END OVERLAY -->
        <!-- BEGIN VENDOR JS -->

        <script src="<?php echo base_url(); ?>p_assets/plugins/modernizr.custom.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>p_assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>p_assets/plugins/popper/umd/popper.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>p_assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>p_assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>p_assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>p_assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>p_assets/plugins/jquery-actual/jquery.actual.min.js"></script>
        <script src="<?php echo base_url(); ?>p_assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>p_assets/plugins/select2/js/select2.full.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>p_assets/plugins/classie/classie.js"></script>
        <script src="<?php echo base_url(); ?>p_assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>p_assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>p_assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>p_assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>p_assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>p_assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>p_assets/plugins/datatables-responsive/js/lodash.min.js"></script>
        <script src="<?php echo base_url(); ?>p_assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>p_assets/plugins/bootstrap-typehead/typeahead.bundle.min.js"></script>
        <script src="<?= base_url() ?>p_assets/plugins/bootstrap-typehead/typeahead.jquery.min.js"></script>
        <script src="<?= base_url() ?>p_assets/plugins/handlebars/handlebars-v4.0.5.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>p_assets/plugins/jquery-autonumeric/autoNumeric.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>p_assets/plugins/jquery-inputmask/jquery.inputmask.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>p_assets/plugins/cleave/cleave.js"></script>
        <!-- END VENDOR JS -->

        <!-- BEGIN CORE TEMPLATE JS -->
        <!-- BEGIN CORE TEMPLATE JS -->
        <script src="<?php echo base_url(); ?>p_assets/pages/js/pages.js"></script>
        <!-- END CORE TEMPLATE JS -->
        <!-- BEGIN PAGE LEVEL JS -->
        <script src="<?php echo base_url(); ?>p_assets/js/scripts.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS -->
        <!-- END CORE TEMPLATE JS -->
        <!-- BEGIN PAGE LEVEL JS -->
        <!--<script src="<?php echo base_url(); ?>p_assets/js/form_elements.js" type="text/javascript"></script>-->
        <script src="<?php echo base_url(); ?>p_assets/js/scripts.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    </body>
</html>
