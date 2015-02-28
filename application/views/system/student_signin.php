<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign in</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() . 'assets/css/signin.css'; ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <!-- <form class="form-signin"> -->
      <?php echo form_open('student_gate/login_validation', array('class' => 'form-signin')); ?>
        <!-- output validation errors -->
        <p class="alert-danger"><?php echo validation_errors(); ?></p>
        <h2 class="form-signin-heading">Student Login</h2>
        <label for="inputEmail" class="sr-only">Student number</label>
        <input type="number" id="inputEmail" name="inputStudNumber" class="form-control" min="0" placeholder="Student number" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit"> Sign in</button> <br/>
        <div class="container">
            <a href="<?php echo base_url(); ?>" class="btn btn-success form" > Back to website </a>
        </div>
        </form>

    </div> <!-- /container -->
  </body>
</html>
