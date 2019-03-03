<div class="row">
    <div class="col-lg-6">
        <section class="panel">
            <div class="panel-heading text-center">Employee Details</div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>Employee ID: #<?php echo $result->emp_id; ?></td>
                    </tr>
                    <tr>
                        <td>Employee Name: <?php echo $result->employee_name; ?></td>
                    </tr>
                    <tr>
                        <td>PF Account : <?php echo $result->balance_1; ?></td>
                    </tr>
                    <tr>
                        <td>Pension Amount: <?php echo $result->balance_2; ?></td>
                    </tr>
                    <tr>
                        <td>ESI Amount: <?php echo $result->balance_3; ?></td>
                    </tr>
                </table>
            </div>
            <div class="panel-footer"></div>
        </section>
    </div>
</div>
