<div class="row">
    <div class="col-lg-6">
        <section class="panel">
            <div class="panel-heading text-center">Payment Slip</div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>Employee Name:<?php echo $result->employee_name; ?></td>
                    </tr>
                    <tr>
                        <td>Pension: <?php echo $result->balance_2; ?></td>
                    </tr>
                    <tr>
                        <td>PF: <?php echo $result->balance_1; ?></td>
                    </tr>
                    <tr>
                        <td>ESI: <?php echo $result->balance_3; ?></td>
                    </tr>
                    <tr>
                        <td>Basic Salary: <?php echo $result->basic_salary; ?></td>
                    </tr>
                </table>
            </div>
            <div class="panel-footer"></div>
        </section>
    </div>
</div>
