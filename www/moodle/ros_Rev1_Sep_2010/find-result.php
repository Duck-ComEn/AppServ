<?php
require_once('Connections/ros.php');
if(!isset($_SESSION)){
session_start();
}?>
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
case "super"  : 
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
.style1 {	color: #0000FF;
	height: 30px;
}
.style3 {	color: #0000FF;
	font-weight: bold;
	font-style: italic;
}
.style4 {	font-size: 16px
}
.style5 {color: #FF0000}
-->
</style>
</head>


<body class="twoColLiqLtHdr">

<div id="container"> 
  <div id="header">
    <h1>Recertification Online System(ROS)</h1>
    <p align="right"><span class="style4"><span class="style1">ยินดีต้อนรับ คุณ</span><span class="style3"> <?php echo $_SESSION['MM_FirstName'].' '.$_SESSION['MM_LastName'] ;?></span></span></p>
  </div>
  <div id="sidebar1">
    <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="main-super.php">หน้าหลัก</a>      </li>
      <li><a href="main-super-warn.php">การแจ้งเตือน</a></li>
    <li><a href="main-super-en.php">พนักงานในสังกัด</a>      </li>
      <li><a href="#" class="MenuBarItemSubmenu">ผลการสอบพนักงาน</a>
        <ul>
          <li><a href="main-super-en-result.php">ทั้งหมด</a></li>
          <li><a href="find-result-some.php">เฉพาะที่มีคะแนน</a></li>
        </ul>
      </li>
      <li><a href="logout.php">ออกจากระบบ</a></li>
    </ul>
    <h3>&nbsp;</h3>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
  <?PHP
	//mysql_select_db($database_ros, $ros);
	mysql_select_db($database_ros);
	$queryLogin = "SELECT
mdl_user.firstname,
mdl_user.lastname,
mdl_user.idnumber,
mdl_user.department,
mdl_user.institution,
mdl_user.city,
mdl_user.email
FROM
mdl_user
WHERE
mdl_user.idnumber ='".$_GET['idnumber']."'"; 
	//$rcsLogin = mysql_query($queryLogin, $ros) or die(mysql_error());
	$rcsLogin = mysql_query($queryLogin);
	$totalRows = mysql_num_rows($rcsLogin);
	$rowLogin = mysql_fetch_array($rcsLogin);
    ?>
    <h2>ผลการสอบของพนักงาน</h2>
    <p><table width="710" border="0">
      <tr>
        <td width="88"><div align="left"><strong>ชื่อ</strong></div></td>
        <td width="208"><?php echo $rowLogin['firstname'];?></td>
        <td width="84"><div align="left"><strong>นามสกุล</strong></div></td>
        <td width="275"><?php echo $rowLogin['lastname'] ;?></td>
      </tr>
      <tr>
        <td><div align="left"><strong>E/N</strong></div></td>
        <td><?php echo $rowLogin['idnumber'];?></td>
        <td><div align="left"><strong>แผนก</strong></div></td>
        <td><?php echo $rowLogin['department'];?></td>
      </tr>
      <tr>
        <td><div align="left"><strong>หัวหน้างาน</strong></div></td>
        <td colspan="3"><?php echo $rowLogin['institution'];?></td>
      </tr>
      <tr>
        <td><div align="left"><strong>โรงงาน</strong></div></td>
        <td colspan="3"><?php echo $rowLogin['city'];?></td>
      </tr>
      <tr>
        <td><strong>E-mail</strong></td>
        <td colspan="3"><?php echo $rowLogin['email'];?></td>
      </tr>
      <tr>
        <td colspan="4"><div align="left">
          <?php 

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
mdl_user.idnumber ='".$_GET['idnumber']."'");
$p=1;
@$num_rows=mysql_num_rows($result);
if(!$num_rows){
echo "<meta http-equiv='refresh' content=0;URL=find-result.php>";
}
if($num_rows>0){
echo"<table id=box-table-a>";
echo"<tr><th>course</th><th><center>1</center></th><th><center>2<center></th><th><center>3<center></th><th><center>Latest Time<center></th><th>Next Time</th></tr>";
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
print "<td>".mysql_result($result,$e,2)."</td>";
$e++;
}else if($a1==2){
print "<td>".mysql_result($result,$e,2)."</td>";
$e++;
}else if ($a1==3){
print "<td>".mysql_result($result,$e,2)."</td>";
$e++;
}else {print "<td>None</td>";
$e++; 
}
//echo" col2 ";
@$a1=mysql_result($result,$e,1);
if($a1==1){
print "<td>".mysql_result($result,$e,2)."</td>";
$e++;
}else if($a1==2){
print "<td>".mysql_result($result,$e,2)."</td>";
$e++;
}else if ($a1==3){
print "<td>".mysql_result($result,$e,2)."</td>";
$e++;
}else {print "<td>None</td>";
$e++; 
}
//echo" col3 ";
@$a1=mysql_result($result,$e,1);
if($a1==1){
print "<td>".mysql_result($result,$e,2)."</td>";
$e++;
}else if($a1==2){
print "<td>".mysql_result($result,$e,2)."</td>";
$e++;
}else if ($a1==3){
print "<td>".mysql_result($result,$e,2)."</td>";
$e++;
}else {print "<td>None></td>";
}
$fday = getdate(mysql_result($result,$e-1,3));
$day= $fday['mday'].'/'.$fday['mon'].'/'.$fday['year'];
print "<td>".$day."</td>";
$today = getdate(mysql_result($result,$e-1,3));
$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
$today = getdate($nextyear);
echo "<td>".$today['mday'].'/'.$today['mon'].'/'.$today['year']."</td>";

}else if($p==2){
@$a1=mysql_result($result,$e,1);
if($a1==1){
print "<td>".mysql_result($result,$e,2)."</td>";
$e++;
}else if($a1==2){
print "<td>".mysql_result($result,$e,2)."</td>";
$e++;
}else if ($a1==3){
print "<td>".mysql_result($result,$e,2)."</td>";
$e++;
}else {print "<td>None</td>";
$e++; 
}
//echo" col3 ";
@$a1=mysql_result($result,$e,1);
if($a1==1){
print "<td>".mysql_result($result,$e,2)."</td>";
$e++;
}else if($a1==2){
print "<td>".mysql_result($result,$e,2)."</td>";
$e++;
}else if ($a1==3){
print "<td>".mysql_result($result,$e,2)."</td>";
$e++;
}else {print "<td>None</td> ";
}echo"<td align='center'>-</td>";
$fday = getdate(mysql_result($result,$e-1,3));
$day= $fday['mday'].'/'.$fday['mon'].'/'.$fday['year'];
print "<td>".$day."</td>";
$today = getdate(mysql_result($result,$e-1,3));
$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
$today = getdate($nextyear);
echo "<td>".$today['mday'].'/'.$today['mon'].'/'.$today['year']."</td>";

}else if($p==1){
@$a1=mysql_result($result,$e,1);
if($a1==1){
print "<td>".mysql_result($result,$e,2)."</td>";
$e++;
}else if($a1==2){
print "<td>".mysql_result($result,$e,2)."</td>";
$e++;
}else if ($a1==3){
print "<td>".mysql_result($result,$e,2)."</td>";
$e++;
}else {print "<td>None</td>";
//$e++; 
}echo "<td align='center'>-</td><td align='center'>-</td> ";
$fday = getdate(mysql_result($result,$e-1,3));
$day= $fday['mday'].'/'.$fday['mon'].'/'.$fday['year'];
print "<td>".$day."</td>";
$today = getdate(mysql_result($result,$e-1,3));
$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
$today = getdate($nextyear);
echo "<td>".$today['mday'].'/'.$today['mon'].'/'.$today['year']."</td>";

}

echo" </tr>";
$p=1;

}
echo"</table>";
	}//if >0
	else echo"<br><h2><center>ไม่มีผลสอบ</center></h2>";
	    ?></div></td>
      </tr>
    </table>
	</p>
	<div align="center" class="style5"></div>
  </div>
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
default : echo"<center><h2>หน้านี้อนุญาติให้หัวหน้า่งานข้าใช้เท่านั้น</h2></center><bt><br>";
echo"<center><h4>ระบบจะพาท่านกลับสู่หน้าหลัก ภายใน 3 วินาที</h4></center>";
echo "<meta http-equiv='refresh' content=3;URL=index.php>";
break ; }
?>