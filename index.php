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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script>

function getWeather()
{
  $.ajax({
      url: "http://api.wunderground.com/api/61d2b47f3a6f37a1/geolookup/conditions/q/IA/Cedar_Rapids.json",
      dataType: "jsonp",
      success: function(parsed_json) {
        var location = parsed_json['location']['city'];
        var temp_f   = parsed_json['current_observation']['temp_f'];
        alert("Current temperature in " + location + " is: " + temp_f);
    }
  });
}

function getTemperature(city)
{
  var currentTemp = false; // assume we have bad data
  var c = city.replace(" ", "_"); //convert spaces to _
  alert(city + " " + c);
  
  $.ajax({
      url: "http://api.wunderground.com/api/61d2b47f3a6f37a1/geolookup/conditions/q/IA/" + c + ".json",
      dataType: "jsonp",
      success: function(parsed_json) {
        var temp_f   = parsed_json['current_observation']['temp_f'];
        currentTemp = temp_f; //if we're here, we have our temperature, so store it in to currentTemp to return
    }
  });
  
  return currentTemp;
}

function autoComplete(city)
{
  
  var c = city.replace(" ", "%20");
  alert(c + " " + city);
  
  $.ajax({
      url: "http://autocomplete.wunderground.com/aq?query='San%20F'",
      dataType: "jsonp",
      success: function(parsed_json) {
        var location = parsed_json['location']['city'];
        //var temp_f   = parsed_json['current_observation']['temp_f'];
        var temp_f = getTemperature(location);
        alert("Current temperature in " + location + " is: " + temp_f);
      },
      error: function(req, status, err){
        alert("Es gab ein Problem " + err));
      }
  });
}
</script>

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
          <a class="navbar-brand" href="#">Project 1</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Sweet cow of Moscow, check out the weather!</h1>
        
        <button type="button" class="btn btn-primary" onclick="getWeather();">Click me for the Weather...</button>
        <button type="button" class="btn btn-primary" onclick="autoComplete('Los A');">Click me for "auto complete"...</button>
        
      </div>
    </div> <!-- /container -->
  </body>
</html>
