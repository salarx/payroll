<br><br>
<div class="container jumbotron">
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="form">
                    <?php if($this->session->userdata('category') == 2) { ?>
                    <form class="form-validate form-horizontal" id="feedback_form" method="post" style="font-size:20px" action="<?php echo base_url(); ?>transaction_msme/add_transaction_commit.html"><?php } ?>
                  <center>    <b>  Amount : <?php echo $amount; ?> </b> </center>
                  <br><br>
                        <input type="hidden" name = 'amount' value = "<?php echo $amount; ?>">
                        <?php if($this->session->userdata('category') == 2) { ?>
                        <div class="form-group input-group">
                            <label for="password" class="control-label col-lg-2"><b>Password *</b></label>
                            <div class="col-lg-8">
                                <input class="form-control" type="password" name="password" required/>
                            </div>
                        </div>
                      <?php } ?>
                        <div class="form-group">
                            <div class="col-lg-offset-2 ">
                              <label class="col-lg-9"></label>
                              &nbsp &nbsp &nbsp  <button class="btn btn-primary" type="submit">Pay</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>


</div>

<br><br><br><br><br>
<hr class="my-4">


<footer class="page-footer" style="background:  #01013D; color:white; height: 150px; padding:5px">
  <p><center><br>
    Contact Us: 1234567890<br>
    Email: 6kaizens@gmail.com<br>
    Fax Number: 579412562<br>
  </center></p>
</footer>
</div>
