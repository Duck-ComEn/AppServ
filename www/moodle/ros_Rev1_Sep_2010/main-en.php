<?php
if(!isset($_SESSION)){
session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
switch($_SESSION['MM_UserRight']){
case "en" : 
?>
<title>ROS-หน้าหลัก</title>
<link href="twoColLiqLtHdr.css" rel="stylesheet" type="text/css" />
<!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
.twoColLiqLtHdr #sidebar1 { padding-top: 30px; }
.twoColLiqLtHdr #mainContent { zoom: 1; padding-top: 15px; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]-->
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #0000FF}
-->
</style>
</head>


<body class="twoColLiqLtHdr">

<div id="container"> 
  <div id="header">
    <h1>Recertification Online System(ROS)</h1>
    <p align="right" class="style1">ยินดีต้อนรับ คุณ <em><strong><?php echo $_SESSION['MM_FirstName'].' '.$_SESSION['MM_LastName'] ;?></strong></em></p>
  <!-- end #header --></div>
  <div id="sidebar1">
    <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="main-en.php">หน้าหลัก</a></li>
      <li><a href="main-en-warn.php">การแจ้งเตือน</a></li>
      <li><a href="main-en-result.php">ผลคะแนนสอบ</a> </li>
      <li><a href="logout.php">ออกจากระบบ</a>      </li>
      <p>&nbsp;</p>
    </ul>
    <h3>
      <!-- end #sidebar1 -->
    </h3>
  </div>
  <div id="mainContent">
    <h1>หนักหลักพนักงาน</h1>
    <p>เนื้อหาหน้านี้สามารถแก้ไขได้โดย ผู้ดูแลระบบโดยจะสามารถแสดงข้อความให้หนักงานเห็นเท่านั้น</p>
    <p></p>
    <p>
      <!-- end #mainContent -->
    </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp; </p>
  </div>
  <div id="footer">
    <p>Footer</p>
  <!-- end #footer --></div>
<!-- end #container --></div>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>


</body>
</html>
<?php
break ;
default : echo"<center><h2>หน้านี้อนุญาติให้พนักงานข้าใช้เท่านั้น</h2></center><bt><br>";
echo"<center><h4>ระบบจะพาท่านกลับสู่หน้าหลัก ภายใน 3 วินาที</h4></center>";
echo "<meta http-equiv='refresh' content=3;URL=index.php>";
break ; }
?>