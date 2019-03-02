<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to SIH 2019</title>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">

<nav class="navbar navbar-expand-lg navbar-dark " style="background: #01013D">

	<a class="navbar-brand"  style="color: #FFC70D"><b>6 KA<span class="lite" style="color: white">IZ</span><span class="lite" style="color: #76FF0D">ENS</span></b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
		<b>
    <ul class="nav nav-tabs navbar-nav mr-auto nav-pills" style="font-size: 17px" id="list" role="tablist">
      <li class="nav-item" >
        <a class="nav-link active" style="color: #ffffff" id="homes" href="#home" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
						 &nbsp &nbsp &nbsp &nbsp &nbsp
					Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" style="color: #ffffff" id="abouts" href="#about" role="tab" data-toggle="tab" aria-controls="about" aria-expanded="true">
					   &nbsp &nbsp &nbsp &nbsp &nbsp
					About</a>
      </li>
		<li>
		</li>
    </ul>
	</b>
  </div>



	<div class="dropdown">
<button class="btn btn-warning dropdown-toggle" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
LOGIN
</button>
<div class="dropdown-menu" aria-labelledby="about-us">
<a class="dropdown-item" href="<?php echo base_url(); ?>authentication_login/admin_login.html">ADMIN</a>
<a class="dropdown-item" href="<?php echo base_url(); ?>authentication_login/msme_login.html">HOD</a>
<a class="dropdown-item" href="<?php echo base_url(); ?>authentication_login/emp_login.html">EMPLOYEE</a>
</div>
</div>


</nav>

<div class="jumbotron tab-content" id="list-contents">
	<div role="tabpanel" class="tab-pane fade show active" id="home" aria-labelledby="homes">
<p align="center"><img src="\payroll\img\logomsme1.png"></p>
	</div>

	<div role="tabpanel" class="tab-pane fade show active" id="about" aria-labelledby="a">
		<h1 style="color: #01013D "> <center>6 KAIZENS </center></h1><br><br>
				  <p class="lead">The approach for our project is to create a portal which will comprise of all the details of MSME, their departments and their respective employees. It will contain the details of the payments made to each department and also the salary payments made by each department to the employees. Employees will have their unique ID at the MSME level. Hence, even after shifting to another department, the employee data will be accessible from the company’s database as it will be department independent. Each department will also have their own database which will contain necessary information about the employee, like their PF and Pension accounts, their salaries and any other relevant data which the department requires. Employees will be able to view their past salaries, make rebate/allowance claim. All Employee fund accounts are associated with the Employee ID, and this information is available to their respective department. The salary is given to the employees after deduction, and the deduction data is stored in Department Database and synced with MSME main database.</p>
			<br><br>
	</div>
	<br><br><br>
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
</body>

<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Initialize Bootstrap functionality -->
<script>
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Initialize Bootstrap functionality -->
<script>
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Initialize Bootstrap functionality -->
<script>
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
</html>
