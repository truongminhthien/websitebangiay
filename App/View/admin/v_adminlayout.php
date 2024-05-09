<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=BASE_PATH_ADMIN?>assets/images/favicon.ico">
    <!-- App title -->
    <title>Zircos - Responsive Admin Dashboard Template</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../plugins/morris/morris.css">
    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="<?=BASE_PATH?>/Public/css/bootstrap.min.css">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="<?=BASE_PATH?>/Public/lib/css/nivo-slider.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="<?=BASE_PATH?>/Public/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?=BASE_PATH?>/Public/css/shortcode/shortcodes.css">

    <!-- Theme main style -->
    <link rel="stylesheet" href="<?=BASE_PATH?>/Public/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?=BASE_PATH?>/Public/css/responsive.css">
    <!-- Template color css -->
    <!-- <link href="Public/css/color/color-core.css" data-style="styles" rel="stylesheet"> -->
    <!-- User style -->
    <link rel="stylesheet" href="<?=BASE_PATH?>/Public/css/custom.css">

    <!-- Modernizr JS -->
    <script src="<?=BASE_PATH?>/Public/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- App css -->
    <link href="<?=BASE_PATH_ADMIN?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=BASE_PATH_ADMIN?>assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?=BASE_PATH_ADMIN?>assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?=BASE_PATH_ADMIN?>assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?=BASE_PATH_ADMIN?>assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?=BASE_PATH_ADMIN?>assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="<?=BASE_PATH_ADMIN?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <script src="<?=BASE_PATH_ADMIN?>assets/js/modernizr.min.js"></script>

</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo"><span>Zir<span>cos</span></span><i class="mdi mdi-layers"></i></a>
                <!-- Image logo -->
                <!--<a href="index.html" class="logo">-->
                <!--<span>-->
                <!--<img src="assets/images/logo.png" alt="" height="30">-->
                <!--</span>-->
                <!--<i>-->
                <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
                <!--</i>-->
                <!--</a>-->
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">

                    <!-- Navbar-left -->
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="hidden-xs">
                            <form role="search" class="app-search">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                        <li class="hidden-xs">
                            <a href="#" class="menu-item">New</a>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a data-toggle="dropdown" class="dropdown-toggle menu-item" href="#"
                                aria-expanded="false">English
                                <span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#">German</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Italian</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Right(Notification) -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                                <span class="badge up bg-success">4</span>
                            </a>

                            <ul
                                class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                <li>
                                    <h5>Notifications</h5>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="icon bg-info">
                                            <i class="mdi mdi-account"></i>
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">New Signup</span>
                                            <span class="time">5 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="icon bg-danger">
                                            <i class="mdi mdi-comment"></i>
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">New Message received</span>
                                            <span class="time">1 day ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="icon bg-warning">
                                            <i class="mdi mdi-settings"></i>
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">Settings</span>
                                            <span class="time">1 day ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="all-msgs text-center">
                                    <p class="m-0"><a href="#">See all Notification</a></p>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                <i class="mdi mdi-email"></i>
                                <span class="badge up bg-danger">8</span>
                            </a>

                            <ul
                                class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                <li>
                                    <h5>Messages</h5>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="avatar">
                                            <img src="assets/images/users/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">Patricia Beach</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="avatar">
                                            <img src="assets/images/users/avatar-3.jpg" alt="">
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">Connie Lucas</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="avatar">
                                            <img src="assets/images/users/avatar-4.jpg" alt="">
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">Margaret Becker</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="all-msgs text-center">
                                    <p class="m-0"><a href="#">See all Messages</a></p>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="right-bar-toggle right-menu-item">
                                <i class="mdi mdi-settings"></i>
                            </a>
                        </li>

                        <li class="dropdown user-box">
                            <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown"
                                aria-expanded="true">
                                <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                            </a>

                            <ul
                                class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                <li>
                                    <h5>Hi, John</h5>
                                </li>
                                <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                            </ul>
                        </li>

                    </ul> <!-- end navbar-right -->

                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Navigation</li>

                        <li class="has_sub">
                            <a href="" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard
                                </span> </a>
                        </li>
                        <li class="has_sub">
                            <a href="<?=BASE_PATH?>/quanlydanhmuc" class="waves-effect"><i
                                    class="mdi mdi-format-list-bulleted"></i> <span> Quản lí
                                    danh mục </span> </a>
                        </li>

                        <li class="menu-title">Extra</li>

                        <li class="menu-title">More</li>
                    </ul>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

                <div class="help-box">
                    <h5 class="text-muted m-t-0">For Help ?</h5>
                    <p class=""><span class="text-custom">Email:</span> <br /> support@support.com</p>
                    <p class="m-b-0"><span class="text-custom">Call:</span> <br /> (+123) 123 456 789</p>
                </div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->


        <?php require_once $data['v_adminindex'] . '.php'?>



    </div>
    <!-- END wrapper -->



    <script>
    var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="<?=BASE_PATH_ADMIN?>assets/js/jquery.min.js"></script>
    <script src="<?=BASE_PATH_ADMIN?>assets/js/bootstrap.min.js"></script>
    <script src="<?=BASE_PATH_ADMIN?>assets/js/detect.js"></script>
    <script src="<?=BASE_PATH_ADMIN?>assets/js/fastclick.js"></script>
    <script src="<?=BASE_PATH_ADMIN?>assets/js/jquery.blockUI.js"></script>
    <script src="<?=BASE_PATH_ADMIN?>assets/js/waves.js"></script>
    <script src="<?=BASE_PATH_ADMIN?>assets/js/jquery.slimscroll.js"></script>
    <script src="<?=BASE_PATH_ADMIN?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="../plugins/switchery/switchery.min.js"></script>

    <!-- Counter js  -->
    <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="../plugins/counterup/jquery.counterup.min.js"></script>

    <!--Morris Chart-->
    <script src="../plugins/morris/morris.min.js"></script>
    <script src="../plugins/raphael/raphael-min.js"></script>

    <!-- Dashboard init -->
    <script src="<?=BASE_PATH_ADMIN?>assets/pages/jquery.dashboard.js"></script>

    <!-- App js -->
    <script src="<?=BASE_PATH_ADMIN?>assets/js/jquery.core.js"></script>
    <script src="<?=BASE_PATH_ADMIN?>assets/js/jquery.app.js"></script>

</body>

</html>