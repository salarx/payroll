<br><br>
<div class="container jumbotron">
<div class="row">
    <label class="col-lg-5"></label>
    <div class="column">
        <section class="panel">
            <div class="panel-heading text-center" style="font-size:27px"><b><center><u>Employee Details</u></center></b></div>
          <br><br>  <div class="panel-body">
                <table class="table table-responsive text-center table-striped table-hover table-bordered">
                    <tr>
                        <td>MSME Name:</td><td><?php echo $result->msme_name; ?></td>
                    </tr>
                    <tr>
                        <td>Transaction Id :</td> <td>#<?php echo $result->transaction_id; ?></td>
                    </tr>
                    <tr>
                        <td>Amount :</td> <td><?php echo $result->amount; ?></td>
                    </tr>

                </table>
            </div>
            <div class="panel-footer"></div>
        </section>
    </div>
</div>
</div>
