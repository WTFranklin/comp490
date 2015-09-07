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

<script>

  $(document).ready(function(){
    $(document).keypress(function(event){
	
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){	
            $("#getWeath").trigger("click", function(){
              
            });
        }

    });
    
  });

  function getWeather()
  {

    var city = $("#city").val();
    var c = city.replace(" ", "%20");
    
    if($("#state_usa_value").val() === "stat")
    {
      alert("You must choose a state!");
      return;
    }

    $.ajax({
        url: "http://api.wunderground.com/api/61d2b47f3a6f37a1/forecast/geolookup/conditions/q/" + ($("#state_usa_value").val()) + "/" + c + ".json",
        dataType: "jsonp",
        success: function(parsed_json) {
          //var location = parsed_json['location']['city'];
          
         var str = "";
         var tmp = parsed_json['current_observation'];
         
         for (var key in tmp) {
            if (tmp.hasOwnProperty(key)) {
              //alert(key + " -> " + parsed_json[key]);
              str += key + " -> " + tmp[key];
            }
          }
          
          $("#location").html("Weather in " + tmp['display_location']['full'] + " as observed at " + tmp['observation_location']['full']);
          $("#temp").html("Current temp: " + tmp['temp_f'] + "&deg; F");
          $("#feels").html("Feels like: " + tmp['feelslike_f'] + "&deg; F");
          $("#weather").html("Conditions: " + tmp['weather'] + "<img src='" + tmp['icon_url'] + "'>");
          $("#img").html("Weather API with worst documentation ever brought to you by: <a href='" + tmp['image']['link'] + "' target='_blank'><img src='" + tmp['image']['url'] + "'></a>");
          
        },
        error: function(event) {
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
          <a class="navbar-brand" href="#">Weather Lookup</a>
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
            <div class="col-md-4">
              Enter a city: <input type="text" name="city" id="city">
            </div>
            <div class="col-md-4">
              <?php require("usa_states_select.html"); ?>
            </div>
            <div class="col-md-4">
              <button type="button" id="getWeath" class="btn btn-primary" onclick="getWeather();">Click for Weather</button>
            </div>
          </div>
        
          <div class="row wcontent">
            <div id="location" class="col-md-6"></div>
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
