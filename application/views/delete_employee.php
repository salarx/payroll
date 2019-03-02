<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="form">
                    <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(); ?>employee/delete_employee_commit.html">
                        <div class="form-group">
                            <label for="amount" class="control-label col-lg-2">Enter password to confirm deletion</label>
                            <div class="col-lg-10">
                                <input name="id" type="hidden" value="<?php echo $employee_id; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" name="password"/>
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
