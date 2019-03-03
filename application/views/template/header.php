<?php $category=$this->session->userdata('category'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <title><?php echo $title; ?></title>
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">




        <link href="<?php echo base_url(); ?>css/elegant-icons-style.css" rel="stylesheet" />



            </head>

    <body>

        <section id="container"><!-- container section start -->
            <nav class="navbar navbar-expand-lg navbar-dark " style="background: #01013D; padding:22px">
                <div class="toggle-nav">
                    <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
                </div>
                <!--logo start-->
                <span class="col-lg-2">
                <?php if($category==1) { ?>
                <a href="<?php echo base_url(); ?>site" class="logo" style="color: #ffc70d; font-size:19px"><b>6 KA<span class="lite" style="color: #ffffff">IZ</span><span class="lite" style="color: #76FF0D">ENS</span></b></a>
                <?php } ?>
                <?php if($category==2) { ?>
                <a href="<?php echo base_url(); ?>site_msme" class="logo" style="color: #ffc70d; font-size:19px"><b>6KA<span class="lite" style="color: #ffffff">IZ</span><span class="lite" style="color: #76FF0D">ENS</span></b></a>
                <?php } ?>
                <?php if($category==3) { ?>
                <a href="<?php echo base_url(); ?>site_emp" class="logo" style="color: #ffc70d; font-size:19px"><b>6KA<span class="lite" style="color: #ffffff">IZ</span><span class="lite" style="color: #76FF0D">ENS</span></b></a>
                <?php } ?>
              </span>
                <!--logo end-->

                <div class="nav search-row" id="top_menu">
                    <!--  search form start -->
                    <!--  search form end -->
                </div>


        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar"  class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="sidebar-menu" style="background:#01013D">
                    <span class="<?php if($title=='Home'){ echo 'active';}?> col-lg-1">
                    <?php if($category==1) { ?>
                        <a href="<?php echo base_url(); ?>site">
                        <?php } ?>
                        <?php if($category==2) { ?>
                        <a href="<?php echo base_url(); ?>site_msme">
                        <?php } ?>
                        <?php if($category==3) { ?>
                        <a href="<?php echo base_url(); ?>site_emp">
                        <?php } ?>
                            <i class="icon_house_alt"></i>
                            <span style="font-size:17px"><b>Home</b></span>
                        </a>
                    </span>

                    <?php if($category==1) { ?>
                    <span class="<?php if($title=='Department'){ echo 'active';}?> col-lg-1">
                        <a href="<?php echo base_url(); ?>site/msme.html">
                            <i class="icon_datareport"></i>
                            <span style="font-size:17px"><b>MSME</b></span>
                        </a>

                    </span><?php } ?>
                    <?php if($category==1 || $category==2) { ?>
                    <span class="<?php if($title=='Employee'){ echo 'active';}?> col-lg-1">
                    <?php if($category==1) { ?>
                        <a href="<?php echo base_url(); ?>site/employee.html"><?php } ?>
                        <?php if($category==2) { ?>
                        <a href="<?php echo base_url(); ?>site_msme/employee.html"><?php } ?>
                            <i class="icon_id"></i>
                            <span style="font-size:17px"><b>Employee</b></span>
                        </a>

                    </span><?php } ?>
                    <span class="<?php if($title=='Salary'){ echo 'active';}?> col-lg-1">                    
                        <?php if($category==2) { ?>
                        <a href="<?php echo base_url(); ?>site_msme/transactions.html"><?php } ?>
                        <?php if($category==3) { ?>
                        <a href="<?php echo base_url(); ?>site_emp/transactions.html"><?php } ?>
                        <?php if($category!=1) { ?>
                            <i class="icon_clipboard"></i>
                            <span style="font-size:17px"><b>My Transaction</b></span><?php } ?>
                        </a>

                    </span>
                    <span class="<?php if($title=='Settings'){ echo 'active';}?> col-lg-1">
                        <?php if($category==2) { ?>
                        <a href="<?php echo base_url(); ?>site_msme/settings.html"><?php } ?>
                        <?php if($category==3) { ?>
                        <a href="<?php echo base_url(); ?>site_emp/settings.html"><?php } ?>
                        <?php if($category!=1) { ?>
                            <i class="icon_cog"></i>
                            <span style="font-size:17px"><b>Settings</b></span><?php } ?>
                        </a>
                        &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp   &nbsp
                        &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
                        &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
                        &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
                        &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
                        &nbsp  &nbsp &nbsp  &nbsp &nbsp
                    </span>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>

        <div class="top-nav notification-row col-lg-2" >
            <!-- notificatoin dropdown start-->
            <ul class="nav top-menu">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="profile-ava">
                            <img alt="avatar" src="<?php echo base_url(); ?>img/India.png">
                        </span>
                        <span class="username"><?php echo $this->session->userdata('username'); ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout mr-auto">

                        <?php if($category==1) { ?>
                        <li>
                            <a href="<?php echo base_url(); ?>site/logout.html"  style="font-size:17px"><b><center>Log Out</center></b></a>
                        </li> <?php } ?>
                        <?php if($category==2) { ?>
                        <li>
                            <a href="<?php echo base_url(); ?>site_msme/logout.html"  style="font-size:17px" ><b><center>Log Out</center></b></a>
                        </li> <?php } ?>
                        <?php if($category==3) { ?>
                        <li>
                            <a href="<?php echo base_url(); ?>site_emp/logout.html" style="font-size:17px"><b><center>Log Out</center></b></a>
                        </li> <?php } ?>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->

        <!--sidebar end-->
</nav>
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
            </div>


          </body>


              <!-- jQuery library -->
              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

              <!-- Popper -->
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

              <!-- Latest compiled and minified Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

              <!-- Initialize Bootstrap functionality -->
              <script>
              // Initialize tooltip component
              $(function () {
                $('[data-toggle="tooltip"]').tooltip()
              })

              // Initialize popover component
              $(function () {
                $('[data-toggle="popover"]').popover()
              })
              </script>
              <!-- jQuery library -->
              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

              <!-- Popper -->
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

              <!-- Latest compiled and minified Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

              <!-- Initialize Bootstrap functionality -->
              <script>
              // Initialize tooltip component
              $(function () {
                $('[data-toggle="tooltip"]').tooltip()
              })

              // Initialize popover component
              $(function () {
                $('[data-toggle="popover"]').popover()
              })
              </script>
              <!-- jQuery library -->
              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

              <!-- Popper -->
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

              <!-- Latest compiled and minified Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

              <!-- Initialize Bootstrap functionality -->
              <script>
              // Initialize tooltip component
              $(function () {
                $('[data-toggle="tooltip"]').tooltip()
              })

              // Initialize popover component
              $(function () {
                $('[data-toggle="popover"]').popover()
              })
              </script>
</html>
