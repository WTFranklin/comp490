$(document).ready(function () {
  
  $(document).keypress(function (event) {

    var keycode = (event.keyCode ? event.keyCode : event.which);
    if (keycode == '13') {
      $("#getWeath").trigger("click", function () {

      });
    }

  });

});

function redirect(city, state)
{
  if(city === null && state === null)
  {
    window.location.href = 'index.php';
  }
  else
  {
    window.location.href = '?city=' + city + '&state=' + state;
  }
}

function getWeather(city, state)
{

  //var city = $("#city").val();
  var c = city.replace(" ", "%20");

  if (state === "stat")
  {
    alert("You must choose a state!");
    return;
  }

  $.ajax({
    url: "http://api.wunderground.com/api/61d2b47f3a6f37a1/forecast/geolookup/conditions/q/" + state + "/" + c + ".json",
    dataType: "jsonp",
    success: function (parsed_json) {
      //var location = parsed_json['location']['city'];

      //var str = "";
      var tmp = parsed_json['current_observation'];

      /*
      for (var key in tmp) {
        if (tmp.hasOwnProperty(key)) {
          //alert(key + " -> " + parsed_json[key]);
          str += key + " -> " + tmp[key];
        }
      }
      */

      if (tmp === undefined)
      {
        alert("There was a problem searching for this city/state combination. Please verify that the city belongs to the state and try again.");
        return;
      }

      $("#location").html("<h4>Weather in " + tmp['display_location']['full'] + " as observed at " + tmp['observation_location']['full'] + "</h4>");
      $("#temp").html("<strong>Current temp:</strong> " + tmp['temp_f'] + "&deg; F");
      $("#feels").html("<strong>Feels like:</strong> " + tmp['feelslike_f'] + "&deg; F");
      $("#weather").html("<strong>Conditions:</strong> " + tmp['weather'] + "<img src='" + tmp['icon_url'] + "'>");
      $("#img").html("<strong>Weather API:</strong> <a href='" + tmp['image']['link'] + "' target='_blank'><img src='" + tmp['image']['url'] + "'></a>");

    },
    error: function (event) {
      alert("Problem with query!");
    }
  });
}