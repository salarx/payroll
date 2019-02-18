<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
        <meta name="author" content="GeeksLabs">
        <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.png">

        <title>HOD Login</title>
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">

        <!-- Bootstrap CSS -->
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="<?php echo base_url(); ?>css/bootstrap-theme.css" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="<?php echo base_url(); ?>css/elegant-icons-style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles -->
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
        <script src="<?php echo base_url(); ?>js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="login-img3-body">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">6 KAI ZENS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
            <div class="container">
            <form class="login-form" action="<?php echo base_url(); ?>department/hod_authentication.html" method="post">
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
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_profile"></i></span>
                        <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                </div>
            </form>
        </div>
    </body>
</html>
