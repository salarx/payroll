<br><br>
<div class="container jumbotron">
<div class="row">
<label class="col-lg-5"></label>
<div class="column">
        <section class="panel">
            <div class="panel-heading text-center" style="font-size:20px"><center><b><u>Payment Slip</u></b></center></div>
          <br><br>  <div class="panel-body">
                <table class="table  table-responsive text-center table-striped table-hover table-bordered">
                    <tr>
                        <td>Employee Name:</td><td><?php echo $result->employee_name; ?></td>
                    </tr>
                    <tr>
                        <td>Pension: </td><td><?php echo $result->balance_2; ?></td>
                    </tr>
                    <tr>
                        <td>PF:</td><td> <?php echo $result->balance_1; ?></td>
                    </tr>
                    <tr>
                        <td>ESI: </td><td><?php echo $result->balance_3; ?></td>
                    </tr>
                    <tr>
                        <td>Basic Salary: </td><td><?php echo $result->basic_salary; ?></td>
                    </tr>
                </table>
            </div>
            <div class="panel-footer"></div>
        </section>
      </div>
    </div>
    <br><br><br><br><br>
    <hr class="my-4">


    <footer class="page-footer" style="background:  #01013D; color:white; height: 150px; padding:5px">
      <p><center><br>
        Contact Us: 1234567890<br>
        Email: 6kaizens@gmail.com<br>
        Fax Number: 579412562<br>
      </center></p>
    </footer>
</div>
</div>
