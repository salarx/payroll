<link href="<?php echo base_url(); ?>css/elegant-icons-style.css" rel="stylesheet" />
<div class="container-fluid">
<br>
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
        <center>   <h4 class="card-title">EMPLOYEES</h4>
          <p class="card-text">Manage Employees</p></center><!--/.info-box-->
    </div><!--/.col-->
    </a>
    </div>


    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
         <a href="<?php echo  base_url(); ?>site/msme.html">
           <div class="card card-body" style="max-width: 20rem; background: #080076; color: #ffffff">
             <i class="icon_datareport"></i>
          <center>   <h4 class="card-title">HOD</h4>
             <p class="card-text">Manage HOD</p></center><!--/.info-box-->
       </div><!--/.info-box-->
        </a>
      </div>
    <!--/.col-->
</div>

<br><br><br>
    <div class="row">
      <div class="col-lg-4 col-md-4"></div>
    <!--/.col-->&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <a href="<?php echo  base_url(); ?>site/settings.html">
                <div class="card card-body" style="max-width: 20rem; background: #080076; color: #ffffff">
            <i class="icon_cog"></i>
            <center><h4 class="card-title">SETTINGS</h4>
            <p class="card-text">Manage Settings</p></center><!--/.info-box-->
      <!--/.info-box-->
      </div>
        </a>

    </div><!--/.col-->

   </div>
<?php } ?>
<br> <br> <br> <br> <br> <br>
<hr class="my-4">
<footer class="page-footer" style="background:  #01013D; color:white; height: 150px; padding:5px">
  <p><center><br>
    Contact Us: 1234567890<br>
    Email: 6kaizens@gmail.com<br>
    Fax Number: 579412562<br>
  </center></p>
</footer>
</div>
</div>
