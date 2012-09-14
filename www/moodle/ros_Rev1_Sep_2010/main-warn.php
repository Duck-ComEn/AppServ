<?php
require_once('Connections/ros.php');
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
    <h2>แจ้งเตือน</h2>
    <?php
function duration($begin,$end){
    $thisday=getdate();
	$remain=intval(strtotime($begin)-$thisday[0]);
	$wan=floor($remain/86400);
	$l_wan=$remain%86400;
	$hour=floor($l_wan/3600);
	$l_hour=$l_wan%3600;
	$minute=floor($l_hour/60);
	$second=$l_hour%60;
	if($second<0){
	return "expire";
	}else return $wan."วัน";
}

$result=mysql_query("SELECT
mdl_user.idnumber,
mdl_quiz_attempts.attempt,
mdl_user.firstname,
mdl_user.lastname,
mdl_course.fullname,
mdl_quiz_attempts.sumgrades,
mdl_quiz_attempts.timefinish
FROM
mdl_quiz_attempts
INNER JOIN mdl_user ON mdl_quiz_attempts.userid = mdl_user.id
INNER JOIN mdl_quiz ON mdl_quiz_attempts.quiz = mdl_quiz.id
INNER JOIN mdl_course ON mdl_quiz.course = mdl_course.id
WHERE
mdl_quiz_attempts.timefinish <> 0 ORDER BY
mdl_user.idnumber ASC,
mdl_quiz_attempts.timemodified ASC");
$p=1;
@$num_rows=mysql_num_rows($result);
if(!$num_rows){
echo "<meta http-equiv='refresh' content=0;URL=main-warn.php>";
}
echo"<table id=\"rounded-corner\" summary=\"2007 Major IT Companies' Profit\">";
echo"<tr><th>E/N</th><th>Name</th><th>course</th><th><center>Time<center></th><th>Remain Time</th></tr>";
for($i=0;$i<$num_rows;$i++){
echo"<tr>";
@$name2=mysql_result($result,$i+1,2)." ".mysql_result($result,$i+1,3);
@$name=mysql_result($result,$i,2)." ".mysql_result($result,$i,3);
$id=mysql_result($result,$i,0);
$cf=mysql_result($result,$i,4);
@$cs=mysql_result($result,$i+1,4);
if($cf==$cs && $name==$name2){
$p++;
continue;
   }
   echo"<td>$id</td><td>$name</td><td>$cf</td> ";
   if($p==3){
@$a1=mysql_result($result,$e,1);
if($a1==1){

$e++;
}else if($a1==2){

$e++;
}else if ($a1==3){

$e++;
}else {
$e++; 
}
//echo" col2 ";
@$a1=mysql_result($result,$e,1);
if($a1==1){

$e++;
}else if($a1==2){

$e++;
}else if ($a1==3){

$e++;
}else {
$e++; 
}
//echo" col3 ";
@$a1=mysql_result($result,$e,1);
if($a1==1){

$e++;
}else if($a1==2){

$e++;
}else if ($a1==3){

$e++;
}else {
}

$today = getdate(mysql_result($result,$e-1,6));
$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
$today = getdate($nextyear);
echo "<td>".$today['mday'].'/'.$today['mon'].'/'.$today['year']."</td>";
$fday = getdate(mysql_result($result,$e-1,6));
$day= $fday['mday'].'/'.$fday['mon'].'/'.$fday['year'];
print "<td>".duration($today['year'].'-'.$today['mon'].'-'.$today['mday'] ."00:00:01",date("Y-m-d H:i:s"))."</td>";

}else if($p==2){
@$a1=mysql_result($result,$e,1);
if($a1==1){

$e++;
}else if($a1==2){

$e++;
}else if ($a1==3){

$e++;
}else {
$e++; 
}
//echo" col3 ";
@$a1=mysql_result($result,$e,1);
if($a1==1){

$e++;
}else if($a1==2){

$e++;
}else if ($a1==3){

$e++;
}else {
}
$today = getdate(mysql_result($result,$e-1,6));
$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
$today = getdate($nextyear);
echo "<td>".$today['mday'].'/'.$today['mon'].'/'.$today['year']."</td>";
$fday = getdate(mysql_result($result,$e-1,6));
$day= $fday['mday'].'/'.$fday['mon'].'/'.$fday['year'];
print "<td>".duration($today['year'].'-'.$today['mon'].'-'.$today['mday'] ."00:00:01",date("Y-m-d H:i:s"))."</td>";

}else if($p==1){
@$a1=mysql_result($result,$e,1);
if($a1==1){

$e++;
}else if($a1==2){

$e++;
}else if ($a1==3){

$e++;
}else {
//$e++; 
}
$today = getdate(mysql_result($result,$e-1,6));
$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
$today = getdate($nextyear);
echo "<td>".$today['mday'].'/'.$today['mon'].'/'.$today['year']."</td>";
$fday = getdate(mysql_result($result,$e-1,6));
$day= $fday['mday'].'/'.$fday['mon'].'/'.$fday['year'];
print "<td>".duration($today['year'].'-'.$today['mon'].'-'.$today['mday'] ."00:00:01",date("Y-m-d H:i:s"))."</td>";
}

echo" </tr>";
$p=1;

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