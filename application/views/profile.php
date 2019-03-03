
<?php $category=$this->session->userdata('category'); ?>
<?php if($category==1) { ?>

<div class="jumbotron">
  <br><br><br><br><br><br>
<div class="row">
  <div class="col-lg-2"></div>
    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
        <a href="<?php echo  base_url(); ?>site/create.html">
            <div class="card card-body" style="max-width: 15rem; background: #080076; color: #ffffff; padding: 30px; font-size: 20px">
                <i class="fa fa-reddit-square"></i>
                <div class="title"><center>Create Admin</center></div>
            </div><!--/.info-box-->
        </a>
    </div> <?php } ?><!--/.col-->

    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
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
<br><br><br><br><br><br><br><br><br><br>
</div>
