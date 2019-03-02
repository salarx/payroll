<?php $category=$this->session->userdata('category'); ?>
<?php if($category==3){ ?>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <a href="<?php echo  base_url(); ?>site_emp/transactions.html">
            <div class="info-box blue-bg">
                <div class="count">My Transactions</div>
                <div class="title">Manage Transactions</div>
            </div><!--/.info-box-->
        </a>
    </div><!--/.col-->
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <a href="<?php echo  base_url(); ?>site_emp/settings.html">
            <div class="info-box blue-bg">
                <div class="count">Settings</div>
                <div class="title">Manage settings</div>
            </div><!--/.info-box-->
        </a>
    </div><!--/.col-->
    </div>
    <?php } ?>
