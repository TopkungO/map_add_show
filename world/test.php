<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
	<style>
	 #map {
        height: 100%;
      }

	  #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
	  </style>
  </head>
  <body>
   <div id="floating-panel">
	<form action="" name="frmsearch">
    <b>Start lat: 8.381864 lng: 99.538115</b><br>
    <b>End lat:8.465359 lng: 99.860389 </b><br>
	<button id="submit">Search</button>
	</form>
    </div>
 <div id="map"></div>
    <script>
	      var slat=8.381864;
		  var slng=99.538115;
		  var elat=8.465359;
		  var elng=99.860389;
		  var slatlng = {lat: parseFloat(slat), lng: parseFloat(slng)};
		  var elatlng = {lat: parseFloat(elat), lng: parseFloat(elng)};
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
		var geocoder = new google.maps.Geocoder;
		geocoder.geocode({'location': slatlng});
		geocoder.geocode({'location': elatlng});
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('submit').addEventListener('mouseover', onChangeHandler);
      }
      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: slatlng,
          destination: elatlng,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkMJLbHECzjiFUsV-XGmPrVV8RxvN8m4c&callback=initMap"
    async defer></script>
  </body>
</html>