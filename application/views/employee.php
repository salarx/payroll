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
                            <th><i class="icon_datareport"></i> Designation</th>
                            <th><i class="icon_datareport_alt"></i> Department</th>
                            <th><i class="icon_clipboard"></i> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($results as $list){ ?>
                        <tr>
                            <td>
                                <a href="<?php echo base_url(); ?>employee/view_employee/<?php echo $list->employee_id; ?>"><?php echo $list->employee_name; ?></a>
                            </td>
                            <td><?php echo $list->designation; ?></td>
                            <td><?php echo $list->dep_name; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>employee/update_employee/<?php echo $list->employee_id; ?>">Edit</a>|
                                <?php if($category!=1){ ?>
                                <a href="<?php echo base_url(); ?>transaction_dep/add_transaction/<?php echo $list->employee_id; ?>">Pay</a>|<?php } ?>
								<a href="<?php echo base_url(); ?>employee/delete_employee/<?php echo $list->employee_id; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </section>
        <div class="text-center"><p><?php echo $links; ?></p></div>
    </div>
</div>
