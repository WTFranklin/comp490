<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Frank Addelia - Comp 490L Primer Project</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">  

<!-- Latest compiled and minified JavaScript -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="js/weather.js"></script>

<?php

  /*
   * Checks to see if any variables are set in $_GET and then will call the getWeather() function from js
   */

   if(isset($_GET['city']) && isset($_GET['state']))
   {
     echo '<script type="text/javascript">';
     echo "\tgetWeather('" . $_GET['city'] . "', '" . $_GET['state'] . "');";
     echo '</script>';
   }

?>

    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Frank Addelia - Primer Project: Weather Lookup</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">
      <div  >
        <h1>Sweet sun of CSUN, check out the weather!</h1>
        
          <div class="row wcontent">
            <form name="weather" method="get">
              <div class="col-md-4">
                Enter a city: <input type="text" name="city" id="city"<?php if(isset($_GET['city'])){echo " value='". $_GET['city'] . "'";} ?>>
              </div>
              <div class="col-md-4">
                <?php require("usa_states_select.php"); ?>
              </div>
            </form>
          </div>
        
          <div class="row wcontent">
            <div class="col-md-12">
              <button type="button" id="getWeath" class="btn btn-primary" onclick="redirect($('#city').val(), $('#state_usa_value').val());">Click for Weather</button>&nbsp;&nbsp;<button type="button" id="reset" class="btn btn-danger" onclick="redirect(null, null);">Reset Form</button>
            </div>
          </div>
        
          <div class="row wcontent">
            <div id="location" class="col-md-12"></div>
          </div>
        
          <div class="row">
            <div id="weather" class="col-md-4"></div>
          </div>
        
          <div class="row">
            <div id="temp" class="col-md-4"></div>
          </div>
        
          <div class="row wcontent">
            <div id="feels" class="col-md-4"></div>
          </div>
          
          <div class="row wcontent">
            <div id="img" class="col-md-12"></div>
          </div>
        
      </div>
    </div> <!-- /container -->
  </body>
</html>
