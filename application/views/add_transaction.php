<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="form">
                    <?php if($this->session->userdata('category') == 2) { ?>
                    <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(); ?>transaction_msme/add_transaction_commit.html"><?php } ?>
                        Amount : <?php echo $amount; ?>
                        <input type="hidden" name = 'amount' value = "<?php echo $amount; ?>">
                        <?php if($this->session->userdata('category') == 2) { ?>
                        <div class="form-group">
                            <label for="password" class="control-label col-lg-2">Password *</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="password" name="password" required/>
                            </div>
                        </div>
                      <?php } ?>
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
