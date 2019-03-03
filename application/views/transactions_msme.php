<head>
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">
</head>
<body>
<br><br>
<?php $category=$this->session->userdata('category'); ?>
<div class="container">
<div class="row">
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  <label class="col-lg-4"></label>
    <div class="column">
        <section class="panel">
            <div class="panel-body">
              <a href = "<?php echo base_url(); ?>transaction_msme/add_transaction"align="right"><button type="button" class=" btn btn-warning btn-lg">+</button></a>
                <b>  Add Transaction</b> <br><br><br> <table class="table table-responsive text-center table-bordered table-striped table-advance table-hover">
                  <br><br>  <thead>
                        <tr>
                            <th><i class="icon_profile"></i><b> MSME</b></th>
                            <th><i class="icon_balance"></i><b> Amount</b></th>
                            <th><i class="icon_clipboard"></i><b> Action</b></th>
                        </tr>
                    </thead>
                    <?php if(is_array($results)){ ?>
                    <tbody>
                    <?php foreach($results as $list){ ?>
                        <tr>
                            <td>
                              <?php echo $list->msme_name; ?></a>
                            </td>
                            <td><?php echo $list->amount; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>transaction_msme/slip/<?php echo $list->transaction_id; ?>">View Slip</a>
                            </td>
                        </tr>
                    <?php } ?>
                  </tbody>
                <?php } ?>
                </table>
            </div>
        </section>
        <div class="text-center"><p><?php echo $links; ?></p></div>
    </div></div>
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
</body>
