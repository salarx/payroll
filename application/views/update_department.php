<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="form">
                    <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(); ?>department/update_dep_commit.html">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-2">Deparment Name</label>
                            <div class="col-lg-10">
                                <input name="id" type="hidden" value="<?php echo $result->dep_id; ?>" />
                                <input class="form-control" name="name" type="text" value="<?php echo $result->dep_name; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="department" class="control-label col-lg-2">HOD</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" name="department" value="<?php echo $result->emp_id; ?>"/>
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
