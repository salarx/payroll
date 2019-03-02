<div class="container-fluid">
<div class="jumbotron">
<br>
<?php $category=$this->session->userdata('category'); ?>
<?php if($category==1){ ?>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <a href="<?php echo  base_url(); ?>site/employee.html">
        <div class="card card-body" style="max-width: 20rem; background: #080076; color: #ffffff">
          <h4 class="card-title">EMPLOYEES</h4>
          <p class="card-text">Manage Employees</p><!--/.info-box-->
    </div><!--/.col-->
    </a>
    </div>


    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
         <a href="<?php echo  base_url(); ?>site/department.html">
           <div class="card card-body" style="max-width: 20rem; background: #080076; color: #ffffff">
             <h4 class="card-title">HOD</h4>
             <p class="card-text">Manage HOD</p><!--/.info-box-->
       </div><!--/.info-box-->
        </a>
      </div>
    <!--/.col-->
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <a href="<?php echo  base_url(); ?>site/transactions.html">
          <div class="card card-body" style="max-width: 20rem; background: #080076; color: #ffffff">
            <h4 class="card-title">TRANSACTIONS</h4>
            <p class="card-text">Manage Transaction</p><!--/.info-box-->
      </div><!--/.info-box-->
        </a>
    </div><!--/.col-->
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <a href="<?php echo  base_url(); ?>site/settings.html">
          <div class="card card-body" style="max-width: 20rem; background: #080076; color: #ffffff">
            <h4 class="card-title">SETTINGS</h4>
            <p class="card-text">Manage Settings</p><!--/.info-box-->
      </div><!--/.info-box-->
        </a>
    </div><!--/.col-->

   </div>
<?php } ?>
</div>
</div>
