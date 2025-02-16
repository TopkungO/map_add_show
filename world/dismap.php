<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <title>KML feature details</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        float: left;
        height: 100%;
        width: 79%;
      }
      #content-window {
        float: left;
        font-family: 'Roboto','sans-serif';
        height: 100%;
        line-height: 30px;
        padding-left: 10px;
        width: 19%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <div id="content-window"></div>
    <script>

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: {lat: 37.393887, lng: -122.078918}
        });

        var kmlLayer = new google.maps.KmlLayer({
          url: 'http://www.sct.nstru.ac.th/test.kml',
          suppressInfoWindows: true,
          map: map
        });

        kmlLayer.addListener('click', function(kmlEvent) {
          var text = kmlEvent.featureData.description;
          showInContentWindow(text);
        });

        function showInContentWindow(text) {
          var sidediv = document.getElementById('content-window');
          sidediv.innerHTML = text;
        }
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkMJLbHECzjiFUsV-XGmPrVV8RxvN8m4c&callback=initMap">
    </script>
  </body>
</html>