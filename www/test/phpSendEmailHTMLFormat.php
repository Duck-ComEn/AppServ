<html>
<head>
<title>ThaiCreate.Com PHP Sending Email</title>
</head>
<body>
<?
	$strTo = "duck_comen@hotmail.com";
	$strSubject = "Test Send Email";
	$strHeader = "Content-type: text/html; charset=UTF-8\r\n"; // or UTF-8 //
	$strHeader .= "From: MR.Piyanun<duck_comen@hotmail.com>\r\nReply-To: duck_comen@hotmail.com";
	$strVar = "My Message";
	$strMessage = "
	<h1>My Message</h1><br>
	<table width='285' border='1'>
	 <tr>
	 <td><div align='center'><strong>My Message </strong></div></td>
	 <td><div align='center'><font color='red'>My Message</font></div></td>
	 <td><div align='center'><font size='2'>My Message</font></div></td>
	 </tr>
	 <tr>
	 <td><div align='center'>My Message</div></td>
	 <td><div align='center'>My Message</div></td>
	 <td><div align='center'>My Message</div></td>
	 </tr>
	 <tr>
	 <td><div align='center'>".$strVar."</div></td>
	 <td><div align='center'>".$strVar."</div></td>
	 <td><div align='center'>".$strVar."</div></td>
	 </tr>
	</table>";

	$flgSend = mail($strTo,$strSubject,$strMessage,$strHeader);  // @ = No Show Error //
	if($flgSend)
	{
		echo "Email Sending.";
	}
	else
	{
		echo "Email Can Not Send.";
	}
?>
</body>
</html>