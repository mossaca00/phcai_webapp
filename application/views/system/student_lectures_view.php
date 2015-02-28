<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $name; ?></title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/system.css') ?>"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url('student/lectures'); ?>">
              <?php echo $name; ?>
          </a>
        </div>
        <div id="navbar" class="collapse navbar-right navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url('student_gate/logout'); ?>">Logout</a></li>
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" style="margin-top:75px;">
        
        <div class="well-lg">
            <h1> <?php echo $heading; ?> </h1>
            <p> <?php echo $sub; ?></p>
        </div>
        <!-- Lectures -->
        <div class="well" style="width:60%; margin:0 auto">
            <?php foreach ($lectures as $term => $lecture): ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3> <?php echo $term; ?> </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-stripped">
                            <tr>
                                <th> Filename </th>
                                <th> Size </th>
                                <th> Date </th>
                                <th>  </th>
                                <th> </th>
                            </tr>
                            <?php foreach ($lecture as $file): ?>
                                <tr>
                                    <td> <?php echo $file['name']; ?> </td>
                                    <td> <?php echo $file['size']; ?> </td>
                                    <td> <?php echo $file['date']; ?> </td>
                                    <td>
                                        <a class="btn btn-primary" href="<?php echo base_url('lectures').'/'.$term.'/'.$file['name']; ?>"> Download </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/jquery.js'); ?>"> </script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"> </script>
        <script src="<?php echo base_url('assets/js/myjquery.js'); ?>"></script>
  </body>
</html>
