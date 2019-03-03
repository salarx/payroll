<div class="row">
    <div class="col-lg-6">
        <section class="panel">
            <div class="panel-heading text-center">Employee Details</div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>MSME Name:<?php echo $result->msme_name; ?></td>
                    </tr>
                    <tr>
                        <td>Transaction Id : #<?php echo $result->transaction_id; ?></td>
                    </tr>
                    <tr>
                        <td>Amount : <?php echo $result->amount; ?></td>
                    </tr>

                </table>
            </div>
            <div class="panel-footer"></div>
        </section>
    </div>
</div>
