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
<!-- user -->
<?
$objConnect = mysql_connect("localhost","root","123456789") or die("Error Connect to Database");
$objDB = mysql_select_db("map");
$strSQL = "SELECT * FROM user";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
if ($_GET["u_id"]!=""){
	$strSQLD = "DELETE FROM user WHERE name='".$_GET["u_id"]."' ";
	$objQueryD = mysql_query($strSQLD) or die ("Error Query [".$strSQLD."]");
	if($objQueryD){
		echo "<div class='alert alert-success'><a href=http://localhost/world/world.php>ลบข้อมูลเรียบร้อยแล้ว</a></div>";
	}
}

if ($_GET["u_name"]!=""){
	$strSQLA = "INSERT INTO user (name,lastname,address,usr,pwd) VALUES ('".$_GET["u_name"]."','".$_GET["u_lastname"]."','".$_GET["u_address"]."','".$_GET["u_usr"]."','".$_GET["u_pwd"]."') ";
	$objQueryA = mysql_query($strSQLA) or die ("Error Query [".$strSQLA."]");
	if($objQueryA){
		echo "<div class='alert alert-success'><a href=http://localhost/world/world.php>บันทึกข้อมูลเรียบร้อยแล้ว</a></div>";
	}
}	
?>
</body>

</html>
