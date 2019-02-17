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

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">6 KAI ZEN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
  </div>
</nav>

<div class="jumbotron">
  <h1 class="display-3">Hello,</h1>
  <p class="lead">Our approach is to create a portal which will comprise of all details of MSME, their departments and their respective employees. It will contain the details of the payments made to each department and also the salary payments made by each department to the employees. Employees will have their unique ID at the MSME level. Hence, even after shifting to another department, the employee data will be accessible from the company’s database as it will be department independent. Each department will also have their own database which will contain necessary information about the employee, like their PF and Pension accounts, their salaries and any other relevant data which the department requires. Employees will be able to view their past salaries, make rebate/allowance claim. All Employee fund accounts are associated with the Employee ID, and this information is available to their respective department. The salary is given to the employees after deduction, and the deduction data is stored in Department Database and synced with MSME main database.</p>
  <hr class="my-4">
  <p>To login, click on the buttons below. Happy Coding</p>
  <p class="lead">
  <button type="button" class="btn btn-primary">Admin</button>
  <button type="button" class="btn btn-primary">HOD</button>
  <button type="button" class="btn btn-primary">Employee</button>
  </p>
</div>


</body>
</html>