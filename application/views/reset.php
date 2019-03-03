<br><br><br>
<?php $category=$this->session->userdata('category'); ?>
<section class="content">
  <div class="container jumbotron">
    <div class="box box-default">
        <div class="box-header with-border">
        <?php if($category==1) { ?>
            <h3 class="box-title"><center><b>Admin Profile</b></center></h3>
            <?php } ?>
            <?php if($category==2) { ?>
            <h3 class="box-title"><center><b>MSME Profile</b></center></h3>
            <?php } ?>
            <?php if($category==3) { ?>
            <h3 class="box-title"><center><b>Employee Profile</b></center></h3>
            <?php } ?>
            <br><br>
        </div>
        <div class="box-body">
            <div class="col-xs-5">
            <?php if($category==1) { ?>
                <form action="<?php echo base_url(); ?>site/reset_password.html" method="post"><?php } ?>
                <?php if($category==2) { ?>
                <form action="<?php echo base_url(); ?>site_msme/reset_password.html" method="post"><?php } ?>
                <?php if($category==3) { ?>
                <form action="<?php echo base_url(); ?>site_emp/reset_password.html" method="post"><?php } ?>
                    <div class="form-group has-feedback input-group">
                        <label class="col-lg-2" for="Password"><center><b>Password</b></center></label>
                        <input type="password" name="password" class="form-control col-lg-6" placeholder="Password" required/>
                    </div>

                        <div class="col-xs-12">
                          <label class="col-lg-7"></label>
                            <button type="submit" class="btn btn-primary col-lg-1">Reset</button>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer"></div></div>
    </div><!-- /.box -->
</section><!-- /.content -->
