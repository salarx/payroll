<link href="<?php echo base_url(); ?>css/elegant-icons-style.css" rel="stylesheet" />
<div class="container-fluid">
<div class="jumbotron">
<br><br><br><br><br><br>
<?php $category=$this->session->userdata('category'); ?>
<?php if($category==3){ ?>
<div class="row">

      <div class="col-lg-2 col-md-2"></div>
    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
        <a href="<?php echo  base_url(); ?>site_emp/transactions.html" >
          <div class="card card-body" style="max-width: 20rem; background: #080076; color: #ffffff">
            <i class="icon_clipboard"></i>
          <center>  <h4 class="card-title">Bank Balance</h4>
            <p class="card-text">Manage Transaction</p></center><!--/.info-box-->
      </div><!--/.info-box-->
        </a>
    </div><!--/.col-->
    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <a href="<?php echo  base_url(); ?>site_emp/settings.html">
                <div class="card card-body" style="max-width: 20rem; background: #080076; color: #ffffff">
            <i class="icon_cog"></i>
          <center>  <h4 class="card-title">SETTINGS</h4>
            <p class="card-text">Manage Settings</p></center><!--/.info-box-->
      <!--/.info-box-->
      </div>
        </a>

    <!--/.col-->

   </div>
    <?php } ?>
    <br> <br> <br> <br>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</div>
