<head>
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">
</head>
<body>
<?php $category=$this->session->userdata('category'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel-body">
              <a href="<?php echo base_url(); ?>employee/add_employee/">Add</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <table class="table table-responsive table-striped table-advance table-hover">
                    <thead>
                        <tr>
                            <th><i class="icon_profile"></i> Full Name</th>
                            <th><i class="icon_datareport_alt"></i> Department</th>
                            <th><i class="icon_clipboard"></i> Action</th>
                        </tr>
                    </thead>
                    <?php if(is_array($results)){ ?>
                    <tbody>
                    <?php foreach($results as $list){ ?>
                        <tr>
                            <td>
                                <a href="<?php echo base_url(); ?>employee/view_employee/<?php echo $list->emp_id; ?>"><?php echo $list->employee_name; ?></a>
                            </td>
                            <td><?php echo $list->msme_name; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>employee/update_employee/<?php echo $list->emp_id; ?>">Edit</a>|
                                <?php if($category!=1){ ?>
                                <a href="<?php echo base_url(); ?>transaction_msme/add_transaction/<?php echo $list->emp_id; ?>">Pay</a>|<?php } ?>
								<a href="<?php echo base_url(); ?>employee/delete_employee/<?php echo $list->emp_id; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                  </tbody>
                <?php } ?>
                </table>
            </div>
        </section>
        <div class="text-center"><p><?php echo $links; ?></p></div>
    </div>
</div>
</body>
