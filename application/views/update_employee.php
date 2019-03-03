<br><br>
<div class="container jumbotron">
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="form">
                    <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(); ?>employee/update_employee_commit.html">
                        <div class="form-group input-group">
                          <label class="col-lg-1"></label>
                            <label for="name" class="control-label col-lg-2" style="font-size:17px"><b>Full Name</b></label>
                            <div class="col-lg-7">
                                <input name="id" type="hidden" value="<?php echo $result->emp_id; ?>" />
                                <input class="form-control" name="name" type="text" value="<?php echo $result->employee_name; ?>"/>
                            </div>
                        </div>
                        <div class="form-group input-group">
                            <label class="col-lg-1"></label>
                            <label for="email" class="control-label col-lg-2" style="font-size:17px"><b>E-mail</b></label>
                            <div class="col-lg-7">
                                <input class="form-control" name="email" type="text" value="<?php echo $result->employee_email; ?>" />
                            </div>
                        </div>
                        <div class="form-group input-group input-group">
                            <label class="col-lg-1"></label>
                            <label for="phone" class="control-label col-lg-2" style="font-size:17px"><b>Phone </b><span class="required">*</span></label>
                            <div class="col-lg-7">
                                <input class="form-control" name="phone" type="text" value="<?php echo $result->employee_phone; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-offset-2 col-lg-9"></label>
                                <button class="btn btn-primary" type="submit">Update</button>

                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
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
