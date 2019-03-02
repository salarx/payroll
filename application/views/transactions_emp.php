<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <table class="table table-responsive table-striped table-advance table-hover">
                    <thead>
                        <tr>
                            <th><i class="icon_profile"></i> Department</th>
                            <th><i class="icon_balance"></i> Amount</th>
                            <th><i class="icon_clipboard"></i> Action</th>
                        </tr>
                    </thead>
                    <?php if(is_array($results)){ ?>
                    <tbody>
                    <?php foreach($results as $list){ ?>
                        <tr>
                            <td>
                              <?php echo $list->dep_name; ?></a>
                            </td>
                            <td><?php echo $list->amount; ?></td>
                            <td><?php echo $list->employee_name; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>transaction_emp/slip/<?php echo $list->transaction_id; ?>">View Slip</a>
                            </td>
                        </tr>
                    <?php } ?>
                  </tbody>
                <?php } ?>
                </table>
                The PF account balance is : <?php echo $balance_1; ?> <br>
                The Pension account balance is : <?php echo $balance_2; ?> <br>
                The Salary account balance is : <?php echo $balance_3; ?> <br>
            </div>
        </section>
        <div class="text-center"><p><?php echo $links; ?></p></div>
    </div>
</div>
