<?php
if(!isset($_SESSION)){
session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
<!--
@import url("style.css");
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
switch($_SESSION['MM_UserRight']){
case "admin" : 
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
</head>


<body class="twoColLiqLtHdr">

<div id="container"> 
  <div id="header">
    <h1>Recertification Online System(ROS)</h1>
  <!-- end #header --></div>
  <div id="sidebar1">
    <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="main.php">หน้าหลัก</a>      </li>
      <li><a href="main-warn.php">แจ้งเตือน</a></li>
    <li><a class="MenuBarItemSubmenu" href="#">สมาชิก</a>
      <ul>
                <li><a href="main-edit.php">แก้ไขสมาชิก</a>                </li>
          <li><a href="main-add-s.php">เพิ่ม Supervisor</a></li>
          <li><a href="main-add-a.php">เพิ่ม Admin</a></li>
        </ul>
      </li>
      <li><a href="main-result.php">ผลสอบพนักงาน</a></li>
      <li><a href="logout.php">ออกจากระบบ</a></li>
    </ul>
    <h3>&nbsp;</h3>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
    <h2>ผลสอบทั้งหมด</h2>
   <?php
require_once('Connections/ros.php');
$result=mysql_query("SELECT DISTINCT
mdl_user.idnumber,
mdl_user.firstname,
mdl_user.lastname
FROM
mdl_user
INNER JOIN mdl_quiz_attempts ON mdl_quiz_attempts.userid = mdl_user.id
WHERE
mdl_user.idnumber <> ''");
@$num_rows=mysql_num_rows($result);
if(!$num_rows){
echo "<meta http-equiv='refresh' content=0;URL=main-result.php>";
}
echo"<table id=\"rounded-corner\" summary=\"2007 Major IT Companies' Profit\">";
echo"<caption align=\"bottom\">result $num_rows E/N </caption>";
echo"<tr><th>E/N</th><th>FirstName</th><th>LastName</th></tr>";
while($data = mysql_fetch_array($result)){
echo"<tr>";
print"<td><a href='main-find-result.php?idnumber=".$data['idnumber']."'>".$data['idnumber']."</a></td><td>{$data['firstname']}</td><td>{$data['lastname']}</td>";
echo"</tr>";
}
echo"</table>";

?>
    <p></p>
    <!-- end #mainContent --></div>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
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
default : echo"<center><h2>หน้านี้อนุญาติให้ผู้ดูแลระบบเข้าใช้เท่านั้น</h2></center><bt><br>";
echo"<center><h4>ระบบจะพาท่านกลับสู่หน้าหลัก ภายใน 3 วินาที</h4></center>";
echo "<meta http-equiv='refresh' content=3;URL=index.php>";
break ; }
?>