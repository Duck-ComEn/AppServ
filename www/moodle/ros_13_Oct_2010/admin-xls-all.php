<?php
require_once('Connections/ros.php');
if(!isset($_SESSION)){
session_start();
}
		switch($_SESSION['MM_UserRight']){
		case "admin"  : 
function duration($begin,$end){
    $thisday=getdate();
	$remain=intval(strtotime($begin)-$thisday[0]);
	$wan=floor($remain/86400)+1;
	$l_wan=$remain%86400;
	$hour=floor($l_wan/3600);
	$l_hour=$l_wan%3600;
	$minute=floor($l_hour/60);
	$second=$l_hour%60;
	if($second<0){
	return "expire";
	}else return $wan;
}
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="report-warnning-all.xls"');
//mysql_connect('localhost','root','');
//mysql_select_db("moodle");
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
mdl_quiz_attempts.timefinish <> 0 AND
mdl_user.idnumber <> ''
ORDER BY
mdl_user.idnumber ASC,
mdl_quiz_attempts.timemodified ASC");
@$num_rows=mysql_num_rows($result);
if(!$num_rows){
echo "can not connect database";
}
$p=1;
$t=0;

for($i=0;$i<$num_rows;$i++){
@$name2=mysql_result($result,$i+1,2)." ".mysql_result($result,$i+1,3);
@$name=mysql_result($result,$i,2)." ".mysql_result($result,$i,3);
$id=mysql_result($result,$i,0);
$cf=mysql_result($result,$i,4);
@$cs=mysql_result($result,$i+1,4);
if($cf==$cs && $name==$name2){
$p++;
continue;
   }
 $a[$t][0]=$id;$a[$t][1]=$name;$a[$t][2]=$cf;
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
$a[$t][3]=$today['mday'].'/'.$today['mon'].'/'.$today['year'];
$fday = getdate(mysql_result($result,$e-1,6));
$day= $fday['mday'].'/'.$fday['mon'].'/'.$fday['year'];
$a[$t][4]=duration($today['year'].'-'.$today['mon'].'-'.$today['mday'] ."00:00:01",date("Y-m-d H:i:s"));

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
$a[$t][3]=$today['mday'].'/'.$today['mon'].'/'.$today['year'];
$fday = getdate(mysql_result($result,$e-1,6));
$day= $fday['mday'].'/'.$fday['mon'].'/'.$fday['year'];
$a[$t][4]=duration($today['year'].'-'.$today['mon'].'-'.$today['mday'] ."00:00:01",date("Y-m-d H:i:s"));

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
$a[$t][3]=$today['mday'].'/'.$today['mon'].'/'.$today['year'];
$fday = getdate(mysql_result($result,$e-1,6));
$day= $fday['mday'].'/'.$fday['mon'].'/'.$fday['year'];
$a[$t][4]=duration($today['year'].'-'.$today['mon'].'-'.$today['mday'] ."00:00:01",date("Y-m-d H:i:s"));
}
$p=1;
$t++;
}
echo "<br><br><br><table border=1><caption align=top>Report Recertification Warnning</caption>
<tr><td width=58 bgcolor=#cccccc align=center>E/N</td><td width=200 bgcolor=#cccccc>Name</td><td width=330 bgcolor=#cccccc>Course</td><td width=90 bgcolor=#cccccc align=center>Time</td><td width=100 bgcolor=#cccccc align=center>Remain Time</td></tr>";
for($j=0;$j<$t;$j++){
echo "<tr><td width=58>{$a[$j][0]}</td><td width=200>{$a[$j][1]}</td><td width=330>{$a[$j][2]}</td><td width=90 align=center>{$a[$j][3]}</td><td width=100 align=center>{$a[$j][4]}</td></tr>";
}
echo "</table>";
}
?>