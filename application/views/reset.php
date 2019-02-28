<!-- Main content -->
<?php $category=$this->session->userdata('category'); ?>
<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
        <?php if($category==1) { ?>
            <h3 class="box-title">Admin Profile</h3>
            <?php } ?>
            <?php if($category==2) { ?>
            <h3 class="box-title">HOD Profile</h3>
            <?php } ?>
            <?php if($category==3) { ?>
            <h3 class="box-title">Employee Profile</h3>
            <?php } ?>
        </div>
        <div class="box-body">
            <div class="col-xs-5">
            <?php if($category==1) { ?>
                <form action="<?php echo base_url(); ?>site/reset_password.html" method="post"><?php } ?>
                <?php if($category==2) { ?>
                <form action="<?php echo base_url(); ?>site_dep/reset_password.html" method="post"><?php } ?>
                <?php if($category==3) { ?>
                <form action="<?php echo base_url(); ?>site_emp/reset_password.html" method="post"><?php } ?>
                    <div class="form-group has-feedback">
                        <label for="Password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-primary pull-right">Reset</button>
                        </div><!-- /.col -->
                    </div>
                </form>
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer"></div>
    </div><!-- /.box -->
</section><!-- /.content -->
