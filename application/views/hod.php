<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <table class="table table-responsive table-striped table-advance table-hover">
                    <thead>
                        <tr>
                            <th><i class="icon_profile"></i> Department Name</th>
                            <th><i class="icon_datareport"></i> Head of Department</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($results as $list){ ?>
                        <tr>
                            <td>
                                <a href="<?php echo base_url(); ?>employee/view_employee/<?php echo $list->employee_id; ?>"><?php echo $list->employee_name; ?></a>
                            </td>
                            <td><?php echo $list->employee_designation; ?></td>
                            <td><?php echo $list->employee_department; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>employee/update_employee/<?php echo $list->employee_id; ?>">Edit</a>
                                <?php if($list->employee_salary == 0 ) {?>
                                | <a href="<?php echo base_url(); ?>salary/add_salary/<?php echo $list->employee_id; ?>">Salary</a>
                                <?php }?>
								|
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
