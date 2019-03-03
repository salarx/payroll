<br><br><div class="container jumbotron">
<div class="row">
    <div class="column col-lg-4"></div>
    <div class="column">
        <section class="panel">
            <h3 class="panel-heading"><b><center><u>Employee Information</u></center></b></h3>
            <br><br>
            <div class="col-lg-4"></div>
            <div class="panel-body">
                <table class="table table-responsive table-bordered table-hover" style="font-size:17px">

                    <thead>
                        <tr>
                            <th><b><center>Information</center></b></th>
                        </tr>
                    </thead>
                    <tbody>


                          <tr>      <td>  Employee Id#</td> <td><?php echo $result->emp_id; ?></td></td></tr>
                          <tr>      <td>Name:</td> <td><?php echo $result->employee_name; ?></td></tr>
                          <tr>      <td>Phone:</td> <td><?php echo $result->employee_phone; ?></td></tr>
                          <tr>      <td>E-Mail:</td> <td><?php echo $result->employee_email; ?></td></tr>
                          <tr>      <td>PF:</td> <td><?php echo $result->balance_1; ?></td></tr>
                          <tr>      <td>Pension:</td> <td><?php echo $result->balance_2; ?></td></tr>
                          <tr>      <td>ESI:</td> <td><?php echo $result->balance_3; ?></td></tr>
                          <tr>      <td>MSME:</td> <td><?php echo $result->employee_msme; ?></td></tr>


                    </tbody>
                </table>
            </div>
            <div class="panel-footer"></div>
        </section>
    </div>
</div>
</div>
