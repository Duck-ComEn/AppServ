<html>
<head>
<title>Benchmaek Electronics</title>
</head>
<body>

<? 
$iden=$_POST['en'];
 $objConnect = mysql_connect("localhost","root","1234")or die ("fly");
 $objDB = mysql_select_db("moodle");
 $str="select name from mdl_quiz where id=$q";
 $courseName=  mysql_query($str);
while($tmp = mysql_fetch_array($courseName)){
 echo "<center>".$tmp['name']."</center>";
    
}
?>

<form name="frmMain" method="post" action="search.php?q=<?echo $q?>" >

<center><br><br><br>



<table width="20%" border="1">
	<tr>
		<td align = center><h1>Search E/N </h1></td></tr>
	<tr>
		<td align=center>
		<input type="text" name="en" value="<?echo $iden?>">
		<input name="btnSubmit" type="submit" value="Submit">
		</td></tr>
</table>	
	
	
	
	
	
</center>
</form>
<?
$en=$POST_VARS['en'];
if(strcasecmp($iden, null)==0)exit;
else{
  $strSQL = "SELECT mdl_user.idnumber,mdl_user.firstname,mdl_user.lastname,mdl_quiz_attempts.attempt,mdl_quiz_attempts.sumgrades,mdl_quiz.name FROM mdl_user,mdl_quiz_grades,mdl_quiz,mdl_quiz_attempts WHERE (mdl_user.idnumber = $iden) AND (mdl_user.id=mdl_quiz_grades.userid) AND (mdl_quiz_grades.quiz=mdl_quiz.id) AND (mdl_quiz.id = $q) AND (mdl_quiz_attempts.userid=mdl_user.id) AND (mdl_quiz.id=mdl_quiz_attempts.quiz)" ;
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
 <br>
 <br>
<table width=100% border=1 align=center>
  <tr>
      <th width="20%"> <div align="center">E/N </div></th>
        <th width="25%"> <div align="center">Name </div></th>
	<th width="25%"> <div align="center">Attempt </div></th>
	<th width="10%"> <div align="center">Grade </div></th>
	<th width="45%"> <div align="center">Course </div></th>
						
</tr>		
<?
while($objResult = mysql_fetch_array($objQuery)){ ?>
			<tr>
				<td><div align="center"><?=$objResult["idnumber"];?></div></td>
				<td><?=$objResult["firstname"]."  ".$objResult["lastname"];?></td>
				<td align="center"><?=$objResult["attempt"];?></td>
				<td align="center"><?=$objResult["sumgrades"];?></td>
				<td><?=$objResult["name"];?></td>
				
			
		</tr>
		<? } ?>
		</table>
	
    
    
    
<?}?>
</body>
</html>