<?php $category=$this->session->userdata('category'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
        <meta name="author" content="GeeksLabs">
        <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
        <link rel="shortcut icon" href="img/favicon.png">

        <title><?php echo $title; ?></title>

        <!-- Bootstrap CSS -->
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="<?php echo base_url(); ?>css/bootstrap-theme.css" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="<?php echo base_url(); ?>css/elegant-icons-style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet" />
        <!-- full calendar css-->
        <link href="<?php echo base_url(); ?>assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
        <!-- easy pie chart-->
        <link href="<?php echo base_url(); ?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
        <!-- owl carousel -->
        <link href="<?php echo base_url(); ?>css/owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
        <!-- Custom styles -->
        <link href="<?php echo base_url(); ?>css/fullcalendar.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/widgets.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>css/xcharts.min.css" rel=" stylesheet">
        <link href="<?php echo base_url(); ?>css/jquery-ui-1.10.4.min.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
        <!--[if lt IE 9]>
          <script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
          <script src="<?php echo base_url(); ?>js/respond.min.js"></script>
          <script src="<?php echo base_url(); ?>js/lte-ie7.js"></script>
        <![endif]-->
    </head>

    <body>
        <section id="container"><!-- container section start -->
            <header class="header dark-bg">
                <div class="toggle-nav">
                    <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
                </div>
                <!--logo start-->
                <?php if($category==1) { ?>
                <a href="<?php echo base_url(); ?>site" class="logo">6KAIZ<span class="lite">ENS</span></a>
                <?php } ?>
                <?php if($category==2) { ?>
                <a href="<?php echo base_url(); ?>site_dep" class="logo">6KAIZ<span class="lite">ENS</span></a>
                <?php } ?>
                <?php if($category==3) { ?>
                <a href="<?php echo base_url(); ?>site_emp" class="logo">6KAIZ<span class="lite">ENS</span></a>
                <?php } ?>
                <!--logo end-->

                <div class="nav search-row" id="top_menu">
                    <!--  search form start -->
                    <!--  search form end -->
                </div>
                <div class="top-nav notification-row">
                    <!-- notificatoin dropdown start-->
                    <ul class="nav pull-right top-menu">
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="profile-ava">
                                    <img alt="avatar" src="<?php echo base_url(); ?>img/avatar1_small.jpg">
                                </span>
                                <span class="username"><?php echo $this->session->userdata('username'); ?></span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout">

                                <?php if($category==1) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>site/logout.html"><i class="icon_key_alt"></i>Log Out</a>
                                </li> <?php } ?>
                                <?php if($category==2) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>site_dep/logout.html"><i class="icon_key_alt"></i>Log Out</a>
                                </li> <?php } ?>
                                <?php if($category==3) { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>site_emp/logout.html"><i class="icon_key_alt"></i>Log Out</a>
                                </li> <?php } ?>
                            </ul>
                        </li>
                        <!-- user login dropdown end -->
                    </ul>
                    <!-- notificatoin dropdown end-->
                </div>
            </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar"  class="nav-collapse">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">
                    <li class="<?php if($title=='Home'){ echo 'active';}?>">
                    <?php if($category==1) { ?>
                        <a href="<?php echo base_url(); ?>site">
                        <?php } ?>
                        <?php if($category==2) { ?>
                        <a href="<?php echo base_url(); ?>site_dep">
                        <?php } ?>
                        <?php if($category==3) { ?>
                        <a href="<?php echo base_url(); ?>site_emp">
                        <?php } ?>
                            <i class="icon_house_alt"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <?php if($category==1) { ?>
                    <li class="<?php if($title=='Department'){ echo 'active';}?>">
                        <a href="<?php echo base_url(); ?>site/department.html">
                            <i class="icon_datareport"></i>
                            <span>Department</span>
                        </a>
                    </li><?php } ?>
                    <?php if($category==1 || $category==2) { ?>
                    <li class="<?php if($title=='Employee'){ echo 'active';}?>">
                    <?php if($category==1) { ?>
                        <a href="<?php echo base_url(); ?>site/employee.html"><?php } ?>
                        <?php if($category==2) { ?>
                        <a href="<?php echo base_url(); ?>site_dep/employee.html"><?php } ?>
                            <i class="icon_id"></i>
                            <span>Employee</span>
                        </a>
                    </li><?php } ?>
                    <li class="<?php if($title=='Salary'){ echo 'active';}?>">
                    <?php if($category==1) { ?>
                        <a href="<?php echo base_url(); ?>site/salary.html"><?php } ?>
                        <?php if($category==2) { ?>
                        <a href="<?php echo base_url(); ?>site_dep/salary.html"><?php } ?>
                        <?php if($category==3) { ?>
                        <a href="<?php echo base_url(); ?>site_emp/salary.html"><?php } ?>
                            <i class="icon_clipboard"></i>
                            <span>Salary</span>
                        </a>
                    </li>
                    <li class="<?php if($title=='Settings'){ echo 'active';}?>">
                    <?php if($category==1) { ?>
                        <a href="<?php echo base_url(); ?>site/settings.html"><?php } ?>
                        <?php if($category==2) { ?>
                        <a href="<?php echo base_url(); ?>site_dep/settings.html"><?php } ?>
                        <?php if($category==3) { ?>
                        <a href="<?php echo base_url(); ?>site_emp/settings.html"><?php } ?>
                            <i class="icon_cog"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
