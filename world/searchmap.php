<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Directions service</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
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
	<?
		$objConnect = mysql_connect("localhost","root","123456789") or die("Error Connect to Database");
		$objDB = mysql_select_db("map");
		$strSQL = "SELECT * FROM markers";
		$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
		$objQuery1 = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	?>
    <div id="floating-panel">
	<form action="searchmap.php" name="frmsearch">
    <b>Start: <?echo $_GET['start'];?> </b>
    <select id="start" name="start">
    <?
		while($objResult = mysql_fetch_array($objQuery))
		{
			
		
	?>
			<option value="<?php echo $objResult["id"];?>"><?echo $objResult["id"];?></option>
	<?
		}
	?>
      
    </select>
    <b>End:<?echo $_GET['end'];?> </b>
    <select id="end" name="end">
      <?
		while($objResult1 = mysql_fetch_array($objQuery1))
		{
			
		
	?>
			<option value="<?php echo $objResult1["id"];?>"><?echo $objResult1["id"];?></option>
	<?
		}
	?>
    </select>
	<button>กำหนดพิกัด</button>
	<button id="submit">ค้นหา</button>
	<?
	$strSQLStart = "SELECT * FROM markers where id='".$_GET["start"]."' ";
	$objQueryStart = mysql_query($strSQLStart) or die ("Error Query [".$strSQLStart."]");
	$strSQLEnd = "SELECT * FROM markers where id='".$_GET["end"]."' ";
	$objQueryEnd = mysql_query($strSQLEnd) or die ("Error Query [".$strSQLEnd."]");
	
	while ($objQueryStart1 = mysql_fetch_array($objQueryStart)){	
	?>
		<div><input type="text" id="s_lat" value="<?echo $objQueryStart1["lat"];?>"></div>
		<div><input type="text" id="s_lng" value="<?echo $objQueryStart1["lng"];?>"></div> 
	<?}?>
	
	<?
	while ($objQueryEnd1 = mysql_fetch_array($objQueryEnd)){
	?>
		<div><input type="text" id="e_lat" value="<?echo $objQueryEnd1["lat"];?>"></div> 
		<div><input type="text" id="e_lng" value="<?echo $objQueryEnd1["lng"];?>"></div> 
	
	<?}?>
	</form>
    </div>
    <div id="map"></div>
    <script>
	      var slat=document.getElementById('s_lat').value;
		  var slng=document.getElementById('s_lng').value;
		  var elat=document.getElementById('e_lat').value;
		  var elng=document.getElementById('e_lng').value;
		  var slatlng = {lat: parseFloat(slat), lng: parseFloat(slng)};
		  var elatlng = {lat: parseFloat(elat), lng: parseFloat(elng)};
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
		var geocoder = new google.maps.Geocoder;
		geocoder.geocode({'location': slatlng});
		geocoder.geocode({'location': elatlng});
		//alert("s" + slatlng + "e" + elatlng);
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('submit').addEventListener('mouseover', onChangeHandler);
        //document.getElementById('end').addEventListener('change', onChangeHandler);
		//document.getElementById('start').addEventListener('change', onChangeHandler);
		//document.getElementById('end').addEventListener('change', onChangeHandler);
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
    
 