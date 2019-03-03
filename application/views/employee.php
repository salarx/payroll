<head>
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">
</head>
<body>
<br><br>
<?php $category=$this->session->userdata('category'); ?>
<div class="container">
<div class="row">
    <div class="col-lg-12">
        <div class="panel-body">
              <a href="<?php echo base_url(); ?>employee/add_employee/" align="right"><button type="button" class=" btn btn-warning btn-lg">+</button></a>
        </div>
    </div>
</div>
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
                            <th><i class="icon_clipboard"></i> <b>Action</b></th>
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
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Initialize Bootstrap functionality -->
<script>
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
