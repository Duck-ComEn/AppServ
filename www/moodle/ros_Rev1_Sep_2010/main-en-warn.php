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
    <p align="right" class="style1">ยินดีต้อนรับ คุณ <strong><em><?php echo $_SESSION['MM_FirstName'].' '.$_SESSION['MM_LastName'] ;?></em></strong></p>
  <!-- end #header --></div>
  <div id="sidebar1">
    <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="main-en.php">หน้าหลัก</a></li>
      <li><a href="main-en-warn.php">การแจ้งเตือน</a></li>
      <li><a href="main-en-result.php">ผลคะแนนสอบ</a> </li>
      <li><a href="logout.php">ออกจากระบบ</a>      </li>
      <p>&nbsp;</p>
    </ul>
    <h3>&nbsp;</h3>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
    <h2>แจ้งเตือนการสอบหมดอายุ</h2>
    
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
$username=$_SESSION['MM_UserName'];
require_once('Connections/ros.php');
//mysql_connect('localhost','root','');
//mysql_select_db("moodle");
$result=mysql_query("SELECT
mdl_course.fullname,
mdl_quiz_attempts.attempt,
mdl_quiz_attempts.sumgrades,
mdl_quiz_attempts.timefinish
FROM
mdl_quiz_attempts
INNER JOIN mdl_user ON mdl_quiz_attempts.userid = mdl_user.id
INNER JOIN mdl_quiz ON mdl_quiz_attempts.quiz = mdl_quiz.id
INNER JOIN mdl_course ON mdl_quiz.course = mdl_course.id
WHERE
mdl_user.username ='".$_SESSION['MM_UserName']."'");
$p=1;
@$num_rows=mysql_num_rows($result);
if(!$num_rows){
echo "<meta http-equiv='refresh' content=0;URL=main-en-warn.php>";
}
echo"<table id=\"rounded-corner\"";
echo"<tr><th>course</th><th><center>Time<center></th><th>Remain Time</th></tr>";
for($i=0;$i<$num_rows;$i++){
echo"<tr>";
$cf=mysql_result($result,$i,0);
@$cs=mysql_result($result,$i+1,0);
if($cf==$cs){
$p++;
continue;
   }
   echo"<td>$cf</td> ";
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

$today = getdate(mysql_result($result,$e-1,3));
$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
$today = getdate($nextyear);
echo "<td>".$today['mday'].'/'.$today['mon'].'/'.$today['year']."</td>";
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
$today = getdate(mysql_result($result,$e-1,3));
$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
$today = getdate($nextyear);
echo "<td>".$today['mday'].'/'.$today['mon'].'/'.$today['year']."</td>";
$fday = getdate(mysql_result($result,$e-1,3));
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
$today = getdate(mysql_result($result,$e-1,3));
$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
$today = getdate($nextyear);
echo "<td>".$today['mday'].'/'.$today['mon'].'/'.$today['year']."</td>";
$fday = getdate(mysql_result($result,$e-1,3));
$day= $fday['mday'].'/'.$fday['mon'].'/'.$fday['year'];
print "<td>".duration($today['year'].'-'.$today['mon'].'-'.$today['mday'] ."00:00:01",date("Y-m-d H:i:s"))."</td>";
}

echo" </tr>";
$p=1;

}
echo"</table>";

?>
      <!-- end #mainContent -->
      
  </div>
<p>
	  <!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
  </p>
	<p><br class="clearfloat" />
        </p>
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