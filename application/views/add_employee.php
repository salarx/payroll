<?php $category=$this->session->userdata('category'); ?>
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
                            <label for="msme" class="control-label col-lg-2">MSME</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="msme">
                                        <option value="1">MSME1</option>
                                        <option value="2">MSME2</option>
                                        <option value="3">MSME3</option>
                                        <option value="4">MSME4</option>
                                        <option value="5">MSME5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-2">Phone *</label>
                            <div class="col-lg-10">
                                <input class="form-control" name="phone" maxlength="10" type="text" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label col-lg-2">E-mail *</label>
                            <div class="col-lg-10">
                                <input class="form-control" name="email" required></input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="password" name="password"></input>
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
