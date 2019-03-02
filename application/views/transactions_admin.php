<head>
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">
</head>
<body>
<div class="row">
    <div class="col-lg-5">
        <section class="panel">
            <div class="container">

                    <table class="table table-responsive table-bordered table-striped table-advance table-hover">
                    <thead>
                        <tr class="table-warning" style="font-size:14px">
                            <th><i class="icon_profile"></i> Admin</th>
                            <th><i class="icon_balance"></i> Amount</th>
                            <th><i class="icon_bag"></i> Department Name</th>
                            <th><i class="icon_clipboard"></i> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($results as $list){ ?>
                        <tr>
                            <td>
                              <?php echo $list->admin_username; ?></a>
                            </td>
                            <td><?php echo $list->amount; ?></td>
                            <td><?php echo $list->dep_name; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>transaction_admin/slip/<?php echo $list->transaction_id; ?>">View Slip</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </section>
        <div class="text-center"><p><?php echo $links; ?></p></div>
    </div>
</div>
</body>
