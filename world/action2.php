<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> 
<body> 
<!-- markers -->
<?
$objConnect = mysql_connect("localhost","root","123456789") or die("Error Connect to Database");
$objDB = mysql_select_db("map");
$strSQL = "SELECT * FROM markers";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
if ($_GET["m_id1"]!=""){
	$strSQLD = "DELETE FROM markers WHERE name='".$_GET["m_id1"]."' ";
	$objQueryD = mysql_query($strSQLD) or die ("Error Query [".$strSQLD."]");
	if($objQueryD){
		echo "<div class='alert alert-success'><a href=http://localhost/world/world.php>ลบข้อมูลเรีบยร้อย</a></div>";
	}
}

if ($_GET["m_name"]!=""){
	$strSQLA = "INSERT INTO markers (id,name,address,lat,lng,type) VALUES ('".$_GET["m_id"]."','".$_GET["m_name"]."','".$_GET["m_address"]."','".$_GET["m_lat"]."','".$_GET["m_lng"]."','".$_GET["m_type"]."') ";
	$objQueryA = mysql_query($strSQLA) or die ("Error Query [".$strSQLA."]");
	if($objQueryA){
		echo "<div class='alert alert-success'><a href=http://localhost/world/world.php>เพิ่มข้อมูลเรียบร้อย</a></div>";
	}
}	
?>
</body>

</html>
