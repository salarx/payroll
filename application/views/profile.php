<?php $category=$this->session->userdata('category'); ?>
<?php if($category==1) { ?>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <a href="<?php echo  base_url(); ?>site/create.html">
            <div class="info-box green-bg">
                <i class="fa fa-reddit-square"></i>
                <div class="title">Create Admin</div>
            </div><!--/.info-box-->
        </a>
    </div> <?php } ?><!--/.col-->

    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <?php if($category==1) { ?>
        <a href="<?php echo  base_url(); ?>site/reset.html"><?php } ?>
        <?php if($category==2) { ?>
        <a href="<?php echo  base_url(); ?>site_dep/reset.html"><?php } ?>
        <?php if($category==3) { ?>
        <a href="<?php echo  base_url(); ?>site_emp/reset.html"><?php } ?>        
            <div class="info-box green-bg">
                <i class="fa fa-clipboard"></i>
                <div class="title">Reset Password</div>
            </div><!--/.info-box-->
        </a>
    </div><!--/.col-->
</div>
