<br><br>
<?php $category=$this->session->userdata('category'); ?>
<div class="container jumbotron">

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
              <h3><center><b><u> ADD EMPLOYEE</u></b></center></h3><br><br>
                <div class="form">
                    <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(); ?>employee/add_employee_commit.html">
                        <div class="form-group input-group">
                            <label for="name" class="control-label col-lg-2"><b>Full Name *</b></label>
                            <div class="col-lg-10">
                                <input class="form-control" name="name" type="text" required/>
                            </div>
                        </div>
                        <div class="form-group input-group">
                            <label for="phone" class="control-label col-lg-2"><b>Phone *</b></label>
                            <div class="col-lg-10">
                                <input class="form-control" name="phone" maxlength="10" type="text" required/>
                            </div>
                        </div>
                        <div class="form-group input-group">
                            <label for="email" class="control-label col-lg-2"><b>E-mail</b></label>
                            <div class="col-lg-10">
                                <input class="form-control" name="email" type="email"></input>
                            </div>
                        </div>
                        <div class="form-group input-group">
                            <label for="salary" class="control-label col-lg-2"><b>Salary</b></label>
                            <div class="col-lg-10">
                                <input class="form-control" name="salary" type="number"></input>
                            </div>
                        </div>
                        <div class="form-group input-group">
                            <label for="password" class="control-label col-lg-2"><b>Password </b></label>
                            <div class="col-lg-10">
                                <input class="form-control" type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required></input>
                                <label style="color:red">(Password must be 8 to 12 character long.It must contain at least one lowercase letter, a capital (uppercase) letter and a number.)</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 ">
                              &nbsp &nbsp &nbsp &nbsp 
                              <label class="col-lg-11"></label>
                                <button class="btn btn-primary" type="submit">Add</button>
                            </div>
                        </div>
                        <a class="" href="<?php echo base_url(); ?>employee/fetch_employee_with_null.html">Click here to fetch unlisted Employees</a>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
</div>
