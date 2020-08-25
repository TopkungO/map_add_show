<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
  <script> 
$(document).ready(function(){
	$("#p_main").hide();
	$("#p_user").hide();
	$("#p_map").hide();
	$("#p_dismap").hide();
	$("#frmadd").hide();
	$("#mapadd").hide();
	$("#p_searchmap").hide();
	
	$("#m_main").click(function(){
        $("#p_main").slideDown("slow");
		$("#p_map").hide();
		$("#p_dismap").hide();
		$("#p_user").hide();
		$("#p_searchmap").hide();
    });
	
	$("#m_searchmap").click(function(){
        $("#p_searchmap").slideDown("slow");
		$("#p_map").hide();
		$("#p_dismap").hide();
		$("#p_user").hide();
		$("m_main").hide();
    });
	
    $("#m_user").click(function(){
        $("#p_user").slideDown("slow");
		$("#p_map").hide();
		$("#p_dismap").hide();
		$("#p_main").hide();
		$("#p_searchmap").hide();
    });
	
	$("#m_map").click(function(){
        $("#p_map").slideDown("slow");
		$("#p_user").hide();
		$("#p_dismap").hide();
		$("#p_main").hide();
		$("#p_searchmap").hide();
    });
	
	$("#m_dismap").click(function(){
        $("#p_dismap").slideDown("slow");
		$("#p_user").hide();
		$("#p_map").hide();
		$("#p_main").hide();
		$("#p_searchmap").hide();
    });
	
	$("#btnadd").click(function(){
        $("#frmadd").toggle(1000);
    });

	$("#btn_mapadd").click(function(){
		$("#mapadd").toggle(1000);
	});
	
	
});
</script>
<style>
	#dis_text{
	float:right;
	}
	#text1{
	border:0px solid #000000;
	margin-top:10px;
	}
	}
	#text2{
	border:0px solid #000000;
	margin-top:10px;
	}
	#text3{
	border:0px solid #000000;
	margin-top:10px;
	}
	#text4{
	border:0px solid #000000;
	margin-top:10px;
	}
	#text5{
	border:0px solid #000000;
	margin-top:10px;
	}

	b:hover{                                    /*เวลาเอาเมาส์ชี้จะเปลี่ยนสี*/
	color:red;
	text-decoration: underline;
</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <ul class="nav navbar-nav">
      <li><a id=m_main href="#">หน้าหลัก</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">จัดการข้อมูล <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a id=m_user href="#">ข้อมลผู้ใช้</a></li>
          <li><a id=m_map href="#">ข้อมูลแผนที่</a></li>
        </ul>
      </li>
      <li><a id=m_dismap href="#">แสดงแผนที่</a></li>
	  <li><a id=m_searchmap href="#">ค้นหาแผนที่</a></li>
    </ul>
  </div>
</nav>

<div class="container">
	<div id=world>

	</div>
	<div id=p_main>
		<div class="w3-container w3-teal">
		 <h1 align=center >สถานที่น่าสนใจในภาคใต้</h1>
			</div>

		<div class="w3-row-padding w3-margin-top">

			<div class="w3-third"><center>
				<div class="w3-card">
					<img src="tour1.jpg" style=width="250" height="200" >
				<div class="w3-container">
					<a href="https://i.ytimg.com/vi/YEtFXa2Sig4/maxresdefault.jpg"><b>เกาะเขาใหญ่ จังหวัดสตูล</b></a>
				  </div>
				 </div>
				</center>
			</div>
			<div id=text1><p>&nbsp;&nbsp;อีกหนึ่งสถานที่ท่องเที่ยวทะเลทางฝั่งอันดามัน และที่เที่ยวสตูลห้ามพลาด เป็นเกาะหินปูนกลางทะเล อยู่ในพื้นที่ของอุทยานแห่งชาติหมู่เกาะเภตรา ตำบลปากน้ำ อำเภอละงู จังหวัดสตูล ห่างจากชายฝั่งบริเวณที่ทำการอุทยานประมาณ 10 กิโลเมตร และอยู่ห่างจากท่าเรือปากบารา เพียงแค่ประมาณ 3-5 กิโลเมตรเท่านั้น  บนเกาะเขาใหญ่จะมีลักษณะเป็นภูเขาหินปูนเสียส่วนใหญ่ มีชายหาดบางส่วน อ่าวที่มีชื่อเสียงคือ "นะปุลา" เป็นชายหาดที่เงียบสงบสวยงาม นอกจากนี้เวลาที่น้ำลดก็จะสามารถลอดช่องหินเข้าไปชมความสวยงามของ "ปราสาทหินพันยอด" สิ่งอัศจรรย์สุดอันซีนที่ธรรมชาติรังสรรค์ขึ้นจากการกัดเซาะหินของน้ำฝน จนกลายเป็นแท่งหินแหลมรูปร่างสวยงามแปลกตาคล้ายกับปราสาทในเทพนิยาย ชาวบ้านจึงเรียกกันว่าปราสาทหินพันยอด อีกทั้งยังเป็นพื้นที่ธรณีวิทยา มีการพบฟอสซิลอายุมากกว่า 480 ล้านปี</p></div>
		</div>
		<div class="w3-row-padding w3-margin-top">
				<div class="w3-third"><center>
				<div class="w3-card">
					<img src="tour2.jpg" style=width="250" height="200"id=img4>
				<div class="w3-container">
					<a href="https://www.touronthai.com/gallery/photo/75000012/phuphapetch_cave04.jpg"><b>ถ้ำภูผาเพชร จังหวัดสตูล</b></a>
				  </div>
				 </div>
				 </center>
			</div>
			<div id=text2><p>&nbsp;&nbsp;ถ้ำที่มีขนาดใหญ่ติดอันดับ 4 ของโลก ตั้งอยู่ในตำบลปาล์มพัฒนา อำเภอมะนัง ภายในถ้ำจะพบห้องโถงขนาดกว้าง เพดานถ้ำสูง ๆ ที่เต็มไปด้วยหินงอกหินย้อยที่ยังคงมีหยดน้ำเกาะตัวอยู่และเมื่อกระทบกับแสงไฟก็จะส่องเป็นประกายอย่างสวยงามพร้อมทั้งมีการแบ่งชื่อแต่ละห้องตามลักษณะของธรณีสัณฐานที่พบออกเป็น 20 ห้อง เช่น "ห้องม่านเพชร" มีลักษณะคล้ายผ้าม่านแขวนอยู่, ห้องพญานาค มีหินงอกคล้ายงูใหญ่หรือพญานาค และถ้าสังเกตจากประเภทของหินงอก (Stalagmite) ก็จะมีชื่อต่าง ๆ ตามรูปทรงที่พบเห็นมากถึง 31 แห่ง<br>&nbsp;&nbsp;
          ส่วนประเภทหินย้อย (Stalactite) ก็มีทั้งหมด 4 แห่ง และสุดท้ายคือประเภทเสาหิน (Column in Cavern) ซึ่งเป็นส่วนของหินงอกและหินย้อยที่มาบรรจบกันแล้วมองดูคล้ายเสาค้ำยันเพดาน ถ้ำกว่า 14  แห่ง นอกจากนี้ยังมีประเภทเสาหินที่มีลักษณะต่าง ๆ กัน เช่น เสาเพชร หรือเสาหินย้อย หรือเสาค้ำสุริยัน รวมทั้งยังมีบ่อขั้นบันได ที่มีลักษณะเหมือนชายน้ำตกหินปูนที่เป็นชั้น ๆ เหมือนขั้นบันไดอีกด้วย ทั้งนี้สำหรับนักท่องเที่ยวที่สนใจเดินทางไปเยือนที่ถ้ำภูผาเพชรควรเตรียมตัวก่อนเดินทางให้พร้อม ทั้งไฟฉายติดตัวไปเพื่อส่องดูความงามภายในถ้ำ และสวมใส่รองเท้าที่เดินสบาย</p></div>
		</div>

		<div class="w3-row-padding w3-margin-top">

			<div class="w3-third"><center>
				<div class="w3-card">
					<img src="tour3.jpg" style=width="250" height="200" >
				<div class="w3-container">
					<a href="https://i1.wp.com/www.krabidestination.com/wp-content/uploads/2017/07/lading-island-krabi-3.jpg?resize=800%2C500"><b>เกาะเหลาลาดิง จังหวัดกระบี่</b></a>
				  </div>
				 </div>
				</center>
			</div>
			<div id=text1><p>&nbsp;&nbsp;เกาะเหลาลาดิง ตั้งอยู่ในท้องทะเลอันดามัน เป็นส่วนหนึ่งของอุทยานแห่งชาติธารโบกขรณี อำเภออ่าวลึก จังหวัดกระบี่ ใช้เวลาเดินทางจากฝั่งอ่าวนางประมาณ 30 นาที และจากเกาะห้องประมาณ 10 นาที เป็นเกาะที่มีขนาดไม่ใหญ่ มีชายหาดเล็ก ๆ มีลักษณะเป็นเวิ้งอ่าวหลบอยู่ด้านในของภูเขาหินปูนสองฝั่ง ที่นี่จึงเงียบสงบ มีบรรยากาศส่วนตัวสุด ๆ เหมาะสำหรับคนที่อยากมานอนริมทะเล พักผ่อนกับธรรมชาติอย่างแท้จริง ยิ่งไปกว่านั้นหาดทรายยังขาวสะอาด เนื้อทรายเนียนละเอียด บริเวณชายหาดจะมีร่มไม้ให้นักท่องเที่ยวได้มานอนเล่นพักผ่อน น้ำทะเลใส เป็นสีเขียวมรกตงามจับตา มีแนวปะการังให้ได้ดำน้ำตื้นกันอย่างสนุกสนาน ที่นี่จึงได้สมญานามว่า เกาะพาราไดซ์ (Koh Paradise)</p></div>
		</div>
		<div class="w3-row-padding w3-margin-top">

			<div class="w3-third"><center>
				<div class="w3-card">
					<img src="tour4.jpg" style=width="250" height="200" >
				<div class="w3-container">
					<a href="http://dmiceplanner.businesseventsthailand.com/dmice/upload/venue/1512113363_151799594559.jpg"><b>แหลมกระทิง ภูเก็ต </b></a>
				  </div>
				 </div>
				</center>
			</div>
			<div id=text4><p>&nbsp;&nbsp;จุดชมวิวแห่งใหม่ของจังหวัดภูเก็ต มองเห็นทะเลอันดามันเกือบ 360 องศา สำหรับใครที่อยากเดินทางมายังจุดชมวิวแห่งนี้ อาจต้องเดินทางมาตั้งแต่ช่วงบ่าย ๆ เพราะหากมาหลังพระอาทิตย์ตกจะมืดมาก และเดินลำบาก โดยเริ่มต้นเส้นทางผ่านหาดในหานมาทางอ่าวเสน หรือจะเริ่มต้นที่อ่าวเสน หรือเดินขึ้นไปทางกำแพงเล็ก ๆ ก่อนถึงบ้านกระทิงรีสอร์ทก็ได้ แนะนำให้ใส่รองเท้าผ้าใบ เพราะคุณจะต้องเดินผ่านโขดหิน ซึ่งอาจเผลอลื่นและเป็นอันตรายได้ ตลอดทางคุณจะมองเห็นวิว ที่ทำให้คุณต้องร้องว้าว ! ประมาณ 45 นาที ก็จะถึงแหลมกระทิง และอย่างที่บอกไปแล้วว่าทางกลับค่อนข้างมืดเราจึงไม่แนะนำให้อยู่ดูพระอาทิตย์ตกดิน</p></div>
		</div>
		<div class="w3-row-padding w3-margin-top">

			<div class="w3-third"><center>
				<div class="w3-card">
					<img src="paktai5.jpg" style=width="250" height="200" >
				<div class="w3-container">
					<a href="http://www.tripgether.com/photos/shares/Scoop_Review_2016/December_2016/10_Resort_kiriwong_2016/baantonnam_5.jpg"><b>บ้านคีรีวง นครศรีธรรมราช  </b></a>
				  </div>
				 </div>
				</center>
			</div>
			<div id=text5><p>&nbsp;&nbsp; ตั้งอยู่ที่ตำบลกำโลน อำเภอลานสกา นักท่องเที่ยวคนไทยที่ได้มาเที่ยวที่บ้านคีรีวง มักจะประทับใจกับวิถีชีวิตสังคมของชาวบ้านที่นั่น ซึ่งเป็นสังคมแบบเครือญาติ ถ้อยทีถ้อยอาศัยกัน การเป็นอยู่ที่เรียบง่ายและเงียบสงบ แน่นอนว่าเราอาจจะได้พบภาพแบบนี้ได้ไม่บ่อยนักเมื่ออยู่ในเมืองใหญ่ ชาวบ้านที่นั่นส่วนใหญ่ประกอบอาชีพทำสวนผลไม้ เช่น มังคุด เงาะ ทุเรียน เป็นต้น จุดเด่นของบ้านคีรีวงคือทัศนียภาพที่สวยงามของธรรมชาติ ซึ่งตั้งอยู่ท่ามกลางป่าเขา และสายน้ำ แถมยังมีกิจกรรมให้นักท่องเที่ยวได้ร่วมทำมากมาย เช่น การพักในที่พักแบบโฮมสเตย์ การชิมอาหารพื้นเมือง เป็นต้น ซึ่งจะทำให้คุณได้ซึมซับภาพความสวยงามของบ้านคีรีวงได้อย่างไม่รู้ลืม</p></div>
		</div>
		
	</div>
		<!--main -->
	<div id=p_dismap>
	<h3>แสดงแผนที่</h3>
	<p id=dis_text>ข้อมูลสถานที่</p>
	<div id=dis_map><center><iframe src="dismap.php" width=100% height="650" frameborder="0" style="border:0" allowfullscreen></iframe></center>
	</div>
	</div>
	<div id=p_searchmap>
		<?include 'searchmap.php'; ?>
	</div>

	<div id=p_user>
<?
$objConnect = mysql_connect("localhost","root","123456789") or die("Error Connect to Database");
$objDB = mysql_select_db("map");
$strSQL = "SELECT * FROM user";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");


?>  
<h3>ข้อมูลผู้ใช้</h3>
<button type="button" class="btn btn-success" id="btnadd"><span class="glyphicon glyphicon-plus"></span>เพิ่มข้อมูล</button>
<div id=frmadd>
	<form action="action.php">
		<div class="form-group">
			<label for="name">ชื่อ</label>
			<input type="text" class="form-control" id="name1" placeholder="กรอกข้อมูลชื่อ" name="u_name">
		</div>
		<div class="form-group">
			<label for="lastname">นามสกุล</label>
			<input type="text" class="form-control" id="lastname1"  placeholder="กรอกข้อมูลนามสกุล" name="u_lastname">
		</div>
		<div class="form-group">
			<label for="lastname">ที่อยู่</label>
			<input type="text" class="form-control" id="add1"  placeholder="กรอกข้อมูลที่อยู่" name="u_address">
		</div>
		<div class="form-group">
			<label for="lastname">ชื่อผู้ใช้</label>
			<input type="text" class="form-control" id="username1" placeholder="กรอกข้อมูลชื่อผู้ใช้" name="u_usr">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" placeholder="กรอกข้อมูลรหัสผ่าน" name="u_pwd">
		</div>
		
		<button type="submit" class="btn btn-default">เพิ่มข้อมูล</button>
	</form>
</div>
<table class="table table-hover">
    <thead>
      <tr>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>ที่อยู่</th>
        <th>ชื่อผู้ใช้</th>
        <th>รหัสผ่าน</th>
		<th>ลบข้อมูล</th>
      </tr>
    </thead>
    <tbody>
<?
while($objResult = mysql_fetch_array($objQuery))
	{
?>
      <tr>
        <td><?php echo $objResult["name"];?></td>
        <td><?php echo $objResult["lastname"];?></td>
        <td><?php echo $objResult["address"];?></td>
        <td><?php echo $objResult["usr"];?></td>
		<td><?php echo $objResult["pwd"];?></td>
		<td>
		<a href="action.php?u_id=<?php echo $objResult["name"];?>">
          <span class="glyphicon glyphicon-remove"></span>
        </a>
		</td>		
      </tr>
<?
	}
?>
<?
mysql_close($objConnect);
?>	  
    </tbody>
  </table>
</div>


<div id=p_map>
		<h3>ข้อมูลแผนที่</h3>
<?
$objConnect1 = mysql_connect("localhost","root","123456789") or die("Error Connect to Database");
$objDB1 = mysql_select_db("map");
$strSQL1 = "SELECT * FROM markers";
$objQuery1 = mysql_query($strSQL1) or die ("Error Query [".$strSQL1."]");
?>

<button type="button" class="btn btn-warning" id="btn_mapadd"><span class="glyphicon glyphicon-plus"></span>เพิ่มข้อมูล</button>
<div id=mapadd>
	<form action="action2.php">
		<div>
			<label for="id_map">ID</label>
			<input type="text" class="form-control" id="mid" placeholder="กรอกไอดี" name="m_id">
		</div>
		<div class="form-group">
			<label for="name_map">ชื่อสถานที่</label>
			<input type="text" class="form-control" id="mname" placeholder="กรอกข้อมูลชื่อ" name="m_name">
		</div>
		<div class="form-group">
			<label for="address">ที่อยู่</label>
			<input type="text" class="form-control" id="madd"  placeholder="กรอกข้อมูลที่อยู่" name="m_address">
		</div>
		<div class="form-group">
			<label for="lat">ละติจูล</label>
			<input type="text" class="form-control" id="mlat" placeholder="กรอกข้อมูลละติจูล" name="m_lat">
		</div>
		<div class="form-group">
			<label for="lng">ลองติจูล:</label>
			<input type="text" class="form-control" id="mlng" placeholder="กรอกข้อมูลลองติจูล" name="m_lng">
		</div>
		<div class="form-group">
			<label for="type">ประเภทสถานที่</label>
			<input type="text" class="form-control" id="mtype" placeholder="กรอกข้อมูลสถานที่" name="m_type">
		</div>
		<button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
	</form>
</div>

<table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>address</th>
        <th>lat</th>
        <th>lng</th>
        <th>type</th>
		<th>ลบข้อมูล</th>
      </tr>
    </thead>
    <tbody>
<?
while($objResult1 = mysql_fetch_array($objQuery1))
	{
?>
      <tr>
        <td><?php echo $objResult1["id"];?></td>
        <td><?php echo $objResult1["name"];?></td>
        <td><?php echo $objResult1["address"];?></td>
        <td><?php echo $objResult1["lat"];?></td>
		<td><?php echo $objResult1["lng"];?></td>
		<td><?php echo $objResult1["type"];?></td>
		<td>
		<a href="action2.php?m_id1=<?php echo $objResult1["name"];?>">
          <span class="glyphicon glyphicon-remove"></span>
        </a>
		</td>
      </tr>
<?
	}
?>
<?
mysql_close($objConnect1);
?>	  
	</tbody>
	</table>
	</div>
	
	
	
	
</div>
</body>
</html>
