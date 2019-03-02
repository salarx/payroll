<link href="<?php echo base_url(); ?>css/elegant-icons-style.css" rel="stylesheet" />
<div class="container-fluid">
<div class="jumbotron">
<br><br><br>
<?php $category=$this->session->userdata('category'); ?>
<?php if($category==1){ ?>
<div class="row">
  <div class="col-lg-2 col-md-2"></div>
    <div class="col-lg-5 col-md-3 col-sm-12 col-xs-12">
        <a href="<?php echo  base_url(); ?>site/employee.html">
        <div class="card card-body" style="max-width: 20rem; background: #080076; color: #ffffff">
            <i class="icon_id"></i>
          <h4 class="card-title">EMPLOYEES</h4>
          <p class="card-text">Manage Employees</p><!--/.info-box-->
    </div><!--/.col-->
    </a>
    </div>


    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
         <a href="<?php echo  base_url(); ?>site/department.html">
           <div class="card card-body" style="max-width: 20rem; background: #080076; color: #ffffff">
             <i class="icon_datareport"></i>
             <h4 class="card-title">HOD</h4>
             <p class="card-text">Manage HOD</p><!--/.info-box-->
       </div><!--/.info-box-->
        </a>
      </div>
    <!--/.col-->
</div>

<br><br>
    <div class="row">
      <div class="col-lg-2 col-md-2"></div>
    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
        <a href="<?php echo  base_url(); ?>site/transactions.html" >
          <div class="card card-body" style="max-width: 20rem; background: #080076; color: #ffffff">
            <i class="icon_clipboard"></i> 
            <h4 class="card-title">TRANSACTIONS</h4>
            <p class="card-text">Manage Transaction</p><!--/.info-box-->
      </div><!--/.info-box-->
        </a>
    </div><!--/.col-->
    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <a href="<?php echo  base_url(); ?>site/settings.html">
                <div class="card card-body" style="max-width: 20rem; background: #080076; color: #ffffff">
            <i class="icon_cog"></i>
            <h4 class="card-title">SETTINGS</h4>
            <p class="card-text">Manage Settings</p><!--/.info-box-->
      <!--/.info-box-->
      </div>
        </a>

    </div><!--/.col-->

   </div>
<?php } ?>
<br> <br> <br> <br>
</div>
</div>
