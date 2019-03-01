<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="form">
                  <?php if($this->session->userdata('category') == 1) { ?>
                    <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(); ?>transaction_admin/add_transaction_commit.html"><?php } ?>
                    <?php if($this->session->userdata('category') == 2) { ?>
                    <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(); ?>transaction_dep/add_transaction_commit.html"><?php } ?>
                        <div class="form-group">
                            <label for="amount" class="control-label col-lg-2">Amount</label>
                            <div class="col-lg-10">
                            <?php if($this->session->userdata('category') == 1) { ?>
                                <input name="id" type="hidden" value="<?php echo $dep_id; ?>" /><?php } ?>
                                <?php if($this->session->userdata('category') == 2) { ?>
                                <input name="id" type="hidden" value="<?php echo $employee_id; ?>" /><?php } ?>
                                <input class="form-control" name="amount" type="text"/>
                            </div>
                        </div>
                        <?php if($this->session->userdata('category') == 2) { ?>
                        <div class="form-group">
                            <label for="account_type" class="control-label col-lg-2">Account Type</label>
                            <div class="col-lg-10">
                                  <select class="form-control" name="account_type">
                                          <option value="1">PF</option>
                                          <option value="2">Pension</option>
                                          <option value="3">Salary</option>
                                  </select>
                            </div>
                        </div>
                      <?php } ?>
                        <div class="form-group">
                            <label for="password" class="control-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" name="password"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">Pay</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
