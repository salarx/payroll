<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-heading">Employee Information</div>
            <div class="panel-body">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>Information</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>Employee Id# <?php echo $result->employee_id; ?></p>
                                <p>Name: <?php echo $result->employee_name; ?></p>            
                                <p>Phone: <?php echo $result->employee_phone; ?></p>
                                <p>E-Mail: <?php echo $result->employee_email; ?></p>
                                <p>PF: <?php echo $result->balance_1; ?></p>                                
                                <p>Pension: <?php echo $result->balance_2; ?></p>
                                <p>ESI: <?php echo $result->balance_3; ?></p>
                                <p>MSME: <?php echo $result->employee_msme; ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="panel-footer"></div>
        </section>
    </div>
</div>