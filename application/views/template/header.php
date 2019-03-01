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
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">


        <!-- Bootstrap CSS -->
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="<?php echo base_url(); ?>css/bootstrap-theme.css" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="<?php echo base_url(); ?>css/elegant-icons-style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
        <!-- Custom styles -->
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>css/jquery-ui-1.10.4.min.css" rel="stylesheet">
            </head>

    <body>
        <section id="container"><!-- container section start -->
            <header class="header dark-bg " style="background:#01013D">
                <div class="toggle-nav">
                    <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
                </div>
                <!--logo start-->
                <?php if($category==1) { ?>
                <a href="<?php echo base_url(); ?> site" class="logo" style="color: #ffc70d">6 KA<span class="lite" style="color: #ffffff">IZ</span><span class="lite" style="color: #76FF0D">ENS</span></a>
                <?php } ?>
                <?php if($category==2) { ?>
                <a href="<?php echo base_url(); ?>site_dep" class="logo" style="color: #ffc70d">6 KA<span class="lite" style="color: #ffffff">IZ</span><span class="lite" style="color: #76FF0D">ENS</span></a>
                <?php } ?>
                <?php if($category==3) { ?>
                <a href="<?php echo base_url(); ?>site_emp" class="logo" style="color: #ffc70d">6 KA<span class="lite" style="color: #ffffff">IZ</span><span class="lite" style="color: #76FF0D">ENS</span></a>
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
                <ul class="sidebar-menu" style="background:#01013D">
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
                        <a href="<?php echo base_url(); ?>site/transactions.html"><?php } ?>
                        <?php if($category==2) { ?>
                        <a href="<?php echo base_url(); ?>site_dep/transactions.html"><?php } ?>
                        <?php if($category==3) { ?>
                        <a href="<?php echo base_url(); ?>site_emp/transactions.html"><?php } ?>
                            <i class="icon_clipboard"></i>
                            <span>My Transaction</span>
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
