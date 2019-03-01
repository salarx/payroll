<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <table class="table table-responsive table-striped table-advance table-hover">
                    <thead>
                        <tr>
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
