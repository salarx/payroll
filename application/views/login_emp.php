<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Employee Login</title>
                <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">




                </head>
    <body>
        <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-dark " style="background: #01013D">

        	<a class="navbar-brand" href="<?php echo base_url(); ?>" style="color: #FFC70D"><b>6 KA<span class="lite" style="color: white">IZ</span><span class="lite" style="color: #76FF0D">ENS</span></b></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="collapse navbar-collapse" id="navbarColor01">
		<b>
    <ul class="navbar-nav mr-auto nav-pills" style="font-size: 17px">
      <li class="nav-item active" >
        <a class="nav-link" href="<?php echo base_url(); ?>">
						 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
						 &nbsp &nbsp &nbsp &nbsp &nbsp
					Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
					   &nbsp &nbsp &nbsp &nbsp &nbsp
					About</a>
      </li>
		<li>
		</li>
    </ul>
	</b>
  </div>
  </nav>
  <br> <br> <br> <br>
  <div class="container ">
            <form class="login-form " action="<?php echo base_url(); ?>authentication_login/emp_authentication.html" method="post">
                <div class="login-wrap">
                      <div class="jumbotron">
                    <div class="input-group ">
                        <span class="input-group-addon"><i class="icon_profile"></i></span>
                        <label class="col-lg-6"> </label>
                        <label class="mr-sm-2 col-lg-2" style="font-size:18px" align="right"><b>Employee ID</b></label>
                          &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        <input type="text" name="username" class="form-control col-lg-4" placeholder="Username" autofocus >
                      </div>
                      <br>

                          <div class="input-group form-inline">
                        <span class="input-group-addon"><i class="icon_key_alt"></i></span>

                          <label class="col-lg-6"> </label>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                          <label class="mr-sm-2 col-lg-2" style="font-size:18px" align="right"><b>Password</b></label>
                          
                        <input type="password" name="password" class="form-control col-lg-4" placeholder="Password">
                    </div>
                    <br>

                    <button class="btn btn-primary btn-lg btn-block col-lg-1 float-right" type="submit">Login</button>
                    <br>
                </div>
              </div>
            </form></div>
<br><br><br><br>
        <hr class="my-4">

        <footer class="page-footer" style="background:  #01013D; color:white; height: 150px; padding:5px">
          <p><center><br>
            Contact Us: 1234567890<br>
            Email: 6kaizens@gmail.com<br>
            Fax Number: 579412562<br>
          </center></p>
        </footer>
      </div>
    </body>