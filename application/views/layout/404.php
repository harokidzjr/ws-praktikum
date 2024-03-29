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
        <link href="<?php echo base_url(); ?>p_assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url(); ?>p_assets/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
        <link class="main-stylesheet" href="<?php echo base_url(); ?>p_assets/pages/css/pages.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
            window.onload = function ()
            {
                // fix for windows 8
                if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
                    document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
            }
        </script>
    </head>
    <body class="fixed-header error-page">
        <div class="d-flex justify-content-center full-height full-width align-items-center">
            <div class="error-container text-center">
                <h1 class="error-number">403</h1>
                <h2 class="semi-bold">Sorry but we couldnt find this page</h2>
                <!--<p class="p-b-10">This page you are looking for does not exsist <a href="#">Report this?</a>-->
                </p>
                <div class="error-container-innner text-center">
                    
                </div>
            </div>
        </div>
        <div class="pull-bottom sm-pull-bottom full-width d-flex align-items-center justify-content-center">
            <div class="error-container">
                <div class="error-container-innner">
                    <div class="p-b-30 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix d-flex-md-up row no-margin">
                        <div class="col-md-3 no-padding d-flex align-items-center justify-content-center">
                            <img alt="" data-src="<?php echo base_url(); ?>p_assets/img/demo/pages_icon.png" data-src-retina="<?php echo base_url(); ?>p_assets/img/demo/pages_icon_2x.png" height="60" src="<?php echo base_url(); ?>p_assets/img/demo/pages_icon.png" width="60">
                        </div>
                        <div class="col-md-9 no-padding d-flex align-items-center justify-content-center">
                            <p class="small no-margin flex-1">Create a pages account. If you have a facebook account, log into it for this process. Sign in with <a href="#">Facebook</a> or <a href="#">Google</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER -->
        <!-- START OVERLAY -->
        <div class="overlay hide" data-pages="search">
            <!-- BEGIN Overlay Content !-->
            <div class="overlay-content has-results m-t-20">
                <!-- BEGIN Overlay Header !-->
                <div class="container-fluid">
                    <!-- BEGIN Overlay Logo !-->
                    <img class="overlay-brand" src="<?php echo base_url(); ?>p_assets/img/logo.png" alt="logo" data-src="<?php echo base_url(); ?>p_assets/img/logo.png" data-src-retina="<?php echo base_url(); ?>p_assets/img/logo_2x.png" width="78" height="22">
                    <!-- END Overlay Logo !-->
                    <!-- BEGIN Overlay Close !-->
                    <a href="#" class="close-icon-light overlay-close text-black fs-16">
                        <i class="pg-close"></i>
                    </a>
                    <!-- END Overlay Close !-->
                </div>
                <!-- END Overlay Header !-->
                <div class="container-fluid">
                    <!-- BEGIN Overlay Controls !-->
                    <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
                    <br>
                    <div class="inline-block">
                        <div class="checkbox right">
                            <input id="checkboxn" type="checkbox" value="1" checked="checked">
                            <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
                        </div>
                    </div>
                    <div class="inline-block m-l-10">
                        <p class="fs-13">Press enter to search</p>
                    </div>
                    <!-- END Overlay Controls !-->
                </div>
                <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
                <div class="container-fluid">
                    <span>
                        <strong>suggestions :</strong>
                    </span>
                    <span id="overlay-suggestions"></span>
                    <br>
                    <div class="search-results m-t-40">
                        <p class="bold">Pages Search Results</p>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- BEGIN Search Result Item !-->
                                <div class="">
                                    <!-- BEGIN Search Result Item Thumbnail !-->
                                    <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                        <div>
                                            <img width="50" height="50" src="<?php echo base_url(); ?>p_assets/img/profiles/avatar.jpg" data-src="<?php echo base_url(); ?>p_assets/img/profiles/avatar.jpg" data-src-retina="<?php echo base_url(); ?>p_assets/img/profiles/avatar2x.jpg" alt="">
                                        </div>
                                    </div>
                                    <!-- END Search Result Item Thumbnail !-->
                                    <div class="p-l-10 inline p-t-5">
                                        <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                                        <p class="hint-text">via john smith</p>
                                    </div>
                                </div>
                                <!-- END Search Result Item !-->
                                <!-- BEGIN Search Result Item !-->
                                <div class="">
                                    <!-- BEGIN Search Result Item Thumbnail !-->
                                    <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                        <div>T</div>
                                    </div>
                                    <!-- END Search Result Item Thumbnail !-->
                                    <div class="p-l-10 inline p-t-5">
                                        <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                                        <p class="hint-text">via pages</p>
                                    </div>
                                </div>
                                <!-- END Search Result Item !-->
                                <!-- BEGIN Search Result Item !-->
                                <div class="">
                                    <!-- BEGIN Search Result Item Thumbnail !-->
                                    <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                        <div><i class="fa fa-headphones large-text "></i>
                                        </div>
                                    </div>
                                    <!-- END Search Result Item Thumbnail !-->
                                    <div class="p-l-10 inline p-t-5">
                                        <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                                        <p class="hint-text">via pagesmix</p>
                                    </div>
                                </div>
                                <!-- END Search Result Item !-->
                            </div>
                            <div class="col-md-6">
                                <!-- BEGIN Search Result Item !-->
                                <div class="">
                                    <!-- BEGIN Search Result Item Thumbnail !-->
                                    <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                                        <div><i class="fa fa-facebook large-text "></i>
                                        </div>
                                    </div>
                                    <!-- END Search Result Item Thumbnail !-->
                                    <div class="p-l-10 inline p-t-5">
                                        <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                                        <p class="hint-text">via facebook</p>
                                    </div>
                                </div>
                                <!-- END Search Result Item !-->
                                <!-- BEGIN Search Result Item !-->
                                <div class="">
                                    <!-- BEGIN Search Result Item Thumbnail !-->
                                    <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                                        <div><i class="fa fa-twitter large-text "></i>
                                        </div>
                                    </div>
                                    <!-- END Search Result Item Thumbnail !-->
                                    <div class="p-l-10 inline p-t-5">
                                        <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                                        <p class="hint-text">via twitter</p>
                                    </div>
                                </div>
                                <!-- END Search Result Item !-->
                                <!-- BEGIN Search Result Item !-->
                                <div class="">
                                    <!-- BEGIN Search Result Item Thumbnail !-->
                                    <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                                        <div><i class="fa fa-google-plus large-text "></i>
                                        </div>
                                    </div>
                                    <!-- END Search Result Item Thumbnail !-->
                                    <div class="p-l-10 inline p-t-5">
                                        <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                                        <p class="hint-text">via google plus</p>
                                    </div>
                                </div>
                                <!-- END Search Result Item !-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Overlay Search Results !-->
            </div>
            <!-- END Overlay Content !-->
        </div>
        <!-- END OVERLAY -->
        <!-- BEGIN VENDOR JS -->
        <script src="<?php echo base_url(); ?>p_assets/plugins/pace/pace.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>p_assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
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
        <!-- END VENDOR JS -->
        <script src="pages/js/pages.min.js"></script>
    </body>
</html>