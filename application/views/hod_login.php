<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
        <meta name="author" content="GeeksLabs">
        <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>img/abc.jpg">

        <title>HOD Login</title>

        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">


    </head>
    <body>
        <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-dark " style="background: #01013D; padding:17px; font-size: 17px">

        	<a class="navbar-brand" href="<?php echo base_url(); ?>" style="color: #FFC70D"><b>6 KA<span class="lite" style="color: white">IZ</span><span class="lite" style="color: #76FF0D">ENS</span></b></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto" >
        <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">
          &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          <b>Home</b><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            &nbsp &nbsp &nbsp &nbsp &nbsp
            <b>Features</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            &nbsp &nbsp &nbsp &nbsp &nbsp
            <b>About</b></a>
        </li>
      </ul>
    </div>
  </nav>
  <br> <br> <br> <br>

          <div class="container ">
            <form class="login-form " action="<?php echo base_url(); ?>authentication_login/hod_authentication.html" method="post">
                <div class="login-wrap">
                    <p class="login-img"><i class="icon_lock_alt"></i></p>
                    <?php
                    $exception = $this->session->userdata('exception');

                    if($exception){

                        echo "<div class='alert alert-block alert-danger fade in'><p>";
                        echo $exception;
                        echo "</p></div>";
                        $this->session->unset_userdata('exception');
                    }

                    $message = $this->session->userdata('message');

                    if($message){

                        echo "<div class='alert alert-success fade in'><p>";
                        echo $message;
                        echo "</p></div>";
                        $this->session->unset_userdata('message');
                    }
                    ?>
                      <div class="jumbotron">
                    <div class="input-group ">
                        <span class="input-group-addon"><i class="icon_profile"></i></span>
                        <label class="col-lg-6"> </label>
                        <label class="mr-sm-2 col-lg-2" style="font-size:18px" align="right"><b>Username</b></label>

                        <input type="text" name="username" class="form-control col-lg-4" placeholder="Username" autofocus >
                      </div>
                      <br>

                          <div class="input-group form-inline">
                        <span class="input-group-addon"><i class="icon_key_alt"></i></span>

                          <label class="col-lg-6"> </label>
                          <label class="mr-sm-2 col-lg-2" style="font-size:18px" align="right"><b>Password</b></label>

                        <input type="password" name="password" class="form-control col-lg-4" placeholder="Password">
                    </div>
                    <br>

                    <button class="btn btn-primary btn-lg btn-block col-lg-1 float-right" type="submit">Login</button>
                    <br>
                </div>
              </div>
            </form>
</div>
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
