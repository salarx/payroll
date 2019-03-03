<br><br><br>
<?php $category=$this->session->userdata('category'); ?>
<?php if($category==1) { ?>

<div class="container jumbotron">
  <br><br><br><br><br>
<div class="row">

    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <a href="<?php echo  base_url(); ?>site/create.html">

        </a>
    </div> <?php } ?><!--/.col-->
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <?php if($category==1) { ?>
        <a href="<?php echo  base_url(); ?>site/reset.html"><?php } ?>
        <?php if($category==2) { ?>
        <a href="<?php echo  base_url(); ?>site_msme/reset.html"><?php } ?>
        <?php if($category==3) { ?>
        <a href="<?php echo  base_url(); ?>site_emp/reset.html"><?php } ?>
          <div class="card card-body" style="max-width: 15rem; background: #080076; color: #ffffff; padding: 30px; font-size: 20px">
                <i class="fa fa-clipboard"></i>
                <div class="title"><center>Reset Password</center></div>
            </div><!--/.info-box-->
        </a>
    </div><!--/.col-->
</div>
<br><br><br><br><br><br><br><br>
<hr class="my-4">
<br><br>

<footer class="page-footer" style="background:  #01013D; color:white; height: 150px; padding:5px">
  <p><center><br>
    Contact Us: 1234567890<br>
    Email: 6kaizens@gmail.com<br>
    Fax Number: 579412562<br>
  </center></p>
</footer>
</div>
