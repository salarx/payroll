<?php $category=$this->session->userdata('category'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <title><?php echo $title; ?></title>
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">




        <link href="<?php echo base_url(); ?>css/elegant-icons-style.css" rel="stylesheet" />



            </head>

    <body>
    <div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-dark " style="background: #01013D">
                <!--logo start-->

                <?php if($category==1) { ?>
                <a class="navbar-brand" "<?php echo base_url(); ?>site" style="color: #FFC70D"><b>6 KA<span class="lite" style="color: white">IZ</span><span class="lite" style="color: #76FF0D">ENS</span></b></a>
                <?php } ?>
                <?php if($category==2) { ?>
                  <a class="navbar-brand" "<?php echo base_url(); ?>site_msme" style="color: #FFC70D"><b>6 KA<span class="lite" style="color: white">IZ</span><span class="lite" style="color: #76FF0D">ENS</span></b></a>
                  <?php } ?>
                <?php if($category==3) { ?>
                  <a class="navbar-brand" "<?php echo base_url(); ?>site_emp" style="color: #FFC70D"><b>6 KA<span class="lite" style="color: white">IZ</span><span class="lite" style="color: #76FF0D">ENS</span></b></a>
                  <?php } ?>

                  <div class="collapse navbar-collapse" id="navbarColor01">
          		<b>
              <ul class="navbar-nav mr-auto nav-pills" style="font-size: 17px">
                <li class="nav-item active" >
                <?php if($category==1) { ?>
                  <a class="nav-link" href="<?php echo base_url(); ?>site">
          						 &nbsp &nbsp &nbsp &nbsp &nbsp
          					Home<span class="sr-only">(current)</span></a><?php } ?>
                    <?php if($category==2) { ?>
                      <a class="nav-link" href="<?php echo base_url(); ?>site_msme">
              						 &nbsp &nbsp &nbsp &nbsp &nbsp
              					Home<span class="sr-only">(current)</span></a><?php } ?>
                        <?php if($category==3) { ?>
                          <a class="nav-link" href="<?php echo base_url(); ?>site_emp">
                  						 &nbsp &nbsp &nbsp &nbsp &nbsp
                  					Home<span class="sr-only">(current)</span></a><?php } ?>
                </li>
          		<li  class="nav-item">
                <?php if($category==1) { ?>
                  <a class="nav-link" href="<?php echo base_url(); ?>site/msme.html">
                       &nbsp &nbsp &nbsp &nbsp &nbsp
                    MSME</a><?php } ?>

          		</li>
              <li  class="nav-item">
                <?php if($category==1) { ?>
                  <a class="nav-link" href="<?php echo base_url(); ?>site/employee.html">
                       &nbsp &nbsp &nbsp &nbsp &nbsp
                    Employee</a><?php } ?>
                    <?php if($category==2) { ?>
                      <a class="nav-link" href="<?php echo base_url(); ?>site_msme/employee.html">
                           &nbsp &nbsp &nbsp &nbsp &nbsp
                        Employee</a><?php } ?>

          		</li>
                  <?php if($category!=1) { ?>
              <li  class="nav-item">
                <?php if($category==2) { ?>
                  <a class="nav-link" href="<?php echo base_url(); ?>site_msme/transactions.html">
                       &nbsp &nbsp &nbsp &nbsp &nbsp
                    My Transactions</a><?php } ?>
                    <?php if($category==3) { ?>
                      <a class="nav-link" href="<?php echo base_url(); ?>site_emp/transactions.html">
                           &nbsp &nbsp &nbsp &nbsp &nbsp
                        My Transactions</a><?php } ?>

          		</li>
                  <?php } ?>
                  <?php if($category!=1) { ?>
              <li  class="nav-item">
                <?php if($category==2) { ?>
                  <a class="nav-link" href="<?php echo base_url(); ?>site_msme/settings.html">
                       &nbsp &nbsp &nbsp &nbsp &nbsp
                    Settings</a><?php } ?>
                    <?php if($category==3) { ?>
                      <a class="nav-link" href="<?php echo base_url(); ?>site_emp/settings.html">
                           &nbsp &nbsp &nbsp &nbsp &nbsp
                        Settings</a><?php } ?>

          		</li>
                  <?php } ?>
              </ul>
          	</b>

              <div class="dropdown ml-auto">

<button class="btn btn-outline-info dropdown-toggle" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<b><?php echo $this->session->userdata('username'); ?></b>&nbsp &nbsp &nbsp &nbsp &nbsp<img alt="avatar" src="<?php echo base_url(); ?>img/India.png">
</button>
                                                <div class="dropdown-menu" aria-labelledby="about-us">

                        <?php if($category==1) { ?>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>site/logout.html">Logout</a> <?php } ?>
                        <?php if($category==2) { ?>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>site_msme/logout.html">Logout</a> <?php } ?>
                        <?php if($category==3) { ?>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>site_emp/logout.html">Logout</a> <?php } ?>
                            </div>

                    </div></div>
              </nav>
            </div>          </body>


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
