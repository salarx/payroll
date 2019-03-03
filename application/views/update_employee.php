<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="form">
                    <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(); ?>employee/update_employee_commit.html">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-2">Full Name</label>
                            <div class="col-lg-10">
                                <input name="id" type="hidden" value="<?php echo $result->emp_id; ?>" />
                                <input class="form-control" name="name" type="text" value="<?php echo $result->employee_name; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label col-lg-2">E-mail</label>
                            <div class="col-lg-10">
                                <input class="form-control" name="email" type="text" value="<?php echo $result->employee_email; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-2">Phone <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control" name="phone" type="text" value="<?php echo $result->employee_phone; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
