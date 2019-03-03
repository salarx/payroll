<link href="<?php echo base_url(); ?>css/elegant-icons-style.css" rel="stylesheet" />
<div class="container-fluid">
<div class="jumbotron">
<br><br><br><br><br>
<?php $category=$this->session->userdata('category'); ?>
<?php if($category==2){ ?>
<div class="row">
<label class="col-lg-2"></label>
    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
        <a href="<?php echo  base_url(); ?>site_msme/employee.html">
        <div class="card card-body" style="max-width: 20rem; background: #080076; color: #ffffff">
            <i class="icon_id"></i>
          <h4 class="card-title">EMPLOYEES</h4>
          <p class="card-text">Manage Employees</p><!--/.info-box-->
    </div><!--/.col-->
    </a>
    </div><!--/.col-->


    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
        <a href="<?php echo  base_url(); ?>site_msme/transactions.html" >
          <div class="card card-body" style="max-width: 20rem; background: #080076; color: #ffffff">
            <i class="icon_clipboard"></i>
            <h4 class="card-title">TRANSACTIONS</h4>
            <p class="card-text">Manage Transaction</p><!--/.info-box-->
      </div><!--/.info-box-->
        </a>
    </div><!--/.col-->




<?php } ?>
<br> <br> <br> <br><br><br><br><br><br><br><br><br><br><br>
</div>
</div>
