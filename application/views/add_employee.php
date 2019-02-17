<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="form">
                    <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(); ?>employee/add_employee_commit.html">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-2">Full Name</label>
                            <div class="col-lg-10">
                                <input class="form-control" name="name" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="type" class="control-label col-lg-2">Department</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="department">
                                        <option value="1">Production</option>
                                        <option value="2" >Research and Development</option>
                                        <option value="3">Marketing</option>
                                        <option value="4">Purchasing</option>
                                        <option value="5">Human Resource Management</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="type" class="control-label col-lg-2">Designation</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="designation">
                                        <option value="1">Trainee Engineer</option>
                                        <option value="2" >Software Engineer</option>
                                        <option value="3">System Analyst</option>
                                        <option value="4">Programmer Analyst</option>
                                        <option value="5">Senior Software Engineer</option>
                                        <option value="5">Project Lead</option>
                                        <option value="5">Project Manager</option>
                                        <option value="5">Program Manager</option>
                                        <option value="5">Architect</option>
                                        <option value="5">Technical Specialist</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-2">Phone <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control" name="phone" type="text"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="control-label col-lg-2">Address</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" name="address"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="type" class="control-label col-lg-2">Payment Type</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="type">
                                        <option value="1">Hourly</option>
                                        <option value="2" >Contractual</option>
                                        <option value="3">Daily</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="control-label col-lg-2">Payment Status</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="status">
                                    <option value="1">Permanent</option>
                                    <option value="2">Temporary</option>
                                    <option value="3">Probation</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
