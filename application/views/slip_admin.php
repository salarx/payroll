<div class="row">
    <div class="col-lg-6">
        <section class="panel">
            <div class="panel-heading text-center">Payment Slip</div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>Transaction ID: #<?php echo $result->transaction_id; ?></td>
                    </tr>
                    <tr>
                        <td>Admin Name: <?php echo $result->admin_username; ?></td>
                    </tr>
                    <tr>
                        <td>Department Name: <?php echo $result->dep_name; ?></td>
                    </tr>
                    <tr>
                        <td>Amount: <?php echo $result->amount; ?></td>
                    </tr>
                    <tr>
                        <td>Amount: <?php echo $result->amount; ?></td>
                    </tr>
                    <tr>
                        <td>Date and Time: <?php echo $result->date; ?></td>
                    </tr>
                </table>
            </div>
            <div class="panel-footer"></div>
        </section>
    </div>
</div>
