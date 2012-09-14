<?php
if(!isset($_SESSION)){
session_start();
}
require("FPDF/ThaiPDF.class.php");
$pdf = new ThaiPDF();
$pdf->AddThaiFont("cordia");
$pdf->AddPage();
$pdf->SetFont("cordia", '', 22);
$pdf->setx(70);
$pdf->write(11,"แบบรายงานผลสอบเป็นรายบุคคล");
$pdf->SetFont("cordia", '', 16);

$html = "<br><br><br><br>
 <table border=0 align=center>
      <tr>
	  <td width=84>&nbsp;</td>
        <td width=84><b>ชื่อ</b></td>
        <td width=300><u>{$_SESSION['MM_FirstName']}</u></td>
        <td width=84><b>นามสกุล</b></td>
        <td width=300><u>{$_SESSION['MM_LastName']}</u></td>
      </tr>
      <tr>
	  <td width=84>&nbsp;</td>
        <td width=84><b>E/N</b></td>
        <td width=300><u>{$_SESSION['MM_Idnumber']}</u></td>
        <td width=84><b>แผนก</b></td>
        <td width=300><u>{$_SESSION['MM_Department']}</u></td>
      </tr>
      <tr>
	  <td width=84>&nbsp;</td>
        <td width=84><b>หัวหน้างาน</b></td>
        <td width=300><u>{$_SESSION['MM_Institution']}</u></td>
		<td width=84><b>โรงงาน<b></td>
		<td width=300><u>{$_SESSION['MM_City']}</u></td>
      </tr>
      <tr>
	  <td width=84>&nbsp;</td>
        <td width=84><b>E-mail</b></td>
        <td width=300><u>{$_SESSION['MM_Email']}</u></td>
      </tr>
</table>";
$pdf->WriteHTML($html);
require_once('Connections/ros.php');
mysql_connect('localhost','root','root');
mysql_select_db("moodle");
					$result=mysql_query("SELECT
										mdl_course.fullname,
										mdl_quiz_attempts.attempt,
										mdl_quiz_attempts.sumgrades,
										mdl_quiz_attempts.timefinish,
										mdl_quiz.grade
					FROM
						mdl_quiz_attempts
						INNER JOIN mdl_user ON mdl_quiz_attempts.userid = mdl_user.id
						INNER JOIN mdl_quiz ON mdl_quiz_attempts.quiz = mdl_quiz.id
						INNER JOIN mdl_course ON mdl_quiz.course = mdl_course.id
					WHERE
						mdl_user.username ='".$_SESSION['MM_UserName']."'");
$num_rows=mysql_num_rows($result);
$p=1;
$t=0;
for($i=0;$i<$num_rows;$i++){
$cf=mysql_result($result,$i,0);
@$cs=mysql_result($result,$i+1,0);
if($cf==$cs){
$p++;
continue;
   }
   $a[$t][0]=$cf;
    if($p==3){
@$a1=mysql_result($result,$e,1);
if($a1==1){
$a[$t][1]=round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 .'%';
$e++;
}else if($a1==2){
$a[$t][1]=round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 .'%';
$e++;
}else if ($a1==3){
$a[$t][1]=round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 .'%';
$e++;
}
//echo" col2 ";
@$a1=mysql_result($result,$e,1);
if($a1==1){
$a[$t][2]=round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 .'%';
$e++;
}else if($a1==2){
$a[$t][2]=round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 .'%';
$e++;
}else if ($a1==3){
$a[$t][2]=round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 .'%';
$e++;
}
//echo" col3 ";
@$a1=mysql_result($result,$e,1);
if($a1==1){
$a[$t][3]=round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 .'%';
$e++;
}else if($a1==2){
$a[$t][3]=round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 .'%';
$e++;
}else if ($a1==3){
$a[$t][3]=round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 .'%';
$e++;
}
$fday = getdate(mysql_result($result,$e-1,3));
if(strlen($fday['mon'])<=1){
													$fday['mon']='0'.$fday['mon'];
												}
												if(strlen($fday['mday'])<=1){
													$fday['mday']='0'.$fday['mday'];
												}
$day= $fday['mon'].'/'.$fday['mday'].'/'.$fday['year'];
$a[$t][4]=$day;
$today = getdate(mysql_result($result,$e-1,3));
$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
$today = getdate($nextyear);
if(strlen($today['mon'])<=1){
													$today['mon']='0'.$today['mon'];
												}
												if(strlen($today['mday'])<=1){
													$today['mday']='0'.$today['mday'];
												}
$a[$t][5]=$today['mon'].'/'.$today['mday'].'/'.$today['year'];

}else if($p==2){
@$a1=mysql_result($result,$e,1);
if($a1==1){
$a[$t][1]=round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 .'%';
$e++;
}else if($a1==2){
$a[$t][1]=round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 .'%';
$e++;
}else if ($a1==3){
$a[$t][1]=round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 .'%';
$e++;
}
//echo" col3 ";
@$a1=mysql_result($result,$e,1);
if($a1==1){
$a[$t][2]=round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 .'%';
$e++;
}else if($a1==2){
$a[$t][2]=round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 .'%';
$e++;
}else if ($a1==3){
$a[$t][2]=round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 .'%';
$e++;
}$a[$t][3]="-";
$fday = getdate(mysql_result($result,$e-1,3));
if(strlen($fday['mon'])<=1){
													$fday['mon']='0'.$fday['mon'];
												}
												if(strlen($fday['mday'])<=1){
													$fday['mday']='0'.$fday['mday'];
												}
$day= $fday['mon'].'/'.$fday['mday'].'/'.$fday['year'];
$a[$t][4]=$day;
$today = getdate(mysql_result($result,$e-1,3));
$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
$today = getdate($nextyear);
if(strlen($today['mon'])<=1){
													$today['mon']='0'.$today['mon'];
												}
												if(strlen($today['mday'])<=1){
													$today['mday']='0'.$today['mday'];
												}
$a[$t][5]=$today['mon'].'/'.$today['mday'].'/'.$today['year'];

}else if($p==1){
@$a1=mysql_result($result,$e,1);
if($a1==1){
$a[$t][1]=round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 .'%';
$e++;
}else if($a1==2){
$a[$t][1]=round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 .'%';
$e++;
}else if ($a1==3){
$a[$t][1]=round((mysql_result($result,$e,2)/mysql_result($result,$e,4)),2)*100 .'%';
$e++;
}$a[$t][2]="-";$a[$t][3]="-";
$fday = getdate(mysql_result($result,$e-1,3));
if(strlen($fday['mon'])<=1){
													$fday['mon']='0'.$fday['mon'];
												}
												if(strlen($fday['mday'])<=1){
													$fday['mday']='0'.$fday['mday'];
												}
$day= $fday['mon'].'/'.$fday['mday'].'/'.$fday['year'];
$a[$t][4]=$day;
$today = getdate(mysql_result($result,$e-1,3));
$nextyear  = mktime(0, 0, 0, $today['mon'],$today['mday'],   $today['year']+1);
$today = getdate($nextyear);
if(strlen($today['mon'])<=1){
													$today['mon']='0'.$today['mon'];
												}
												if(strlen($today['mday'])<=1){
													$today['mday']='0'.$today['mday'];
												}
$a[$t][5]=$today['mon'].'/'.$today['mday'].'/'.$today['year'];
}
$p=1;
$t++;
}
$table="<br><table border=1>
<tr><td width=475 bgcolor=#cccccc align=center>course</td><td width=45 bgcolor=#cccccc align=center>1</td><td width=45 bgcolor=#cccccc align=center>2</td><td width=45 bgcolor=#cccccc align=center>3</td><td width=80 bgcolor=#cccccc align=center>time</td><td width=80 bgcolor=#cccccc align=center>next time</td></tr>";
for($i=0;$i<$t;$i++){
$table.="<tr><td width=475>{$a[$i][0]}</td><td width=45 align=center>{$a[$i][1]}</td><td width=45 align=center>{$a[$i][2]}</td><td width=45 align=center>{$a[$i][3]}</td><td width=80 align=center>{$a[$i][4]}</td><td width=80 align=center>{$a[$i][5]}</td></tr>";
}
$table.="</table>";

$pdf->writehtml($table);

$pdf->Output();
?>