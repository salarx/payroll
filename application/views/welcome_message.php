<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">6 KAI ZENS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
		<li>


		</li>
    </ul>
  </div>

	<div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
LOGIN
</button>
<div class="dropdown-menu" aria-labelledby="about-us">
<a class="dropdown-item" href="<?php echo base_url(); ?>authentication_login/admin_login.html">ADMIN</a>
<a class="dropdown-item" href="<?php echo base_url(); ?>authentication_login/hod_login.html">HOD</a>
<a class="dropdown-item" href="<?php echo base_url(); ?>authentication_login/emp_login.html">EMPLOYEE</a>
</div>
</div>


</nav>

<div class="jumbotron">
  <h1 class="display-3">Hello,</h1>
  <p class="lead">Our approach is to create a portal which will comprise of all details of MSME, their departments and their respective employees. It will contain the details of the payments made to each department and also the salary payments made by each department to the employees. Employees will have their unique ID at the MSME level. Hence, even after shifting to another department, the employee data will be accessible from the company’s database as it will be department independent. Each department will also have their own database which will contain necessary information about the employee, like their PF and Pension accounts, their salaries and any other relevant data which the department requires. Employees will be able to view their past salaries, make rebate/allowance claim. All Employee fund accounts are associated with the Employee ID, and this information is available to their respective department. The salary is given to the employees after deduction, and the deduction data is stored in Department Database and synced with MSME main database.</p>
  <hr class="my-4">
  <p>To login, click on the buttons below. Happy Coding</p>
  
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



</html>
