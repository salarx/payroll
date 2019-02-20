<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <table class="table table-responsive table-striped table-advance table-hover">
                    <thead>
                        <tr>
                            <th><i class="icon_datareport"></i> Department Name</th>
                            <th><i class="icon_profile"></i> Head of Department</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($results as $list){ ?>
                        <tr>
                            <td>
                              <?php echo $list->dep_name;?>
                            </td>
                            <td>
                              <?php echo $list->employee_name;?>
                            </td>
                            <td>
                                <a href="<?php echo base_url(); ?>department/update_dep/<?php echo $list->dep_id; ?>">Edit</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </section>
        <div class="text-center"><p><?php echo $links; ?></p></div>
    </div>
</div>
