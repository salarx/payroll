<head>
  <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">
</head>
<body>
<br><br>
<div class="container ">
  <div class="row">
      <div class="col-lg-12">
          <div class="panel-body">
            <b>  ADD MSME</b>  <a href="<?php echo base_url(); ?>msme/add_msme/" align="right"><button type="button" class=" btn btn-warning btn-lg">+</button></a>
          </div>
      </div>
  </div>
  <br>
<div class="row">

        <div class="column col-lg-4"></div>
          <div class="column">
        <section class="panel">
            <div class="panel-body">
                <table class="table table-responsive table-bordered table-striped text-center table-advance table-hover">
                    <thead>
                        <tr>
                            <th><i class="icon_datareport"></i> MSME Name</th>
                            <th><i class="icon_clipboard"></i> MSME ID</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($results as $list){ ?>
                        <tr>
                            <td>
                              <?php echo $list->msme_name;?>
                            </td>
                            <td>
                                <?php echo $list->msme_id;?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </section>
        <div class="text-center"><p><?php echo $links; ?></p></div>
    </div>
</div>
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
