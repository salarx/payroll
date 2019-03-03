<head>
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">
</head>
<body>
<br><br>
<?php $category=$this->session->userdata('category'); ?>
<div class="container">

<br>
<div class="row">
  <div class="column col-lg-4"></div>
    <div class="column">
        <section class="panel">
            <div class="panel-body">
                <table class="table table-responsive text-center table-striped table-hover table-bordered" >
                    <thead>
                        <tr>
                            <th><i class="icon_profile"></i><b> Full Name</b></th>
                            <th><i class="icon_datareport_alt"></i><b> MSME</b></th>
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
                              <?php if($category==2){ ?>
                                <a href="<?php echo base_url(); ?>employee/update_employee/<?php echo $list->emp_id; ?>">Edit</a>|
								                <a href="<?php echo base_url(); ?>employee/delete_employee/<?php echo $list->emp_id; ?>">Delete</a>
                              <?php } ?>
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
<br> <br> <br> <br> <br> <br> <br> <br>
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
