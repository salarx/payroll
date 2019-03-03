<head>
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">
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
                            <th><i class="icon_clipboard"></i> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($results as $list){ ?>
                        <tr>
                            <td>
                              <?php echo $list->msme_name;?>
                            </td>
                            <td>
                                <a href="<?php echo base_url(); ?>department/update_dep/<?php echo $list->msme_id; ?>">Edit</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </section>
        <div class="text-center"><p><?php echo $links; ?></p></div>
    </div>
</div>
</div>
</body>
