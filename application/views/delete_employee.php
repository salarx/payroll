<br><br><br>
<div class="container jumbotron">
<?php $category=$this->session->userdata('category'); ?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="form">
                    <?php if($category==2){ ?>
                    <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(); ?>employee/delete_employee_commit.html"><?php } ?>
                    <div class="form-group">
                            <h2 class="control-label" style="font-size:17px"><center><b><u>Enter password to confirm deletion</u></b></center></h2>
                            <div class="col-lg-10">
                                <input name="id" type="hidden" value="<?php echo $emp_id; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="password" name="password" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
</div>
